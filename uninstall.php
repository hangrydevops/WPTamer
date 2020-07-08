<?php

/**
 * Trigger this file on Plugin uninstall
 * 
 * @package WPTamer
 */

 if ( ! defined('WP_UNINSTALL_PLUGIN' ) ) {
     die;
 }

 // Clear Database stored data


// Access the database via SQL
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'RAGER'" );