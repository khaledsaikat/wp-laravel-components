<?php namespace WPLaravel;

 use Philo\Blade\Blade;

 /**
  * Base class
  */
 class Base
 {

     /**
      * Get base directory of plugin
      *
      * @return string: base_dir with '/' at end
      */
     public static function base_dir()
     {
         return rtrim(__DIR__, 'models');
     }

     /**
      * Get base namespace of plugin.
      *
      * @return string: Current namespace
      */
     public static function base_namespace()
     {
         return __NAMESPACE__;
     }

     /**
      * make instance of each controller class
      */
     public static function load_controllers()
     {
         foreach (scandir(self::base_dir() . 'controllers') as $file) {
             if (strpos($file, 'Controller.php') !== false) {
                 $class = self::base_namespace() . '\Controllers\\' . rtrim($file, '.php');
                 new $class();
             }
         }
     }

     /**
      * Get the evaluated view contents for the given view.
      *
      * @param  string  $view
      * @param  array   $data
      * @param  array   $mergeData
      * @return \Illuminate\View\View
      */
     public static function view($view = null, $data = [], $mergeData = [])
     {
         $views = self::base_dir() . 'resources/views';
         $cache = self::base_dir() . 'resources/cache';

         $blade = new Blade($views, $cache);

         return $blade->view()->make($view, $data, $mergeData);
     }

 }
