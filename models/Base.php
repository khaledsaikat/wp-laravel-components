<?php namespace WPComposerExample;

/**
 * Base class
 */
class Base
{

    /**
     * Get base directory of plugin
     */
    public static function base_dir()
    {
        return rtrim(__DIR__, '/models');
    }

    /**
     * make instance of each controller class
     */
    public static function load_controllers()
    {
        foreach (scandir(self::base_dir() . '/controllers') as $file) {
            if (strpos($file, 'Controller.php') !== false) {
                $class = __NAMESPACE__ . '\Controllers\\' . rtrim($file, '.php');
                new $class();
            }
        }
    }

}
