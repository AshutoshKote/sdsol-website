<?php
/**
 * WordPress Configuration for SD Sol
 *
 * HOW TO USE:
 * 1. Copy this file to the root of your WordPress installation (same folder as wp-login.php)
 * 2. Fill in the database credentials below (your hosting provider gives you these)
 * 3. Generate fresh secret keys at: https://api.wordpress.org/secret-key/1.1/salt/
 * 4. Set SDSOL_REVALIDATE_SECRET to match the REVALIDATE_SECRET in your Next.js .env
 */

// ── Database ───────────────────────────────────────────────────
// Get these from your hosting control panel (cPanel / Kinsta / WP Engine etc.)

define( 'DB_NAME',     'your_database_name' );   // e.g. sdsol_wp
define( 'DB_USER',     'your_database_user' );   // e.g. sdsol_admin
define( 'DB_PASSWORD', 'your_database_password' );
define( 'DB_HOST',     'localhost' );            // usually 'localhost'; check with host if unsure
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );

// ── SD Sol: Headless CMS settings ─────────────────────────────
// SDSOL_FRONTEND_URL  → the live Next.js site URL (used for CORS and revalidation)
// SDSOL_REVALIDATE_SECRET → must match REVALIDATE_SECRET in sdsol-next/.env.local

define( 'SDSOL_FRONTEND_URL',       'https://www.sdsol.ai' );
define( 'SDSOL_REVALIDATE_URL',     'https://www.sdsol.ai' );
define( 'SDSOL_REVALIDATE_SECRET',  'REPLACE_WITH_YOUR_SECRET' );

// ── Authentication Keys & Salts ────────────────────────────────
// Generate fresh values at: https://api.wordpress.org/secret-key/1.1/salt/
// (Replace the entire block below with the output from that URL)

define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ── Table prefix ───────────────────────────────────────────────
// Change this if you have multiple WP installs sharing the same database.
$table_prefix = 'wp_';

// ── Environment ────────────────────────────────────────────────
define( 'WP_DEBUG',     false );   // Set to true temporarily if you have errors
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );

// Disable the file editor in the WP admin (security best practice)
define( 'DISALLOW_FILE_EDIT', true );

// Force HTTPS for the admin
define( 'FORCE_SSL_ADMIN', true );

// ── Site URLs ──────────────────────────────────────────────────
// Only set these if your site URL is being stored incorrectly in the database.
// Comment them out once the site is working correctly.
// define( 'WP_HOME',    'https://cms.sdsol.ai' );
// define( 'WP_SITEURL', 'https://cms.sdsol.ai' );

/* That's all — stop editing here. */

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
