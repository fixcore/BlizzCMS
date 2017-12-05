<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

/**
 * This class uses GitHub api to obtain a list of files present in a directory
 * to avoid fetching files that don't exist.
 *
 * @todo Could use file hashes to 1) avoid fetching files with same hash as
 * the source. 2) avoid fetching files which haven't changed since last check
 * if we store them.
 */
class LU_GitHubFetcher extends LU_HttpFetcher {

	public function fetchDirectory( $pattern ) {
		$p =  '~^https://raw.github\.com/(?P<org>[^/]+)/(?P<repo>[^/]+)/(?P<branch>[^/]+)/(?P<path>.+)/.+$~';
		preg_match( $p, $pattern, $m );

		$json = Http::get( "https://api.github.com/repos/{$m['org']}/{$m['repo']}/contents/{$m['path']}" );
		if ( !$json ) {
			throw new Exception( "Unable to get directory listing for {$m['org']}/{$m['repo']}" );
		}

		$files = array();
		$json = FormatJson::decode( $json, true );
		foreach ( $json as $fileinfo ) {
			$fileurl = dirname( $pattern ) . '/' . $fileinfo['name'];
			$file = $this->fetchFile( $fileurl );
			if ( $file ) {
				$files[$fileurl] = $file;
			}
		}
		return $files;
	}
}
