<?php 
global $wp_query;
$big = 999999999;

echo paginate_links( [
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'fomtat' => '?paged=%#%',
	'current' => max( 1, get_query_var( 'paged' ) ),
	'total' => $wp_query->max_num_pages,
] );
