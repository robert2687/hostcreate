<?php
add_action("init","goldy_cloud_pricing_plan_customizer",12);
function goldy_cloud_pricing_plan_customizer(){
// Restaurant Menu
	new \Kirki\Section(
		'goldy_cloud_pricing_plan_section',
		[
			'title'       => esc_html__( 'Pricing Plan', 'goldy-cloud' ),
			'panel'       => 'globly_theme_option',
			'priority'    => 150,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'goldy_cloud_pricing_plan_main_title',
			'label'    => esc_html__( 'Pricing Plan Title', 'goldy-cloud' ),
			'section'  => 'goldy_cloud_pricing_plan_section',
			'default'  => esc_html__( 'Pricing Plan', 'goldy-cloud' ),
			'priority' => 5,
			'partial_refresh'    => [
				'goldy_cloud_pricing_plan_main_title' => [
					'selector'        => '.pricing_plan_title',
					'render_callback' => function() {
					    return true;
					}
				],
			],
		]
	);

	new \Kirki\Field\Repeater(
		[
			'settings' => 'goldy_cloud_pricing_plan_content',
			'label'    => esc_html__( 'Pricing Plan Content', 'goldy-cloud' ),
			'row_label' => array( 'value' => 'Info item' ),
			'section'  => 'goldy_cloud_pricing_plan_section',
			'priority' => 10,
			'default'  => [
				[
					'image'    => '',
					'price_value'    => esc_html__('$120', 'goldy-cloud' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-cloud' ),
					'plan_type'    => esc_html__('Basic', 'goldy-cloud' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-cloud' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-cloud' ),	
					'link_url'    => '#',	
				],
				[
					'image'    => '',
					'price_value'    => esc_html__('$160', 'goldy-cloud' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-cloud' ),
					'plan_type'    => esc_html__('Standard', 'goldy-cloud' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-cloud' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-cloud' ),	
					'link_url'    => '#',
				],
				[
					'image'    => '',
					'price_value'    => esc_html__('$190', 'goldy-cloud' ),
					'plan_time'    => esc_html__('Per Month', 'goldy-cloud' ),
					'plan_type'    => esc_html__('Premium', 'goldy-cloud' ),
					'plan_description'    => esc_html__('Lorem ipsum dolor sit amet, consectetur aditpisicing elit, sed do eiusmod tempor incididunt ut labore.', 'goldy-cloud' ),	
					'link_text'    => esc_html__('Select Plan', 'goldy-cloud' ),	
					'link_url'    => '#',
				],
			],
			'fields'   => [
				'image'    => [
					'type'		  => 'image',
					'label'       => esc_html__( 'Image:', 'goldy-cloud' ),
				],
				'price_value'    => [
					'type'		  => 'text',
					'label'       => esc_html__( 'Plan Price:', 'goldy-cloud' ),
				],
				'plan_time'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Time', 'goldy-cloud' ),
				],
				'plan_type'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Plan Type', 'goldy-cloud' ),
				],
				'plan_description'    => [
					'type'        => 'textarea',
					'label'       => esc_html__( 'About Plan', 'goldy-cloud' ),
				],
				'link_text'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link Text:', 'goldy-cloud' ),
				],
				'link_url'    => [
					'type'        => 'text',
					'label'       => esc_html__( 'Link URL:', 'goldy-cloud' ),
				],
			],
			'choices' => [
				'limit' => 3,
			]
		]
	);

	new \Kirki\Field\Image(
		[
			'settings'    => 'goldy_cloud_pricing_plan_background_image',
			'label'       => esc_html__( 'Backgroung Image', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '',
			'priority'    => 15,
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_cloud_pricing_plan_background_position',
			'label'       => esc_html__( 'Background Position', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => 'center center',
			'priority'    => 20,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-cloud' ),
			'choices'     => [
				'left top' => esc_html__( 'Left Top', 'goldy-cloud' ),
				'left center' => esc_html__( 'Left Center', 'goldy-cloud' ),
				'left bottom' => esc_html__( 'Left Bottom', 'goldy-cloud' ),
				'right top' => esc_html__( 'Right Top', 'goldy-cloud' ),
				'right center' => esc_html__( 'Right Center', 'goldy-cloud' ),
				'right bottom' => esc_html__( 'Right Bottom', 'goldy-cloud' ),
				'center top' => esc_html__( 'Center Top', 'goldy-cloud' ),
				'center center' => esc_html__( 'Center Center', 'goldy-cloud' ),
				'center bottom' => esc_html__( 'Center Bottom', 'goldy-cloud' ),
			],
			'output' => array(
				array(
					'element'  => '.cloud_pricing_plan_section',
					'property' => 'background-position',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_cloud_pricing_plan_background_attachment',
			'label'       => esc_html__( 'Background Attachment', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => 'scroll',
			'priority'    => 25,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-cloud' ),
			'choices'     => [
				'scroll' => esc_html__( 'Scroll', 'goldy-cloud' ),
				'fixed' => esc_html__( 'Fixed', 'goldy-cloud' ),
			],
			'output' => array(
				array(
					'element'  => '.cloud_pricing_plan_section',
					'property' => 'background-attachment',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Select(
		[
			'settings'    => 'goldy_cloud_pricing_plan_background_size',
			'label'       => esc_html__( 'Background Size', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => 'cover',
			'priority'    => 30,
			'placeholder' => esc_html__( 'Choose an option', 'goldy-cloud' ),
			'choices'     => [
				'auto' => esc_html__( 'Auto', 'goldy-cloud' ),
				'cover' => esc_html__( 'Cover', 'goldy-cloud' ),
				'contain' => esc_html__( 'Contain', 'goldy-cloud' ),
			],
			'output' => array(
				array(
					'element'  => '.cloud_pricing_plan_section',
					'property' => 'background-size',
					'suffix' 	  => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_bg_color',
			'label'       => __( 'Background Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 35,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.cloud_pricing_plan_section',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_text_color',
			'label'       => __( 'Title Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#333',
			'priority'    => 40,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing_plan_title h2',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_content_bg_color',
			'label'       => __( 'Contain Background Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 45,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper',
					'property' => 'background-color',
				),
				array(
					'element'  => '.pp_first_content svg',
					'property' => 'fill',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_content_price_color',
			'label'       => __( 'Contain Price Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 50,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content h2, .pp_first_content p',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_content_hover_price_color',
			'label'       => __( 'Contain Price Hover Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 55,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_first_content h2, .pricing-plan-inner-wrapper:hover .pp_first_content p',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_content_text_color',
			'label'       => __( 'Contain Text Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 60,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_content_hover_text_color',
			'label'       => __( 'Contain Hover Text Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#000000',
			'priority'    => 65,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pricing-plan-inner-wrapper:hover .pp_second_content',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_button_bg_color',
			'label'       => __( 'Button Background Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#0091dc',
			'priority'    => 70,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_button_bg_hover_color',
			'label'       => __( 'Background Hover Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#214462',
			'priority'    => 75,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons::before, .pp_btn.pp_btn .buttons::after',
					'property' => 'background-color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_button_text_color',
			'label'       => __( 'Button Text Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 80,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_button_texthover_color',
			'label'       => __( 'Button Text Hover Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#ffffff',
			'priority'    => 85,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons:hover',
					'property' => 'color',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_button_border_color',
			'label'       => __( 'Button Border Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#0091dc',
			'priority'    => 90,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_btn.pp_btn .buttons',
					'property' => 'border-color',
					'suffix' => '!important',
				),
			),
		]
	);

	new \Kirki\Field\Color(
		[
			'settings'    => 'goldy_cloud_pricing_plan_price_title_bg_color',
			'label'       => __( 'Price Title Background Color', 'goldy-cloud' ),
			'section'     => 'goldy_cloud_pricing_plan_section',
			'default'     => '#0091dc',
			'priority'    => 95,
			'choices'     => [
				'alpha' => true,
			],
			'output' => array(
				array(
					'element'  => '.pp_first_content',
					'property' => 'background-color',
				),
			),
		]
	);
}

?>