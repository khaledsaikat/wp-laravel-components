<?php namespace WPLaravel\Helpers;

use WPLaravel\Base;

/**
 * Making alias
 *
 * @param string $key
 * @return string
 */
function maps($key)
{
    $maps = array(
        'Dummy' => Base::base_namespace() . '\Dummy'
    );

    return $maps[$key];
}
