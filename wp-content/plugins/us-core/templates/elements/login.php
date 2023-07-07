<?php defined( 'ABSPATH' ) OR die( 'This script cannot be accessed directly.' );

/**
 * Login element
 */

$_atts['class'] = 'w-login';
$_atts['class'] .= isset( $classes ) ? $classes : '';

if ( ! empty( $el_id ) ) {
	$_atts['id'] = $el_id;
}

// Add links HTML, if set
$after_btn_html = '';
if ( ! empty( $register ) OR ! empty( $lost_password ) ) {
	if ( $register != '' ) {
		$after_btn_html .= '<a class="w-form-row-link for_register" href="' . esc_url( $register ) . '">';
		$after_btn_html .= us_translate( 'Register' );
		$after_btn_html .= '</a>';
	}
	if ( $lost_password != '' ) {
		$after_btn_html .= '<a class="w-form-row-link for_lostpass" href="' . esc_url( $lost_password ) . '">';
		$after_btn_html .= us_translate( 'Lost your password?' );
		$after_btn_html .= '</a>';
	}
}

// Get buttons styles keys to use the first one as default
$btn_style = us_maybe_get_button_style();

// Form variables
$form_template_vars = array(
	'type' => 'login',
	'action' => site_url( 'wp-login.php' ),
	'method' => 'post',
	'fields' => array(
		'log' => array(
			'type' => 'text',
			'placeholder' => us_translate( 'Username or Email Address' ),
			'required' => TRUE,
			'name' => 'username',
		),
		'pwd' => array(
			'type' => 'password',
			'placeholder' => us_translate( 'Password' ),
			'required' => TRUE,
			'name' => 'password',
		),
		'submit' => array(
			'type' => 'submit',
			'title' => us_translate( 'Log In' ),
			'btn_classes' => 'us-btn-style_' . $btn_style,
			'after_btn_html' => $after_btn_html,
		),
		'rememberme' => array(
			'type' => 'hidden',
			'value' => 'forever',
		),
		'nonce' => array(
			'type' => 'nonce',
			'action' => 'us_ajax_login_nonce',
			'name' => 'us_login_nonce',
		),
		'action' => array(
			'type' => 'hidden',
			'label' => 'action',
			'value' => 'us_ajax_login',
		),
	),
);

// Add Log In redirect link data, if set
if ( ! empty( $login_redirect ) ) {
	$form_template_vars['fields']['redirect_to'] = array(
		'type' => 'hidden',
		'value' => $login_redirect,
		'label' => 'redirect_to',
	);
	$form_template_vars['json_data']['login_redirect'] = $login_redirect;
}

// Add Log Out redirect link data, if set
if ( ! empty( $logout_redirect ) ) {
	$form_template_vars['json_data']['logout_redirect'] = $logout_redirect;
}

// Don't use AJAX on AMP
$use_ajax = us_amp() ? FALSE : (bool) $use_ajax;

// Add AJAX reloading attribute
$form_template_vars['json_data']['use_ajax'] = $use_ajax;

// Output the element
$output = '<div' . us_implode_atts( $_atts ) . '>';

if ( ! $use_ajax ) {
	if ( is_user_logged_in() ) {
		$output .= us_user_profile_html( $logout_redirect );
	} else {
		$output .= us_get_template( 'templates/form/form', $form_template_vars );
	}
} else {
	$output .= '<div class="g-preloader type_1"></div>';
	$output .= us_user_profile_html( $logout_redirect, $use_ajax );

	// Set form to be initially hidden
	$form_template_vars['classes'] = 'hidden';
	$output .= us_get_template( 'templates/form/form', $form_template_vars );
}

$output .= '</div>';

echo $output;
