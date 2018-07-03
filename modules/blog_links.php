<?php

function posts_link_attributes() {
  return 'class="link bg-compote white pv2 ph3"';
}
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function new_excerpt_more( $more ) {
	return '... <a class="link compote" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>
