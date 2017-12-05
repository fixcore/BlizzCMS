<?php
/**
 * TitleBlacklist extension API
 *
 * Copyright © 2011 Wikimedia Foundation and Ian Baker <ian@wikimedia.org>
 * Based on code by Victor Vasiliev, Bryan Tong Minh, Roan Kattouw, and Alex Z.
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

/**
 * Query module check a title against the blacklist
 *
 * @ingroup API
 * @ingroup Extensions
 */
class ApiQueryTitleBlacklist extends ApiBase {

	public function __construct( $query, $moduleName ) {
		parent::__construct( $query, $moduleName, 'tb' );
	}

	public function execute() {
		$params = $this->extractRequestParams();
		$action = $params['action'];
		$override = true;
		if( isset( $params['nooverride'] ) ) {
			$override = false;
		}

		// createtalk and createpage are useless as they're treated exactly like create
		if ( $action === 'createpage' || $action === 'createtalk' ) {
			$action = 'create';
		}

		$title = Title::newFromText( $params['title'] );
		if ( !$title ) {
			$this->dieUsageMsg( array( 'invalidtitle', $params['title'] ) );
		}

		$blacklisted = TitleBlacklist::singleton()->userCannot( $title, $this->getUser(), $action, $override );
		if ( $blacklisted instanceof TitleBlacklistEntry ) {
			// this title is blacklisted.
			$result = array(
				htmlspecialchars( $blacklisted->getRaw() ),
				htmlspecialchars( $params['title'] ),
			);

			$res = $this->getResult();
			$res->addValue( 'titleblacklist', 'result', 'blacklisted' );
			// there aren't any messages for create(talk|page), using edit for those instead
			$message = $blacklisted->getErrorMessage( $action !== 'create' ? $action : 'edit' );
			$res->addValue( 'titleblacklist', 'reason', wfMessage( $message, $result )->text() );
			$res->addValue( 'titleblacklist', 'message', $message );
			$res->addValue( 'titleblacklist', 'line', htmlspecialchars( $blacklisted->getRaw() ) );
		} else {
			// not blacklisted
			$this->getResult()->addValue( 'titleblacklist', 'result', 'ok' );
		}
	}

	public function getAllowedParams() {
		return array(
			'title' => array(
				ApiBase::PARAM_REQUIRED => true,
			),
			'action' => array(
				ApiBase::PARAM_DFLT => 'edit',
				ApiBase::PARAM_ISMULTI => false,
				ApiBase::PARAM_TYPE => array(
					// createtalk and createpage are useless as they're treated exactly like create
					'create', 'edit', 'upload', 'createtalk', 'createpage', 'move', 'new-account'
				),
			),
			'nooverride' => array(
			)
		);
	}

	public function getParamDescription() {
		return array(
			'title' => 'The string to validate against the blacklist',
			'nooverride' => 'Don\'t try to override the titleblacklist',
			'action' => 'The thing you\'re trying to do',
		);
	}

	public function getDescription() {
		return 'Validate an article title, filename, or username against the TitleBlacklist.';
	}

	public function getExamples() {
		return array(
			'api.php?action=titleblacklist&tbtitle=Foo',
			'api.php?action=titleblacklist&tbtitle=Bar&tbaction=edit',
		);
	}

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}
}
