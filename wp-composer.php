<?php
/*
Plugin Name: Composer Example
Plugin URI: https://github.com/khaledsaikat/wp-composer
Description: WordPress plugin example using composer. Optionally load models and controllers
Author: Khaled Hossain
Version: 0.1
Author URI: http://khaledsaikat.com
*/

namespace WPComposerExample;

require __DIR__ . '/vendor/autoload.php';

Base::load_controllers();
