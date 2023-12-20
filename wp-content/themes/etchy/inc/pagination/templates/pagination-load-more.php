<?php if ( isset( $query_result ) && intval( $query_result->max_num_pages ) > 1 ) { ?>
	<div class="qodef-m-pagination qodef--load-more" <?php echo etchy_is_installed( 'framework' ) ? qode_framework_get_inline_style( $pagination_type_load_more_top_margin ) : ''; ?>>
		<div class="qodef-m-pagination-inner">
			<?php
			$button_params = array(
				'custom_class'  => 'qodef-load-more-button',
				'button_layout' => 'filled',
				'link'          => '#',
				'text'          => esc_html__( 'Load More', 'etchy' ),
			);
			
			etchy_render_button_element( $button_params ); ?>
		</div>
	</div>
	<?php
	// Include loading spinner
	/*etchy_render_icon( 'qodef-loading-spinner fa fa-spinner fa-spin', 'font-awesome', '' ); */?>
	<div class="qodef-loading-spinner">
		<svg xmlns="http://www.w3.org/2000/svg" width="49.037" height="49.669">
			<path fill="#4DB7E7" d="M11.768 0h-8.5a2.517 2.517 0 00-2.51 2.51V45c0 1.38 1.129 2.51 2.51 2.51h8.5c1.381 0 2.51-1.13 2.51-2.51V2.51A2.519 2.519 0 0011.768 0zm-4.25 44.141a2 2 0 110-4 2 2 0 010 4z"/>
			<path fill="#E34F33" d="M25.736 3.877l-8.003-2.864a2.516 2.516 0 00-3.209 1.517L.205 42.534a2.517 2.517 0 001.518 3.209l8.003 2.865a2.517 2.517 0 003.209-1.517L27.254 7.086a2.518 2.518 0 00-1.518-3.209zM6.859 44.001a1.998 1.998 0 01-1.207-2.556 2 2 0 111.207 2.556z"/>
			<path fill="#FFEC4F" d="M40.338 15.343l-6.012-6.011a2.515 2.515 0 00-3.549 0L.732 39.376a2.516 2.516 0 000 3.55l6.011 6.011a2.518 2.518 0 003.55 0l30.045-30.044a2.52 2.52 0 000-3.55zM6.121 43.549a2 2 0 112.828-2.828 2 2 0 01-2.828 2.828z"/>
			<path fill="#000" d="M48.914 33.096l-2.639-8.08a2.518 2.518 0 00-3.166-1.607L2.719 36.598a2.517 2.517 0 00-1.607 3.165l2.639 8.081a2.518 2.518 0 003.166 1.607l40.391-13.189a2.52 2.52 0 001.606-3.166zM5.636 42.757a1.999 1.999 0 113.802-1.242 1.999 1.999 0 01-3.802 1.242z"/>
		</svg>
	</div>
<?php } ?>