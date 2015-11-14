<?php namespace WPLaravel\Controllers;

use WPLaravel\Base;
use WPLaravel\Helpers;

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
        return Helpers\maps('Dummy');
    }

}
