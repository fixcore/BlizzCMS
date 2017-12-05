<?php
/**
 * Copyright © 2007 Martin Seidel (Xarax) <jodeldi@gmx.de>
 *
 * Inspired by djvuhandler from Tim Starling
 * Modified and written by Xarax
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 */

class PdfHandler extends ImageHandler {

	/**
	 * @return bool
	 */
	function isEnabled() {
		global $wgPdfProcessor, $wgPdfPostProcessor, $wgPdfInfo;

		if ( !isset( $wgPdfProcessor ) || !isset( $wgPdfPostProcessor ) || !isset( $wgPdfInfo ) ) {
			wfDebug( "PdfHandler is disabled, please set the following\n" );
			wfDebug( "variables in LocalSettings.php:\n" );
			wfDebug( "\$wgPdfProcessor, \$wgPdfPostProcessor, \$wgPdfInfo\n" );
			return false;
		}
		return true;
	}

	/**
	 * @param $file
	 * @return bool
	 */
	function mustRender( $file ) {
		return true;
	}

	/**
	 * @param $file
	 * @return bool
	 */
	function isMultiPage( $file ) {
		return true;
	}

	/**
	 * @param $name
	 * @param $value
	 * @return bool
	 */
	function validateParam( $name, $value ) {
		if ( in_array( $name, array( 'width', 'height', 'page' ) ) ) {
			return ( $value > 0 );
		}
		return false;
	}

	/**
	 * @param $params array
	 * @return bool|string
	 */
	function makeParamString( $params ) {
		$page = isset( $params['page'] ) ? $params['page'] : 1;
		if ( !isset( $params['width'] ) ) {
			return false;
		}
		return "page{$page}-{$params['width']}px";
	}

	/**
	 * @param $str string
	 * @return array|bool
	 */
	function parseParamString( $str ) {
		$m = false;

		if ( preg_match( '/^page(\d+)-(\d+)px$/', $str, $m ) ) {
			return array( 'width' => $m[2], 'page' => $m[1] );
		}

		return false;
	}

	/**
	 * @param $params array
	 * @return array
	 */
	function getScriptParams( $params ) {
		return array(
			'width' => $params['width'],
			'page' => $params['page'],
		);
	}

	/**
	 * @return array
	 */
	function getParamMap() {
		return array(
			'img_width' => 'width',
			'img_page' => 'page',
		);
	}

	/**
	 * @param $width
	 * @param $height
	 * @param $msg
	 * @return MediaTransformError
	 */
	protected function doThumbError( $width, $height, $msg ) {
		return new MediaTransformError( 'thumbnail_error',
			$width, $height, wfMessage( $msg )->inContentLanguage()->text() );
	}

	/**
	 * @param $image File
	 * @param $dstPath string
	 * @param $dstUrl string
	 * @param $params array
	 * @param $flags int
	 * @return MediaTransformError|MediaTransformOutput|ThumbnailImage|TransformParameterError
	 */
	function doTransform( $image, $dstPath, $dstUrl, $params, $flags = 0 ) {
		global $wgPdfProcessor, $wgPdfPostProcessor, $wgPdfHandlerDpi;

		$metadata = $image->getMetadata();

		if ( !$metadata ) {
			return $this->doThumbError(
				isset( $params['width'] ) ? $params['width'] : null,
				isset( $params['height'] ) ? $params['height'] : null,
				'pdf_no_metadata'
			);
		}

		if ( !$this->normaliseParams( $image, $params ) ) {
			return new TransformParameterError( $params );
		}

		$width = $params['width'];
		$height = $params['height'];
		$page = $params['page'];

		if ( $page > $this->pageCount( $image ) ) {
			return $this->doThumbError( $width, $height, 'pdf_page_error' );
		}

		if ( $flags & self::TRANSFORM_LATER ) {
			return new ThumbnailImage( $image, $dstUrl, $width, $height, false, $page );
		}

		if ( !wfMkdirParents( dirname( $dstPath ), null, __METHOD__ ) ) {
			return $this->doThumbError( $width, $height, 'thumbnail_dest_directory' );
		}

		$srcPath = $image->getLocalRefPath();

		$cmd = '(' . wfEscapeShellArg(
			$wgPdfProcessor,
			"-sDEVICE=jpeg",
			"-sOutputFile=-",
			"-dFirstPage={$page}",
			"-dLastPage={$page}",
			"-r{$wgPdfHandlerDpi}",
			"-dBATCH",
			"-dNOPAUSE",
			"-q",
			$srcPath
		);
		$cmd .= " | " . wfEscapeShellArg(
			$wgPdfPostProcessor,
			"-depth",
			"8",
			"-resize",
			$width,
			"-",
			$dstPath
		);
		$cmd .= ")";

		wfProfileIn( 'PdfHandler' );
		wfDebug( __METHOD__ . ": $cmd\n" );
		$retval = '';
		$err = wfShellExecWithStderr( $cmd, $retval );
		wfProfileOut( 'PdfHandler' );

		$removed = $this->removeBadFile( $dstPath, $retval );

		if ( $retval != 0 || $removed ) {
			wfDebugLog( 'thumbnail',
				sprintf( 'thumbnail failed on %s: error %d "%s" from "%s"',
				wfHostname(), $retval, trim( $err ), $cmd ) );
			return new MediaTransformError( 'thumbnail_error', $width, $height, $err );
		} else {
			return new ThumbnailImage( $image, $dstUrl, $width, $height, $dstPath, $page );
		}
	}

