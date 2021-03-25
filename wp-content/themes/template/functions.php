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
