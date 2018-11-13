<?php

/**
 * Add parent and child stylesheets
 */

add_action( 'wp_enqueue_scripts', 'syriah_child_enqueue_styles' );
if(!function_exists('syriah_child_enqueue_styles')) {
function syriah_child_enqueue_styles() {
    wp_enqueue_style( 'syriah-logo-font', 'https://fonts.googleapis.com/css?family=Hammersmith+One' );
    wp_enqueue_style( 'syriah-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style( 'syriah-child-style', get_stylesheet_uri() . '/style.css');
}}

/**
 * Upon activation flush the rewrite rules to avoid 404 on custom post types
 */
add_action( 'after_switch_theme', 'syriah_child_rewrite_flush_child' );
if(!function_exists('syriah_child_rewrite_flush_child')) {
function syriah_child_rewrite_flush_child() {
    flush_rewrite_rules();
}}


/**
 * Setup Syriah Child Theme's textdomain.
 *
 * Declare textdomain for this child theme.
 * Translations can be filed in the /languages/ directory.
 */
function syriah_child_theme_setup() {
	load_child_theme_textdomain( 'syriah-child',  get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'syriah_child_theme_setup' );

// CUSTOM
