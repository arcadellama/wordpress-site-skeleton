<?php
ini_set( 'display_errors', 0);

require_once __DIR__ . '/../conf/wp-config.php';

// Custom Content Directory
define( 'WP_CONTENT_DIR', dirname( dirname(__FILE__) ) . '/content' );
define( 'WP_CONTENT_URL', 'https://' . $_SERVER['HTTP_HOST'] . '/content' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
