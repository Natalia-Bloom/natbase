<?php

// •❅────────────✧❅✦❅✧────────────❅•
// Shortcodes
// •················•················•

function register_new_shortcode() {
	return 'hello';	
}

add_shortcode( 'new_shortcode', 'register_new_shortcode' );
