<?php

/**
 * SimpleTooltip Parser Functions
 *
 * @file
 * @ingroup Extensions
 */
class SimpleTooltipParserFunction {

    /**
     * Parser function handler for {{#tip-text: inline-text | tooltip-text }}
     *
     * @param Parser $parser
     * @param string $arg
     *
     * @return string: HTML to insert in the page.
     */
    public static function inlineTooltip( $parser, $value /* arg2, arg3, */ ) {

        $args = array_slice( func_get_args(), 2 );
        $title = $args[0];

        //////////////////////////////////////////
        // BUILD HTML                           //
        //////////////////////////////////////////

        $html  = '<span class="simple-tooltip simple-tooltip-inline"';
        $html .= ' data-simple-tooltip="' . htmlspecialchars($title) . '"';
        $html .= '>' . htmlspecialchars($value) . '</span>';

        return array(
            $html,
            'noparse' => true,
            'isHTML' => true,
            "markerType" => 'nowiki'
        );
    }

    /**
     * Parser function handler for {{#tip-info: tooltip-text }}
     *
     * @param Parser $parser
     * @param string $arg
     *
     * @return string: HTML to insert in the page.
     */
    public static function infoTooltip( $parser, $value /* arg2, arg3, */ ) {

        //////////////////////////////////////////
        // BUILD HTML                           //
        //////////////////////////////////////////

        $html = '<span class="simple-tooltip simple-tooltip-info"';
        $html .= ' data-simple-tooltip="' . htmlspecialchars($value) . '"></span>';

        return array(
            $html,
            'noparse' => true,
            'isHTML' => true,
            "markerType" => 'nowiki'
        );
    }

    /**
     * Parser function handler for {{#tip-img: image-url | tooltip-text }}
     *
     * @param Parser $parser
     * @param string $arg
     *
     * @return string: HTML to insert in the page.
     */
    public static function imgTooltip( $parser, $value /* arg2, arg3, */ ) {

        $args = array_slice( func_get_args(), 2 );
        $title = $args[0];
        $imgUrl = htmlspecialchars($value);

        //////////////////////////////////////////
        // BUILD HTML                           //
        //////////////////////////////////////////

        $html  = '<img class="simple-tooltip simple-tooltip-img"';
        $html .= ' data-simple-tooltip="' . htmlspecialchars($title) . '"';
        $html .= ' src="' . $imgUrl . '"></img>';

        return array(
            $html,
            'noparse' => true,
            'isHTML' => true,
            "markerType" => 'nowiki'
        );
    }

}
