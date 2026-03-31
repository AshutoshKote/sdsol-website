<?php
/**
 * On-save webhook: tells Next.js to refresh its cached pages
 * whenever a post/page is published or updated.
 *
 * Set SDSOL_REVALIDATE_URL and SDSOL_REVALIDATE_SECRET in wp-config.php:
 *   define( 'SDSOL_REVALIDATE_URL',    'https://www.sdsol.ai' );
 *   define( 'SDSOL_REVALIDATE_SECRET', 'your-secret-token' );
 */

function sdsol_trigger_revalidation( $post_id, $post ) {
    if ( wp_is_post_revision( $post_id ) ) return;
    if ( $post->post_status !== 'publish' )  return;

    if ( ! defined( 'SDSOL_REVALIDATE_URL' ) || ! defined( 'SDSOL_REVALIDATE_SECRET' ) ) {
        return;
    }

    $type = $post->post_type;
    $slug = $post->post_name;

    // Map CPT → Next.js paths to revalidate
    $paths = [];
    switch ( $type ) {
        case 'sdsol_service':
            $paths = [ '/services', "/services/{$slug}" ];
            break;
        case 'sdsol_case_study':
            $paths = [ '/success-stories', "/success-stories/{$slug}" ];
            break;
        case 'sdsol_team_member':
            $paths = [ '/about/the-team' ];
            break;
        case 'post':
            $paths = [ '/insights/blogs', "/insights/blogs/{$slug}" ];
            break;
        case 'page':
            $paths = [ "/{$slug}", '/' ];
            break;
    }

    if ( empty( $paths ) ) return;

    $base_url = rtrim( SDSOL_REVALIDATE_URL, '/' );
    $secret   = SDSOL_REVALIDATE_SECRET;

    foreach ( $paths as $path ) {
        $url = $base_url . '/api/revalidate?path=' . urlencode( $path ) . '&secret=' . urlencode( $secret );
        wp_remote_get( $url, [
            'timeout'   => 5,
            'blocking'  => false,
            'sslverify' => true,
        ] );
    }
}
add_action( 'save_post', 'sdsol_trigger_revalidation', 10, 2 );
