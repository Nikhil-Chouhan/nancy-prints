<?php

if ( ! function_exists( 'etchy_core_add_list_image_sizes' ) ) {
	function etchy_core_add_list_image_sizes( $image_sizes ) {
		$image_sizes[] = array(
			'slug'           => 'etchy_image_size_square',
			'label'          => esc_html__( 'Square Size', 'etchy-core' ),
			'label_simple'   => esc_html__( 'Square', 'etchy-core' ),
			'default_crop'   => true,
			'default_width'  => 650,
			'default_height' => 650
		);
		
		$image_sizes[] = array(
			'slug'           => 'etchy_image_size_landscape',
			'label'          => esc_html__( 'Landscape Size', 'etchy-core' ),
			'label_simple'   => esc_html__( 'Landscape', 'etchy-core' ),
			'default_crop'   => true,
			'default_width'  => 1300,
			'default_height' => 650
		);
		
		$image_sizes[] = array(
			'slug'           => 'etchy_image_size_portrait',
			'label'          => esc_html__( 'Portrait Size', 'etchy-core' ),
			'label_simple'   => esc_html__( 'Portrait', 'etchy-core' ),
			'default_crop'   => true,
			'default_width'  => 650,
			'default_height' => 1300
		);
		
		$image_sizes[] = array(
			'slug'           => 'etchy_image_size_huge-square',
			'label'          => esc_html__( 'Huge Square Size', 'etchy-core' ),
			'label_simple'   => esc_html__( 'Huge Square', 'etchy-core' ),
			'default_crop'   => true,
			'default_width'  => 1300,
			'default_height' => 1300
		);
		
		return $image_sizes;
	}
	
	add_filter( 'qode_framework_filter_populate_image_sizes', 'etchy_core_add_list_image_sizes' );
}

if ( ! function_exists( 'etchy_core_add_pool_masonry_list_image_sizes' ) ) {
	function etchy_core_add_pool_masonry_list_image_sizes( $options, $type ) {
		if ( $type == 'masonry_image_dimension' ) {
			$options['etchy_image_size_square']      = esc_html__( 'Square', 'etchy-core' );
			$options['etchy_image_size_landscape']   = esc_html__( 'Landscape', 'etchy-core' );
			$options['etchy_image_size_portrait']    = esc_html__( 'Portrait', 'etchy-core' );
			$options['etchy_image_size_huge-square'] = esc_html__( 'Huge Square', 'etchy-core' );
		}
		
		return $options;
	}
	
	add_filter( 'etchy_core_filter_select_type_option', 'etchy_core_add_pool_masonry_list_image_sizes', 10, 2 );
}

if ( ! function_exists( 'etchy_core_get_custom_image_size_class_name' ) ) {
	function etchy_core_get_custom_image_size_class_name( $image_size ) {
		return ! empty( $image_size ) ? 'qodef-item--' . str_replace( 'etchy_image_size_', '', $image_size ) : '';
	}
}

if ( ! function_exists( 'etchy_core_get_custom_image_size_meta' ) ) {
	function etchy_core_get_custom_image_size_meta( $type, $name, $post_id ) {
		$image_size_meta  = qode_framework_get_option_value( '', $type, $name, '', $post_id );
		$image_size       = ! empty( $image_size_meta ) ? esc_attr( $image_size_meta ) : 'full';

		return array(
			'size'  => $image_size,
			'class' => etchy_core_get_custom_image_size_class_name( $image_size )
		);
	}
}