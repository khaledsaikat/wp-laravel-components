<?php
namespace WPComposerExample\Controllers;

use WPComposerExample\Base;

/**
 * Example of ShortcodeController class to add new shortcode.
 */
class ShortcodeController
{

    function __construct()
    {
        add_shortcode('wp-composer', [$this, 'wp_composer']);
    }

    function wp_composer()
    {
        return 'Shortcode is working.';
    }

}