	/**
	 * @param $image File
	 * @param $path string
	 * @return PdfImage
	 */
	function getPdfImage( $image, $path ) {
		if ( !$image ) {
			$pdfimg = new PdfImage( $path );
		} elseif ( !isset( $image->pdfImage ) ) {
			$pdfimg = $image->pdfImage = new PdfImage( $path );
		} else {
			$pdfimg = $image->pdfImage;
		}

		return $pdfimg;
	}

	/**
	 * @param $image File
	 * @return bool
	 */
	function getMetaArray( $image ) {
		if ( isset( $image->pdfMetaArray ) ) {
			return $image->pdfMetaArray;
		}

		$metadata = $image->getMetadata();

		if ( !$this->isMetadataValid( $image, $metadata ) ) {
			wfDebug( "Pdf metadata is invalid or missing, should have been fixed in upgradeRow\n" );
			return false;
		}

		wfProfileIn( __METHOD__ );
		wfSuppressWarnings();
		$image->pdfMetaArray = unserialize( $metadata );
		wfRestoreWarnings();
		wfProfileOut( __METHOD__ );

		return $image->pdfMetaArray;
	}

	/**
	 * @param $image File
	 * @param $path string
	 * @return array|bool
	 */
	function getImageSize( $image, $path ) {
		return $this->getPdfImage( $image, $path )->getImageSize();
	}

	/**
	 * @param $ext
	 * @param $mime string
	 * @param $params null
	 * @return array
	 */
	function getThumbType( $ext, $mime, $params = null ) {
		global $wgPdfOutputExtension;
		static $mime;

		if ( !isset( $mime ) ) {
			$magic = MimeMagic::singleton();
			$mime = $magic->guessTypesForExtension( $wgPdfOutputExtension );
		}
		return array( $wgPdfOutputExtension, $mime );
	}

	/**
	 * @param $image File
	 * @param $path string
	 * @return string
	 */
	function getMetadata( $image, $path ) {
		return serialize( $this->getPdfImage( $image, $path )->retrieveMetaData() );
	}

	/**
	 * @param $image File
	 * @param $metadata string
	 * @return bool
	 */
	function isMetadataValid( $image, $metadata ) {
		if ( !$metadata || $metadata === serialize(array()) ) {
			return self::METADATA_BAD;
		} elseif ( strpos( $metadata, 'mergedMetadata' ) === false ) {
			return self::METADATA_COMPATIBLE;
		}
		return self::METADATA_GOOD;
	}

	/**
	 * @param $image File
	 * @return bool|int
	 */
	function formatMetadata( $image ) {
		$meta = $image->getMetadata();

		if ( !$meta ) {
			return false;
		}
		wfSuppressWarnings();
		$meta = unserialize( $meta );
		wfRestoreWarnings();

		if ( !isset( $meta['mergedMetadata'] )
			|| !is_array( $meta['mergedMetadata'] )
			|| count( $meta['mergedMetadata'] ) < 1
		) {
			return false;
		}

		// Inherited from MediaHandler.
		return $this->formatMetadataHelper( $meta['mergedMetadata'] );
	}

	/**
	 * @param $image
	 * @return bool|int
	 */
	function pageCount( $image ) {
		$data = $this->getMetaArray( $image );
		if ( !$data || !isset( $data['Pages'] ) ) {
			return false;
		}
		return intval( $data['Pages'] );
	}

	/**
	 * @param $image File
	 * @param $page int
	 * @return array|bool
	 */
	function getPageDimensions( $image, $page ) {
		$data = $this->getMetaArray( $image );
		return PdfImage::getPageSize( $data, $page );
	}

	/**
	 * @param $image File
	 * @param $page int
	 * @return bool
	 */
	function getPageText( $image, $page ) {
		$data = $this->getMetaArray( $image, true );
		if ( !$data || !isset( $data['text'] ) || !isset( $data['text'][$page - 1] ) ) {
			return false;
		}
		return $data['text'][$page - 1];
	}

}
