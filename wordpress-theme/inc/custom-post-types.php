<?php
/**
 * Custom Post Types for SD Sol
 * Non-coders: use the WordPress admin sidebar to manage these.
 */

/* ─── SERVICES ─────────────────────────────────────────────── */
function sdsol_register_cpt_service() {
    register_post_type( 'sdsol_service', [
        'labels' => [
            'name'               => 'Services',
            'singular_name'      => 'Service',
            'add_new_item'       => 'Add New Service',
            'edit_item'          => 'Edit Service',
            'view_item'          => 'View Service',
            'all_items'          => 'All Services',
            'not_found'          => 'No services found.',
        ],
        'public'             => true,
        'show_in_rest'       => true,
        'supports'           => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ],
        'menu_icon'          => 'dashicons-networking',
        'has_archive'        => false,
        'rewrite'            => [ 'slug' => 'services' ],
        'menu_position'      => 5,
    ] );
}
add_action( 'init', 'sdsol_register_cpt_service' );

/* ─── CASE STUDIES ─────────────────────────────────────────── */
function sdsol_register_cpt_case_study() {
    register_post_type( 'sdsol_case_study', [
        'labels' => [
            'name'               => 'Case Studies',
            'singular_name'      => 'Case Study',
            'add_new_item'       => 'Add New Case Study',
            'edit_item'          => 'Edit Case Study',
            'all_items'          => 'All Case Studies',
            'not_found'          => 'No case studies found.',
        ],
        'public'             => true,
        'show_in_rest'       => true,
        'supports'           => [ 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields' ],
        'menu_icon'          => 'dashicons-awards',
        'has_archive'        => false,
        'rewrite'            => [ 'slug' => 'case-studies' ],
        'menu_position'      => 6,
    ] );
}
add_action( 'init', 'sdsol_register_cpt_case_study' );

/* ─── TEAM MEMBERS ─────────────────────────────────────────── */
function sdsol_register_cpt_team_member() {
    register_post_type( 'sdsol_team_member', [
        'labels' => [
            'name'               => 'Team Members',
            'singular_name'      => 'Team Member',
            'add_new_item'       => 'Add New Team Member',
            'edit_item'          => 'Edit Team Member',
            'all_items'          => 'All Team Members',
            'not_found'          => 'No team members found.',
        ],
        'public'             => true,
        'show_in_rest'       => true,
        'supports'           => [ 'title', 'editor', 'thumbnail', 'custom-fields' ],
        'menu_icon'          => 'dashicons-groups',
        'has_archive'        => false,
        'rewrite'            => [ 'slug' => 'team' ],
        'menu_position'      => 7,
    ] );
}
add_action( 'init', 'sdsol_register_cpt_team_member' );

/* ─── CASE STUDY CATEGORY TAXONOMY ─────────────────────────── */
function sdsol_register_case_study_category() {
    register_taxonomy( 'case_study_category', 'sdsol_case_study', [
        'labels' => [
            'name'          => 'Categories',
            'singular_name' => 'Category',
            'all_items'     => 'All Categories',
            'add_new_item'  => 'Add New Category',
        ],
        'public'       => true,
        'show_in_rest' => true,
        'hierarchical' => true,
        'rewrite'      => [ 'slug' => 'case-study-category' ],
    ] );
}
add_action( 'init', 'sdsol_register_case_study_category' );

/* ─── META FIELDS (REST API exposed) ────────────────────────── */
function sdsol_register_meta_fields() {
    $string_field = [
        'type'         => 'string',
        'single'       => true,
        'show_in_rest' => true,
        'default'      => '',
    ];

    // ── Service meta ──────────────────────────────────────────
    // tagline: short phrase under the title (e.g. "Purpose-built AI for healthcare")
    register_post_meta( 'sdsol_service', 'tagline', $string_field );
    // icon: one of: server | shield | git | bar-chart | cpu | compass
    register_post_meta( 'sdsol_service', 'icon', $string_field );
    // features: one bullet point per line
    register_post_meta( 'sdsol_service', 'features', $string_field );
    // technologies: one technology per line (e.g. "Snowflake", "Databricks")
    register_post_meta( 'sdsol_service', 'technologies', $string_field );

    // ── Case Study meta ───────────────────────────────────────
    // metric: the headline result (e.g. "85%+ prediction accuracy")
    register_post_meta( 'sdsol_case_study', 'metric', $string_field );
    // category_label: displayed label (e.g. "AI & ML", "Data Engineering")
    register_post_meta( 'sdsol_case_study', 'category_label', $string_field );

    // ── Team Member meta ──────────────────────────────────────
    // job_title: role / title (e.g. "Founder & Managing Partner")
    register_post_meta( 'sdsol_team_member', 'job_title', $string_field );
    // order: numeric sort order (lower = shown first)
    register_post_meta( 'sdsol_team_member', 'sort_order', array_merge( $string_field, [
        'type'    => 'integer',
        'default' => 99,
    ] ) );
}
add_action( 'init', 'sdsol_register_meta_fields' );
