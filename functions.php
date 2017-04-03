<?php

// Feature Image
add_theme_support('post-thumbnails');

// Nav Menus
register_nav_menus(array(
			'primary' => __('Primary Menu')
		));

function bs_theme_styles() {
wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.css');
wp_enqueue_style('animated_css', get_template_directory_uri().'/css/animate.min.css');
wp_enqueue_style('style_css', get_template_directory_uri().'/style.css');

}

add_action('wp_enqueue_scripts','bs_theme_styles');

function bs_theme_js() {
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'),'', true);
	wp_enqueue_script('contact_me_js', get_template_directory_uri().'/js/contact_me.js', array('jquery'),'', true);
	wp_enqueue_script('freelancer_js', get_template_directory_uri().'/js/freelancer.js', array('jquery'),'', true);
	wp_enqueue_script('jqvalidation_js', get_template_directory_uri().'/js/jqBootstrapValidation.js', array('jquery'),'', true);
	wp_enqueue_script('jquery_js', get_template_directory_uri().'/js/jquery.min.js', array('jquery'),'', true);
}

add_action('wp_enqueue_scripts','bs_theme_js');
?>