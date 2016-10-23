<?php

// import stylesheet
function learningWordPress_resources () {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script('page-behave', get_template_directory_uri() . '/js/main.js', array(), 1.1, true );
}

// so the previous code actualy runs
add_action('wp_enqueue_scripts', 'learningWordPress_resources');


// navigation menus
register_nav_menus(array(
  'primary' => __('Hlavní menu'),
));

// Filter wp_nav_menu() to add additional links and other output
function new_nav_menu_items($items) {
	$homelink = '<li class="home"><a href="' . home_url( '/' ) . '">Home</a></li>';
	$items = $homelink . $items;
	return $items;
}
add_filter( 'wp_nav_menu_items', 'new_nav_menu_items' );

// WOOCOMMERCE

// unhook woocommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Then hook in your own functions to display the wrappers your theme requires
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

// This will hide the "your theme is not supported by woocommerce" message
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

?>
