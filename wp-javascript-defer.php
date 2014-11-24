<?php
/*
* Plugin Name: WP JavaScript Defer.
* Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
* Description: Optimize JavaScript loading by defering the load until the page has been rendered.
* Version: 0.1.0
* Author: Stephen Punwasi, Parkwest Creative Company
* Author URI: http://parkwestcreative.com
* License: GPL2
*/

defined('ABSPATH') or die("No script kiddies please!");

//DEFER JAVASCRIPT LOADING
function parkwest_defer_js_loading( $url ){
	if (FALSE === strpos( $url, '.js' )){
		return $url;
	}
	return $url . 'defer';
}
add_filter( 'clean_url', 'parkwest_defer_js_loading');

?>
