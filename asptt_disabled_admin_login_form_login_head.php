<?php
/**
 * @package ASPTT_Disable_Admin_Login_Form
 * @version 1.0
 */
/*
Plugin Name: ASPTT - Disable Admin Login Form
Plugin URI: https://github.com/ASPTT-Strasbourg/disable-admin-login-form
Description: Hide username and password fields from Admin Login form.
Author: Loïc Leuilliot
Version: 1.0
Author URI: https://github.com/organizations/ASPTT-Strasbourg
*/

add_action( 'login_head', 'asptt_disable_admin_login_form_login_head' );

function asptt_disable_admin_login_form_login_head() {
    $style = '<style type="text/css">';
    $style .= '#loginform > p { display: none; }';
    $style .= '.user-pass-wrap { display: none; }';
    $style .= '</style>';
    
    echo $style;
}
