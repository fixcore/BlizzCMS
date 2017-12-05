<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

/**
 * Reads MediaWiki PHP i18n files.
 */
class LU_PHPReader implements LU_Reader {
	/// @var string Language tag
	protected $code;

	public function __construct( $code = null ) {
		$this->code = $code;
	}

	public function parse( $contents ) {
		if ( strpos( $contents, '$messages' ) === false ) {
			// This happens for some core languages that only have a fallback.
			return array();
		}

		$php = $this->cleanupFile( $contents );
		$reader = new QuickArrayReader( "<?php $php" );
		$messages = $reader->getVar( 'messages' );

		if ( $this->code ) {
			return array( $this->code => $messages );
		}

		// Assuming that the array is keyed by language codes
		return $messages;
	}

	/**
	 * Removes all unneeded content from a file and returns it.
	 *
	 * @param string $contents String
	 * @return string PHP code without PHP tags
	 */
	protected function cleanupFile( $contents ) {
		// We hate the windows vs linux linebreaks.
		$contents = preg_replace( '/\r\n?/', "\n", $contents );

		// We only want message arrays.
		$results = array();
		preg_match_all( '/\$messages(?:.*\s)*?\);/', $contents, $results );

		// But we want them all in one string.
		return implode( "\n\n", $results[0] );
	}
}
