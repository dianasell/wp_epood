<?php
/*
Plugin Name: First plugin
Plugin URI: http://dianasell.ikt.khk.ee/wp-epood/
Description: This is my first WordPress Plugin
Author: Diana Sell
Author URI: http://dianasell.ikt.khk.ee/wp-epood/
Version: 1.0
*/
 
function my_plugin_test() {
	echo 'Plugin töötab!'; exit;
}
add_action('admin_head', 'my_plugin_test');