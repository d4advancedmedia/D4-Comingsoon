<?php

/*
	Plugin Name: D4 Dev
	Plugin URI: https://github.com/d4advancedmedia/D4-Dev
	GitHub Theme URI: https://github.com/d4advancedmedia/D4-Dev
	GitHub Branch: master
	Description: Plugin designed for quick, secured deployment of D4 dev sites.
	Version: 01Mar16
	Author: D4 Adv. Media
	License: GPL2
*/



include ('lib/session_support.php');


function d4comingsoon() {
	if ( ! is_user_logged_in() && ! is_admin() && ! in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')) ) {			
		// Over reaction to not being logged in.
			 wp_redirect(site_url('wp-admin'));
			exit;
	}

/*
	$password = 'D4321!';

	if ( isset($_POST['passphrase']) ) {	
		if ($password == $_POST['passphrase']) {
			simpleSessionSet('user', '1');
		} else {
			echo '<div class="page-wrapper">Wrong password!</div>';
		}
	}

	$session_set = simpleSessionGet('user', null);
	if ( ! isset($session_set) ) {
		if ( ! is_user_logged_in() && ! is_admin() && ! in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php')) ) {			
		// Over reaction to not being logged in.
			include('lib/page_login.php');
			exit;
		}
	}
 //*/
}
add_action( 'init', 'd4comingsoon' );

/*
function d4comingsoon_script() {

	if ( isset( $_GET['d4'] ) ) {

		wp_enqueue_script( 'd4comingsoon', plugins_url( '/js/script.js' , __FILE__ ), array('jquery'), '1', true );
		
	}

} add_action('wp_enqueue_scripts', 'd4comingsoon_script'); //*/

?>
