<?php
/**
 * @package WPTamer
 */
/**
 * Plugin Name: WPTamer
 * Plugin URI: https://github.com/hangrydevops/WPTamer
 * Description: This plugin unfolds the mysteries of your MIND
 * Version: 1.0.0
 * Author: HangryDevOps
 * Author URI: http://www.ootwsoltutions.com
 * License: GPLv2 or later
 * Text Domain: WPTamer
 */
 /*
  *WPTamer, a plugin for fun and giggles
  *Copyright (C) 2020  HangryDevOps

  *This program is free software; you can redistribute it and/or
  *modify it under the terms of the GNU General Public License
  *as published by the Free Software Foundation; either version 2
  *of the License, or (at your option) any later version.

  *This program is distributed in the hope that it will be useful,
  *but WITHOUT ANY WARRANTY; without even the implied warranty of
  *MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  *GNU General Public License for more details.

  *You should have received a copy of the GNU General Public License
  *along with this program; if not, write to the Free Software
  *Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

defined('ABSPATH') or die('Hey, you cant access this file, goober.'); //If WordPress does not run, the plugin will die. 
  
class WPTamer 
{
  function __construct() {
    add_action( 'init', array( $this, 'custom_post_type') );
  }

  function activate(){        //activate
    // generated a CPT
    $this->custom_post_type();
    // flush rewrite rules
    flush_rewrite_rules();
  }

  function deactivate(){      //deactivate
    // flush rewrite rules
    flush_rewrite_rules();
  }

  function uninstall(){       //uninstall
    // delete CPT
    // delete all of the plugin data from the DB
  }

  function custom_post_type( ){
    register_post_type('book', ['public' => true, 'label' => 'RAGER'] );
  }

}

if ( class_exists( 'WPTamer')){
    $WPTamer = new WPTamer();
}

// activation
register_activation_hook( __FILE__, array( $WPTamer, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $WPTamer, 'deactivate') );

// uninstall





 add_action( 'the_content', 'rage' );

function rage ( $content ) {
    return $content .= '<p>You have angered Cthulu</p>'; //Displays intense rage
}





?>