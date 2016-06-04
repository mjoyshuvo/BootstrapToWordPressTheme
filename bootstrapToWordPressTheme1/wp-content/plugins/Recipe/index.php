<?php
/**
 *Plugin Name: Recipe
 * Description: This is a simple plugin for learning plugin development.
 * Author: Shuvo
 * Version: 1.0
 * Author URI: http://mjoyshuvo.github.io
 * Text Domain: recipe
 *
 */

if(! function_exists('add_action')){
    echo "Not allowed";
    exit();
}

// Setup

// Includes
include ('includes/activate.php');
// Hooks
register_activation_hook(__FILE__,'r_activate_plugin' );
// Shortcodes