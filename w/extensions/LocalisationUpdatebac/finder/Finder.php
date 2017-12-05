<?php
/**
 * @file
 * @author Niklas Laxström
 * @license GPL-2.0+
 */

/**
 * Interface for classes which provide list of components, which should be
 * included for l10n updates.
 */
class LU_Finder {
	/**
	 * @param array $php See $wgExtensionMessagesFiles
	 * @param array $json See $wgMessagesDirs
	 * @param string $core Absolute path to MediaWiki core
	 */
	public function __construct( $php, $json, $core ) {
		$this->php = $php;
		$this->json = $json;
		$this->core = $core;
	}

	/**
	 * @return array
	 */
	public function getComponents() {
		$components = array();

		// For older versions of Mediawiki, pull json updates even though its still using php
		if ( !isset( $this->json['core'] ) ) {
			$components['core'] = array(
				'repo' => 'mediawiki',
				'orig' => "file://{$this->core}/languages/messages/Messages*.php",
				'path' => 'languages/messages/i18n/*.json',
			);
		}

		foreach ( $this->json as $key => $value ) {
			// Json should take priority if both exist
			unset( $this->php[$key] );

			foreach ( (array)$value as $subkey => $subvalue ) {
				// Mediawiki core files
				$matches = array();
				if ( preg_match( '~/(?P<path>(?:includes|languages|resources)/.*)$~', $subvalue, $matches ) ) {
					$components["$key-$subkey"] = array(
						'repo' => 'mediawiki',
						'orig' => "file://$value/*.json",
						'path' => "{$matches['path']}/*.json",
					);
					continue;
				}

				$item = $this->getItem( 'extensions', $subvalue );
				if ( $item !== null ) {
					$item['repo'] = 'extension';
					$components["$key-$subkey"] = $item;
					continue;
				}

				$item = $this->getItem( 'skins', $subvalue );
				if ( $item !== null ) {
					$item['repo'] = 'skin';
					$components["$key-$subkey"] = $item;
					continue;
				}
			}
		}

		foreach ( $this->php as $key => $value ) {
			$matches = array();
			$ok = preg_match( '~/extensions/(?P<name>[^/]+)/(?P<path>.*\.i18n\.php)$~', $value, $matches );
			if ( !$ok ) {
				continue;
			}

			$components[$key] = array(
				'repo' => 'extension',
				'name' => $matches['name'],
				'orig' => "file://$value",
				'path' => $matches['path'],
			);
		}

		return $components;
	}

	/**
	 * @param string $dir extensions or skins
	 * @param string $subvalue
	 * @return array|null
	 */
	private function getItem( $dir, $subvalue ) {
		// This ignores magic, alias etc. non message files
		$matches = array();
		if ( !preg_match( "~/$dir/(?P<name>[^/]+)/(?P<path>.*)$~", $subvalue, $matches ) ) {
			return null;
		}

		return array(
			'name' => $matches['name'],
			'orig' => "file://$subvalue/*.json",
			'path' => "{$matches['path']}/*.json",
		);
	}
}
