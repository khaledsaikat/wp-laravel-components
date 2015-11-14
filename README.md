# WP Composer
WordPress plugin example using composer


Classes inside models and controllers directory will autoload by composer.
To make instance of controller class we can run Base::load_controllers();


Run follwing command to install composer component if you .gitignore vendor directory
```
composer install
```

To test the plugin, you can write shortcode [wp-composer] to any page or post.
