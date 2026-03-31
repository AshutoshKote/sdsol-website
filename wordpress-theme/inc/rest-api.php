<?php
/**
 * REST API customizations
 * Adds structured fields to WP REST responses so Next.js can consume them cleanly.
 */

/* ─── Add featured image URL to REST responses ──────────────── */
function sdsol_rest_add_featured_image( $data, $post, $request ) {
    if ( has_post_thumbnail( $post->ID ) ) {
        $data->data['featured_image_url'] = get_the_post_thumbnail_url( $post->ID, 'large' );
    } else {
        $data->data['featured_image_url'] = null;
    }
    return $data;
}
add_filter( 'rest_prepare_sdsol_service',     'sdsol_rest_add_featured_image', 10, 3 );
add_filter( 'rest_prepare_sdsol_case_study',  'sdsol_rest_add_featured_image', 10, 3 );
add_filter( 'rest_prepare_sdsol_team_member', 'sdsol_rest_add_featured_image', 10, 3 );
add_filter( 'rest_prepare_post',              'sdsol_rest_add_featured_image', 10, 3 );

/* ─── Include rendered meta in REST for case studies ────────── */
function sdsol_rest_prepare_case_study( $data, $post, $request ) {
    // Attach taxonomy terms as a flat label string for convenience
    $terms = get_the_terms( $post->ID, 'case_study_category' );
    if ( $terms && ! is_wp_error( $terms ) ) {
        $data->data['category_terms'] = wp_list_pluck( $terms, 'name' );
    } else {
        $data->data['category_terms'] = [];
    }
    return $data;
}
add_filter( 'rest_prepare_sdsol_case_study', 'sdsol_rest_prepare_case_study', 10, 3 );

/* ─── CORS headers for headless access ──────────────────────── */
function sdsol_rest_cors_headers() {
    $allowed_origin = defined( 'SDSOL_FRONTEND_URL' )
        ? SDSOL_FRONTEND_URL
        : 'https://www.sdsol.ai';

    header( 'Access-Control-Allow-Origin: ' . esc_url_raw( $allowed_origin ) );
    header( 'Access-Control-Allow-Methods: GET, OPTIONS' );
    header( 'Access-Control-Allow-Credentials: false' );
}
add_action( 'rest_api_init', 'sdsol_rest_cors_headers' );
