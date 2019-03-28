<?php
function cgs_fashion_customize_register( $wp_customize ) {
	/* Color Section */

	/* Link Color */
	$wp_customize->add_setting( 'cgs_fashion_link_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_link_color',array(
				'label' => __('Link color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_link_color',
				'priority' => 1,
			)
		)
	);

	/* Button Color */
	$wp_customize->add_setting( 'cgs_fashion_button_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_button_color',array(
				'label' => __('Button color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_button_color',
				'priority' => 1,
			)
		)
	);

	/* H1 Color */
	$wp_customize->add_setting( 'cgs_fashion_h1_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_h1_color',array(
				'label' => __('H1 Tag Color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_h1_color',
				'priority' => 1,
			)
		)
	);

	/* H2 Color */
	$wp_customize->add_setting( 'cgs_fashion_h2_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_h2_color',array(
				'label' => __('H2 Tag Color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_h2_color',
				'priority' => 1,
			)
		)
	);

	/* H3 Color */
	$wp_customize->add_setting( 'cgs_fashion_h3_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_h3_color',array(
				'label' => __('H3 Tag Color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_h3_color',
				'priority' => 1,
			)
		)
	);

	/* H4 Color */
	$wp_customize->add_setting( 'cgs_fashion_h4_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_h4_color',array(
				'label' => __('H4 Tag Color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_h4_color',
				'priority' => 1,
			)
		)
	);

	/* p tag Color */
	$wp_customize->add_setting( 'cgs_fashion_p_color', array(
		'default'   => '',
		'transport' => 'refresh',
		'sanitize_callback'  => 'sanitize_hex_color'
	) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,'cgs_fashion_p_color',array(
				'label' => __('P Tag Color', 'cgs-fashion-trend'),
				'section' => 'colors',
				'settings' => 'cgs_fashion_p_color',
				'priority' => 1,
			)
		)
	);

	/* Banner Section */
	$wp_customize->add_setting( 'cgs_fashion_setting_small_img', array(
		'sanitize_callback'  => 'sanitize_text_field'
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'cgs_fashion_setting_small_img',array(
				'label' => __('Upload image on header', 'cgs-fashion-trend'),
				'description' => __('Image Size should be <strong>490px X 690px</strong>', 'cgs-fashion-trend'),
				'section' => 'header_image',
				'settings' => 'cgs_fashion_setting_small_img',
				'priority' => 1,
			)
		)
	);

	$wp_customize->add_setting( 'cgs_fashion_setting_h1_text', array(
		'sanitize_callback'  => 'sanitize_text_field'
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'cgs_fashion_setting_h1_text',array(
				'label' => __('Header text on banner', 'cgs-fashion-trend'),
				'section' => 'cgs_fashion_section_header_banner',
				'settings' => 'cgs_fashion_setting_h1_text',
				'type' => 'text',
				'priority' => 1,
			)
		)
	);

	$wp_customize->add_setting( 'cgs_fashion_setting_p_text', array(
		'sanitize_callback'  => 'sanitize_textarea_field'
	) );
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,'cgs_fashion_setting_p_text',array(
				'label' => __('Header text on banner', 'cgs-fashion-trend'),
				'section' => 'cgs_fashion_section_header_banner',
				'settings' => 'cgs_fashion_setting_p_text',
				'type' => 'textarea',
				'priority' => 1,
			)
		)
	);

	$wp_customize->add_setting( 'theme_slug_customizer_select', array(
			'sanitize_callback' => 'cgs_theme_slug_sanitize_select'
		)
	);
	$wp_customize->add_control( 'theme_slug_customizer_select', array(
		'label' => esc_html__( 'Display banner in inner-pages', 'cgs-fashion-trend' ),
		'section' => 'cgs_fashion_section_header_banner',
		'type' => 'select',
		'choices' => array(
			'' => esc_html__('Please select','cgs-fashion-trend'),
			'yes' => esc_html__('Yes','cgs-fashion-trend'),
			'no' => esc_html__('No','cgs-fashion-trend')
		) )
	);

	function cgs_theme_slug_sanitize_select( $input, $setting ){
		$input = sanitize_key($input);
		$choices = $setting->manager->get_control( $setting->id )->choices;
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}
add_action( 'customize_register', 'cgs_fashion_customize_register' );