<?php
/**
 * Plugin Name: WPTamer
 * Plugin URI: http://www.ootwsolutions.com/WPTamer
 * Description: This plugin unfolds the mysteries of your MIND
 * Version: 1.0
 * Author: HangryDevOps
 * Author URI: http://www.ootwsoltutions.com
 */
 
 add_action( 'the_content', 'rage' );

function rage ( $content ) {
    return $content .= '<p>You have angered Cthulu</p>'; //Displays intense rage
}


?>
