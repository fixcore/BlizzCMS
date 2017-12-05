/**
 * SimpleTooltip Extension
 *
 * For more info see http://mediawiki.org/wiki/Extension:SimpleTooltip
 *
 * @author  Simon Heimler
 */
(function (mw, $) {

    'use strict';

    /** @type {Object} namespace */
    mw.libs.SimpleTooltip = {};


    /**
     * Default Tooltip Options
     *
     * @see http://iamceege.github.io/tooltipster/
     */
    mw.libs.SimpleTooltip.defaultOptions = {
       animation: 'fade',
       delay: 0,
       speed: 0,
       maxWidth: 400,
       theme: 'tooltipster-default',
       touchDevices: true,
       trigger: 'hover'
    };

    /**
     * Triggers the execution of the tooltip Plugin
     *
     * @param  {jQuery} jQuery Object (Context) or DOM Selection
     * @param  {{}} Object with Tooltip Option to replace the default options.
     */
    mw.libs.SimpleTooltip.trigger = function(context, customOptions) {

        var $context;
        var options = customOptions || mw.libs.SimpleTooltip.defaultOptions;

        // If a context is given, search only for tooltips within
        if (context) {
            $context = $(context).find('.simple-tooltip');
        } else {
            $context = $('.simple-tooltip');
        }

        // Iterate each tooltip element, extract the tooltip text from the data-simple-tooltip attribute
        // and set the tooltip text manually
        $context.each(function() {
          var text = $(this).attr('data-simple-tooltip');
          options.content = $('<span>' + text + '</span>');
          $(this).tooltipster(options);
        });

    };

    $(function() {

        // Trigger Tooltips on DOM Ready
        // Use no specific context and use no custom options
        mw.libs.SimpleTooltip.trigger(false, false);

        // Uses sf.initializeJSElements Hook that is triggered everytime a new form instance is added
        mw.hook('sf.addTemplateInstance').add(function($elements) {

            $elements.find('.simple-tooltip').each(function(i, el) {
                var $el = $(el);
                $el.removeClass('tooltipstered');

            });

            mw.libs.SimpleTooltip.trigger($elements, false);

        });

    });

}(mediaWiki, jQuery));