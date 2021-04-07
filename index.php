<?php

/**
 * @package  3D Spicer
 */
/*
/*
*Plugin Name: 3D Spicer
*Plugin URI: http://15.206.204.148:8080/webgl_loader_gltf.html
*Author: TTS Tech Solution
*Author URI: http://15.206.204.148:8080/webgl_loader_gltf.html
*Description: This is the visual 3D modeling plugin.
*Version: 1.0.0
*License: GPL v2 or later
*License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

if(file_exists(dirname(__FILE__) . '/vendor/autoload.php')){
  require_once dirname(__FILE__) . '/vendor/autoload.php';
}

// For plugin activation
function activate_spicer_plugin(){
  Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_spicer_plugin' );

// For plugin deactivation
function deactivate_spicer_plugin(){
  Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_spicer_plugin' );


if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}