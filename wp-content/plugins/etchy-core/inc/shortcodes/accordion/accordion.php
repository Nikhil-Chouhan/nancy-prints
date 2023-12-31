<?php

if ( ! function_exists( 'etchy_core_add_accordion_shortcode' ) ) {
	/**
	 * Function that add shortcode into shortcodes list for registration
	 *
	 * @param array $shortcodes
	 *
	 * @return array
	 */
	function etchy_core_add_accordion_shortcode( $shortcodes ) {
		$shortcodes[] = 'EtchyCoreAccordionShortcode';
		
		return $shortcodes;
	}
	
	add_filter( 'etchy_core_filter_register_shortcodes', 'etchy_core_add_accordion_shortcode' );
}

if ( class_exists( 'EtchyCoreShortcode' ) ) {
	class EtchyCoreAccordionShortcode extends EtchyCoreShortcode {
		
		public function __construct() {
			$this->set_layouts( apply_filters( 'etchy_core_filter_accordion_layouts', array() ) );
			
			parent::__construct();
		}
		
		public function map_shortcode() {
			$this->set_shortcode_path( ETCHY_CORE_SHORTCODES_URL_PATH . '/accordion' );
			$this->set_base( 'etchy_core_accordion' );
			$this->set_name( esc_html__( 'Accordion', 'etchy-core' ) );
			$this->set_description( esc_html__( 'Shortcode that adds accordion holder', 'etchy-core' ) );
			$this->set_category( esc_html__( 'Etchy Core', 'etchy-core' ) );
			$this->set_is_parent_shortcode( true );
			$this->set_child_elements( array(
				'etchy_core_accordion_child'
			) );

			$this->set_scripts(
				array(
					'jquery-ui-accordion' => array(
						'registered'	=> true
					)
				)
			);

			$options_map = etchy_core_get_variations_options_map( $this->get_layouts() );
			
			$this->set_option( array(
				'field_type'    => 'select',
				'name'          => 'layout',
				'title'         => esc_html__( 'Layout', 'etchy-core' ),
				'options'       => $this->get_layouts(),
				'default_value' => $options_map['default_value'],
				'visibility'    => array( 'map_for_page_builder' => $options_map['visibility'] )
			) );
			$this->set_option( array(
				'field_type' => 'text',
				'name'       => 'custom_class',
				'title'      => esc_html__( 'Custom Class', 'etchy-core' ),
			) );
			$this->set_option( array(
				'field_type'    => 'select',
				'name'          => 'behavior',
				'title'         => esc_html__( 'Behavior', 'etchy-core' ),
				'options'       => array(
					'accordion' => esc_html__( 'Accordion', 'etchy-core' ),
					'toggle'    => esc_html__( 'Toggle', 'etchy-core' )
				),
				'default_value' => 'accordion'
			) );
		}
		
		public static function call_shortcode( $params ) {
			$content = null;
			
			if ( isset( $params['accordion_titles'] ) && ! empty( $params['accordion_titles'] ) && isset( $params['accordion_contents'] ) && ! empty( $params['accordion_contents'] ) ) {
				$title_tag = isset( $params['accordion_title_tag'] ) && ! empty( $params['accordion_title_tag'] ) ? esc_attr( $params['accordion_title_tag'] ) : '';
				
				foreach ( $params['accordion_titles'] as $index => $title ) {
					$content .= '[etchy_core_accordion_child title_tag="' . esc_attr( $title_tag ) . '" title="' . esc_attr( $title ) . '"]' . $params['accordion_contents'][ $index ] . '[/etchy_core_accordion_child]';
				}
			}
			
			$html = qode_framework_call_shortcode( 'etchy_core_accordion', $params, $content );
			
			return $html;
		}
		
		public function load_assets() {
			wp_enqueue_script( 'jquery-ui-accordion' );
		}
		
		public function render( $options, $content = null ) {
			parent::render( $options );
			$atts = $this->get_atts();
			$atts['holder_classes'] = $this->get_holder_classes( $atts );

			$atts['content'] = preg_replace('/\[etchy_core_accordion_child/i', '[etchy_core_accordion_child layout="'.$atts['layout'].'"', $content);

			return etchy_core_get_template_part( 'shortcodes/accordion', 'variations/'.$atts['layout'].'/templates/holder', '', $atts );
		}
		
		private function get_holder_classes( $atts ) {
			$holder_classes = $this->init_holder_classes();
			
			$holder_classes[] = 'qodef-accordion';
			$holder_classes[] = 'clear';
			$holder_classes[] = ! empty( $atts['behavior'] ) ? 'qodef-behavior--' . $atts['behavior'] : '';
			$holder_classes[] = ! empty( $atts['layout'] ) ? 'qodef-layout--' . $atts['layout'] : '';

			return implode( ' ', $holder_classes );
		}
	}
}