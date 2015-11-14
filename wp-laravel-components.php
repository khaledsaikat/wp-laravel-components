<?php
/*
Plugin Name: Laravel Components Example
Plugin URI: https://github.com/khaledsaikat/wp-laravel-components
Description: WordPress plugin example using laravel components
Author: Khaled Hossain
Version: 0.1
Author URI: http://khaledsaikat.com
*/

namespace WPLaravel;

require __DIR__ . '/vendor/autoload.php';

Base::load_controllers();
