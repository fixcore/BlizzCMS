<?php
/**
 * SimpleTooltip Extension
 * Provides basic tooltips, supporting inline text and info icons
 *
 * For more info see https://mediawiki.org/wiki/Extension:SimpleTooltip
 *
 * @file
 * @ingroup Extensions
 * @package MediaWiki
 *
 * @links https://github.com/Fannon/SimpleTooltip/blob/master/README.md Documentation
 * @links https://www.mediawiki.org/wiki/Extension_talk:SimpleTooltip Support
 * @links https://github.com/Fannon/SimpleTooltip/issues Bug tracker
 * @links https://github.com/Fannon/SimpleTooltip Source code
 *
 * @author Simon Heimler (Fannon), 2015
 * @license http://opensource.org/licenses/mit-license.php The MIT License (MIT)
 */

//////////////////////////////////////////
// VARIABLES                            //
//////////////////////////////////////////

$dir         = dirname( __FILE__ );
$dirbasename = basename( $dir );


//////////////////////////////////////////
// CONFIGURATION                        //
//////////////////////////////////////////

$wgSimpleTooltipSubmitText = 'NEW';


//////////////////////////////////////////
// CREDITS                              //
//////////////////////////////////////////

$wgExtensionCredits['other'][] = array(
   'path'           => __FILE__,
   'name'           => 'SimpleTooltip',
   'author'         => array( 'Simon Heimler' ),
   'version'        => '0.1.0',
   'url'            => 'https://www.mediawiki.org/wiki/Extension:SimpleTooltip',
   'descriptionmsg' => 'simpletooltip-desc',
   'license-name'   => 'MIT'
);


//////////////////////////////////////////
// RESOURCE LOADER                      //
//////////////////////////////////////////

$wgResourceModules['ext.SimpleTooltip'] = array(
   'scripts' => array(
      'lib/jquery.tooltipster.js',
      'lib/SimpleTooltip.js',
   ),
   'styles' => array(
      'lib/tooltipster.css',
      'lib/SimpleTooltip.css',
   ),
   'dependencies' => array(
      // No dependencies
   ),
   'localBasePath' => __DIR__,
   'remoteExtPath' => 'SimpleTooltip',
);


//////////////////////////////////////////
// LOAD FILES                           //
//////////////////////////////////////////

// Register i18n
$wgMessagesDirs['SimpleTooltip'] = $dir . '/i18n';
$wgExtensionMessagesFiles['SimpleTooltip'] = $dir . '/SimpleTooltip.i18n.php';
$wgExtensionMessagesFiles['SimpleTooltipMagic'] = $dir . '/SimpleTooltip.i18n.magic.php';

// Register files
$wgAutoloadClasses['SimpleTooltipParserFunction'] = $dir . '/modules/SimpleTooltipParserFunction.php';

// Register hooks
$wgHooks['BeforePageDisplay'][] = 'SimpleTooltipOnBeforePageDisplay';
$wgHooks['ParserFirstCallInit'][] = 'SimpleTooltipOnParserFirstCallInit';



//////////////////////////////////////////
// HOOK CALLBACKS                       //
//////////////////////////////////////////

/**
* Add libraries to resource loader
*/
function SimpleTooltipOnBeforePageDisplay( OutputPage &$out, Skin &$skin ) {

  // Add as ResourceLoader Module
  $out->addModules('ext.SimpleTooltip');

  return true;
}

/**
* Register parser hooks
*
* See also http://www.mediawiki.org/wiki/Manual:Parser_functions
*/
function SimpleTooltipOnParserFirstCallInit( &$parser ) {

  // Register parser functions
  $parser->setFunctionHook('simple-tooltip', 'SimpleTooltipParserFunction::inlineTooltip');
  $parser->setFunctionHook('tip-text', 'SimpleTooltipParserFunction::inlineTooltip');

  $parser->setFunctionHook('simple-tooltip-info', 'SimpleTooltipParserFunction::infoTooltip');
  $parser->setFunctionHook('tip-info', 'SimpleTooltipParserFunction::infoTooltip');

  $parser->setFunctionHook('simple-tooltip-img', 'SimpleTooltipParserFunction::imgTooltip');
  $parser->setFunctionHook('tip-img', 'SimpleTooltipParserFunction::imgTooltip');

  return true;
}
