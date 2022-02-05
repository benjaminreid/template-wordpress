<?php
    require_once( __DIR__ . '/../../../vendor/autoload.php' );

    if (!class_exists('Timber\Timber')) {
        add_filter('template_include', function($template) {
    		return locate_template(array('no-timber.php'));
    	});

        return;
    }

    Timber\Timber::$dirname = ['components', 'views'];

    $timber = new Timber\Timber();

    function register_my_menus() {
        register_nav_menus([
            'main-navigation' => __('Main Navigation'),
        ]);
    }

    add_action('init', 'register_my_menus');

    function add_to_context($context) {
        $context['navigation'] = new \Timber\Menu('main-navigation');
        return $context;
    }

    add_filter('timber/context', 'add_to_context');

    add_theme_support('post-thumbnails');
