<?php

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/lgkonline/twentytwentyone-lgk',
	__FILE__,
	'twentytwentyone-lgk'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');

//Optional: If you're using a private repository, specify the access token like this:
$myUpdateChecker->setAuthentication('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');

/* CSS und Skripte vom Parent-Theme übernehmen */
   
function twentytwentyone_styles() {
	wp_enqueue_style( 'child-style', get_stylesheet_uri(),
	array( 'twenty-twenty-one-style' ), wp_get_theme()->get('Version') );
}

add_action( 'wp_enqueue_scripts', 'twentytwentyone_styles');