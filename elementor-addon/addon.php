<?php

function is_elementor_active() {
	return in_array( 'elementor/elementor.php', get_option( 'active_plugins' ) );
}

function bisnu_widget_init( $widgets ) {
	if ( is_elementor_active() ) {

		function bisnu_register_widget( $widgets ) {
			require_once( __DIR__ . '/widgets/accordion.php' );
			$widgets->register( new \Bisnu_accordion() );
		}

		add_action( 'elementor/widgets/register', 'bisnu_register_widget' );

	} else {
		echo '<div class="notice notice-danger is-dismissible">
    <p>You have to active Elementor before use this theme.</p>
  </div>';
	}
}

add_action( 'admin_init', 'bisnu_widget_init' );



