<div class="qodef-page-title qodef-m <?php echo esc_attr( etchy_get_page_title_classes() ); ?>">
	<?php
	// Hook to include additional content before page title inner
	do_action( 'etchy_action_before_page_title_inner' );
	?>
	<div class="qodef-m-inner">
		<?php
		// Include module content template
		echo apply_filters( 'etchy_filter_title_content_template', etchy_get_template_part( 'title', 'templates/title-content' ) ); ?>
	</div>
	<?php
	// Hook to include additional content after page title inner
	do_action( 'etchy_action_after_page_title_inner' );
	?>
</div>