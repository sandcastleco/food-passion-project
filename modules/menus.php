<?php

function register_menus() {
	register_nav_menus(
		array(
		 'main-menu' => __( 'Main Menu' ),
		 'feature-menu' => __( 'Feature Menu' )
		)
	);
}
add_action( 'init', 'register_menus' );

?>
