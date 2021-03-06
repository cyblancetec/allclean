<?php
class Tm_Builder_Product_Categories extends Tm_Builder_Module {

	function init() {
		$this->name = esc_html__( 'Product Categories', 'power-builder-integrator' );
		$this->icon = 'f07a';
		$this->slug = 'tm_pb_product_categories';
		$this->main_css_element = '%%order_class%%.' . $this->slug;

		$this->whitelisted_fields = array(
			'number',
			'orderby',
			'order',
			'columns',
			'hide_empty',
			'parent',
			'ids',
		);
	}

	function get_fields() {

		$fields = array(
			'number' => array(
				'label'           => esc_html__( 'Categories number (0 to show all)', 'power-builder-integrator' ),
				'type'            => 'range',
				'option_category' => 'basic_option',
				'default'         => '0',
				'range_settings' => array(
					'min'  => '0',
					'max'  => '60',
					'step' => '1',
				),
			),
			'orderby' => array(
				'label'           => esc_html__( 'Order By', 'power-builder-integrator' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
				'options'         => array(
					'name'        => esc_html__( 'Name', 'power-builder-integrator' ),
					'slug'        => esc_html__( 'Slug', 'power-builder-integrator' ),
					'term_group'  => esc_html__( 'Term Group', 'power-builder-integrator' ),
					'term_id'     => esc_html__( 'Term Id', 'power-builder-integrator' ),
					'id'          => esc_html__( 'ID', 'power-builder-integrator' ),
					'description' => esc_html__( 'Description', 'power-builder-integrator' ),
					'count'       => esc_html__( 'Count', 'power-builder-integrator' ),
				),
			),
			'order' => array(
				'label'           => esc_html__( 'Order', 'power-builder-integrator' ),
				'type'            => 'select',
				'option_category' => 'basic_option',
				'options'         => array(
					'DESC' => esc_html__( 'DESC', 'power-builder-integrator' ),
					'ASC'  => esc_html__( 'ASC', 'power-builder-integrator' ),
				),
			),
			'columns' => array(
				'label'           => esc_html__( 'Columns', 'power-builder-integrator' ),
				'type'            => 'range',
				'option_category' => 'basic_option',
				'default'         => '4',
				'range_settings' => array(
					'min'  => '1',
					'max'  => '6',
					'step' => '1',
				),
			),
			'hide_empty' => array(
				'label'           => esc_html__( 'Hide Empty', 'power-builder-integrator' ),
				'type'            => 'yes_no_button',
				'option_category' => 'basic_option',
				'options'         => array(
					'off' => esc_html__( 'No', 'power-builder-integrator' ),
					'on'  => esc_html__( 'Yes', 'power-builder-integrator' ),
				),
			),
			'parent' => array(
				'label'           => esc_html__( 'Parent', 'power-builder-integrator' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
			),
			'ids' => array(
				'label'           => esc_html__( 'IDs', 'power-builder-integrator' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
			),
			'admin_label' => array(
				'label'       => esc_html__( 'Admin Label', 'power-builder-integrator' ),
				'type'        => 'text',
				'description' => esc_html__( 'This will change the label of the module in the builder for easy identification.', 'power-builder-integrator' ),
			),
			'module_id' => array(
				'label'           => esc_html__( 'CSS ID', 'power-builder-integrator' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
			'module_class' => array(
				'label'           => esc_html__( 'CSS Class', 'power-builder-integrator' ),
				'type'            => 'text',
				'option_category' => 'configuration',
				'tab_slug'        => 'custom_css',
				'option_class'    => 'tm_pb_custom_css_regular',
			),
		);
		return $fields;
	}

	function shortcode_callback( $atts, $content = null, $function_name ) {

		$this->set_vars(
			array(
				'number',
				'orderby',
				'order',
				'columns',
				'hide_empty',
				'parent',
				'ids',
				'module_id',
				'module_class',
			)
		);

		$callback = power_builder_integrator()->get_shortcode_cb( 'woocommerce', 'product_categories' );

		if ( ! is_callable( $callback ) ) {
			return;
		}

		if ( 'on' === $this->_var( 'hide_empty' ) ) {
			$this->_var( 'hide_empty', 1 );
		} else {
			$this->_var( 'hide_empty', 0 );
		}

		$content = call_user_func(
			$callback,
			array(
				'number'     => $this->_var( 'number' ),
				'orderby'    => $this->_var( 'orderby' ),
				'order'      => $this->_var( 'order' ),
				'columns'    => $this->_var( 'columns' ),
				'hide_empty' => $this->_var( 'hide_empty' ),
				'parent'     => $this->_var( 'parent' ),
				'ids'        => $this->_var( 'ids' ),
			)
		);

		$output = $this->wrap_clean( $content, array(), $function_name );

		return $output;
	}
}

new Tm_Builder_Product_Categories;
