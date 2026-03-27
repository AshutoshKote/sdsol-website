<?php
/**
 * SD Sol Theme — functions.php
 */

function sdsol_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'sdsol' ),
    ] );
}
add_action( 'after_setup_theme', 'sdsol_setup' );

function sdsol_enqueue_scripts() {
    wp_enqueue_style(
        'sdsol-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Syne:wght@600;700;800&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'sdsol-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [ 'sdsol-fonts' ],
        '1.0.0'
    );
    wp_enqueue_script(
        'sdsol-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'sdsol_enqueue_scripts' );

/**
 * Helper: return a site URL cleanly
 */
function sdsol_url( $path = '/' ) {
    return esc_url( home_url( $path ) );
}
