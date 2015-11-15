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
        add_shortcode('wp-laravel', [$this, 'wp_composer']);
    }

    function wp_composer()
    {
        $string = '';
        $string .= Helpers\maps('Dummy');
        $string .= Base::view('test');

        return $string;
    }

}
