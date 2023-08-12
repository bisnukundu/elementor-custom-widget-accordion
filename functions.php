<?php
function bisnu_enque() {
	wp_enqueue_script( 'tailwinds', 'https://cdn.tailwindcss.com', );
}

add_action( 'wp_enqueue_scripts', 'bisnu_enque' );

include_once( 'elementor-addon/addon.php' );
