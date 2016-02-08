<?php

/*
	Plugin Name: D4 Coming soon
	Plugin URI: https://github.com/d4advancedmedia/Analytics
	GitHub Theme URI: https://github.com/d4advancedmedia/Analytics
	GitHub Branch: master
	Description: Simple WordPress plugin to paste in Analytics code and hook it into the footer
	Version: 08Feb16
	Author: D4 Adv. Media
	License: GPL2
*/

function is_login_page() {
    return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
}

function d4comingsoon() {
	if ( ! is_user_logged_in() && ! is_admin() && ! is_login_page() && ! isset( $_GET['d4'] )  ) {

		header('Location: http://www.d4webdev.com/');
		exit;
	}
}
add_action( 'init', 'd4comingsoon' );


function d4comingsoon_script() {

	 if ( isset( $_GET['d4'] ) ) {

		wp_enqueue_script( 'd4comingsoon', plugins_url( '/js/script.js' , __FILE__ ), array('jquery'), '1', true );
		
	 }

} add_action('wp_enqueue_scripts', 'd4comingsoon_script');

?>
