<?php

if ( post_password_required() ) {
	echo get_the_password_form();
} else {
	$excerpt = get_the_excerpt();
	
	if ( ! isset( $excerpt_length ) || ( isset( $excerpt_length ) && $excerpt_length === '' ) ) {
		$excerpt_length = 180; // 180 is number of characters
	}
	
	if ( ! empty( $excerpt ) ) {
		$new_excerpt = ( $excerpt_length > 0 ) ? substr( $excerpt, 0, intval( $excerpt_length ) ) : $excerpt;
		?>
		<p itemprop="description" class="qodef-e-excerpt"><?php echo qode_framework_wp_kses_html( 'content', $new_excerpt ); ?></p>
	<?php }
} ?>