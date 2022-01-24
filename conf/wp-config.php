<?php
ini_set( 'display_errors', 0 );

// Load database info and local dev parameters

if ( file_exists( dirname( __FILE__ ) . '/../production-config.php' ) ) {
    define( 'WP_LOCAL_DEV', false );
    include( dirname( __FILE__ ) . '/../production-config.php' );
    } else {
        define( 'WP_LOCAL_DEV', true );
        include( dirname( __FILE__ ) . '/../local-config.php' );
    }

// Global database settings
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Language
define( 'WPLANG', '' );

// Hide errors by default
define ( 'WP_DEBUG_DISPLAY', false );
define ( 'WP_DEBUG', false );

// Disable automatic updates
define( 'AUTOMATIC_UPDATER_DISABLED', false );

// Load Wordpress Settings
$table_prefix = 'al82_';
