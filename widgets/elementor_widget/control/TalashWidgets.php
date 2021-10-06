<?php


class TalashWidgets extends \Elementor\Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve Blank widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_name() {
		return 'TalashWidgets';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Blank widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_title() {
		return __( 'Talash', 'talash' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve Blank widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_icon() {
		return 'eicon-search';
	}

	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Blank widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *
	 */
	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Register Blank widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() {

		$this->register_content_controls();
		$this->register_style_controls();

	}

	/**
	 * Register Blank widget content ontrols.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	function register_content_controls() {
		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Content', 'talash' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'heading',
			[
				'label'       => __( 'Heading', 'talash' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
				'placeholder' => __( 'Search Heading', 'talash' ),
				'default'     => __( 'Search', 'talash' ),
			]
		);

		$this->add_control(
			'description',
			[
				'label'       => __( 'Description', 'talash' ),
				'type'        => \Elementor\Controls_Manager::TEXT,
				'input_type'  => 'text',
				'placeholder' => __( 'Write Description', 'talash' ),
				'default'     => __( 'Advanced Search Experience for WordPress', 'talash' ),
			]
		);


		$this->end_controls_section();


	}

	/**
	 * Register Blank widget style ontrols.
	 *
	 * Adds different input fields in the style tab to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_style_controls() {

		$this->start_controls_section(
			'heading_style_section',
			[
				'label' => __( 'Heading Style', 'talash' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'color',
			[
				'label'     => __( 'Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#28303d',
				'selectors' => [
					'{{WRAPPER}} h2.talash_heading' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'content_typography',
				'label'    => __( 'Typography', 'talash' ),
				'scheme'   => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.talash_heading',
			]
		);
		$this->add_control(
			'heading_alignment',
			[
				'label'     => __( 'Heading Alignment', 'talash' ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'default'   => 'left',
				'options'   => [
					'left'    => __( 'Left', 'talash' ),
					'right'   => __( 'Right', 'talash' ),
					'center ' => __( 'Center', 'talash' ),
				],
				'selectors' => [
					'{{WRAPPER}} h2.talash_heading' => 'text-align:{{VALUE}}'
				]
			]
		);
		$this->add_control(
			'heading_margin',
			[
				'label'      => __( 'Margin', 'plugin-domain' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} h2.talash_heading' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'heading_padding',
			[
				'label'      => __( 'Padding', 'plugin-domain' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} h2.talash_heading' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();


		$this->start_controls_section(
			'description_style_section',
			[
				'label' => __( 'Description Style', 'talash' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'description_color',
			[
				'label'     => __( 'Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#28303d',
				'selectors' => [
					'{{WRAPPER}} p.talash_description' => 'color: {{VALUE}}'
				]
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'     => 'description_content_typography',
				'label'    => __( 'Typography', 'talash' ),
				'scheme'   => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} p.talash_description',
			]
		);

		$this->add_control(
			'description_alignment',
			[
				'label'     => __( 'Description Alignment', 'talash' ),
				'type'      => \Elementor\Controls_Manager::SELECT,
				'default'   => 'left',
				'options'   => [
					'left'    => __( 'Left', 'talash' ),
					'right'   => __( 'Right', 'talash' ),
					'center ' => __( 'Center', 'talash' ),
				],
				'selectors' => [
					'{{WRAPPER}} p.talash_description' => 'text-align:{{VALUE}}'
				]
			]
		);

		$this->add_control(
			'description_margin',
			[
				'label'      => __( 'Margin', 'plugin-domain' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} p.talash_description' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'description_padding',
			[
				'label'      => __( 'Padding', 'plugin-domain' ),
				'type'       => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors'  => [
					'{{WRAPPER}} p.talash_description' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		/* === Search === */
		$this->start_controls_section(
			'talash_search_style_section',
			[
				'label' => __( 'Search Style', 'talash' ),
				'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		/* === input field === */
		$this->add_control(
			'input',
			[
				'label'       => __( 'Input', 'talash' ),
				'type'        => \Elementor\Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'input_background_color',
			[
				'label'     => __( 'Input background Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#f2f2f2',
				'selectors' => [
					'{{WRAPPER}} .search-bar .search-bar__input' => 'background-color: {{VALUE}}',
				]
			]
		);
		$this->add_control(
			'dropdown_input_background_color',
			[
				'label'     => __( 'Dropdown Input background Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#f2f2f2',
				'selectors' => [
					'{{WRAPPER}} .search-bar.unfold .search-bar__input ' => 'background-color: {{VALUE}}',
				]
			]
		);
		$this->add_control(
			'input_text_color',
			[
				'label'     => __( 'Input Text Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#9e9e9e',
				'selectors' => [
					'{{WRAPPER}} .search-bar .search-bar__input' => 'color: {{VALUE}}',
					'{{WRAPPER}} .search-bar .search-bar__input:focus' => 'color: {{VALUE}}',
					'{{WRAPPER}} .search-bar .search-bar__input::placeholder' => 'color: {{VALUE}}',
				]
			]
		);


		/* === Button === */
		$this->add_control(
			'button',
			[
				'label'       => __( 'Button', 'talash' ),
				'type'        => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'icon_color',
			[
				'label'     => __( 'Icon Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#4fbd86',
				'selectors' => [
					'{{WRAPPER}} .talash button.search-bar__btn-search svg' => 'fill: {{VALUE}}',
				]
			]
		);
		$this->add_control(
			'icon_hover_color',
			[
				'label'     => __( 'Icon Hover Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#000000',
				'selectors' => [
					'{{WRAPPER}} .talash button.search-bar__btn-search:hover svg' => 'fill: {{VALUE}}',
					'{{WRAPPER}} .talash button.search-bar__btn-search:hover path' => 'stroke: {{VALUE}}',
				]
			]
		);
		$this->add_control(
			'button_background_color',
			[
				'label'     => __( 'Button background Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'selectors' => [
					'{{WRAPPER}} .talash form .search-bar button.search-bar__btn-search' => 'background-color: {{VALUE}}',
				]
			]
		);
        $this->add_control(
			'button_hover_background_color',
			[
				'label'     => __( 'Button Hover background Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#ffdf00',
				'selectors' => [
					'{{WRAPPER}} .talash form .search-bar button.search-bar__btn-search:hover' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .talash form .search-bar.unfold button.search-bar__btn-search:hover' => 'background-color: {{VALUE}}',
				]
			]
		);
		$this->add_control(
			'dropdown_button_background_color',
			[
				'label'     => __( 'Dropdown Button background Color', 'talash' ),
				'type'      => \Elementor\Controls_Manager::COLOR,
				'default'   => '#f2f2f2',
				'selectors' => [
					'{{WRAPPER}} .talash form .search-bar.unfold button.search-bar__btn-search' => 'background-color: {{VALUE}}',
				]
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		$heading     = $this->get_settings( 'heading' );
		$description = $this->get_settings( 'description' );
		$this->add_inline_editing_attributes( 'heading', 'none' );
		$this->add_inline_editing_attributes( 'description', 'none' );
		$this->add_render_attribute( 'heading', 'class', 'talash_heading' );
		$this->add_render_attribute( 'description', 'class', 'talash_description' );
		?>
        <div>
            <h2 <?php echo $this->get_render_attribute_string( 'heading' ) ?>><?php echo esc_html( $heading ); ?></h2>
            <p <?php echo $this->get_render_attribute_string( 'description' ) ?>><?php echo wp_kses_post( $description ) ?></p>
			<?php echo do_shortcode( '[talash-search]' ); ?>
        </div>
		<?php

	}

	/**
	 * Render Blank widget output on the frontend.
	 *
	 * Written in JS and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function content_template() {

	}

}