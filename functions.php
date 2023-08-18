<?php
    // Theme support
    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo' );

    // ACF global options page
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page();
    }

    // Register scripts
    function add_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

    // Register blocks
    function register_acf_blocks() {
    }
    add_action( 'init', 'register_acf_blocks' );

    // Generate custom block categories
    function register_block_categories( $block_categories, $editor_context ) {
        if ( ! empty( $editor_context->$post ) ) {
            array_push(
                $block_categories,
                array(

                )
            );
        }
    }
?>