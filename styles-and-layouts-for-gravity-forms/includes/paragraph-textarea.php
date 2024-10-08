<?php
/**
 * Textarea controls for customizer.
 */

/* Start of Section */
$wp_customize->add_section(
	'gf_stla_form_id_paragraph_textarea',
	array(
		'title' => 'Paragraph Textarea Fields',
		'panel' => 'gf_stla_panel',
	)
);

// Label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Width' ),
			'section'  => 'gf_stla_form_id_paragraph_textarea',
			'settings' => array(),
		)
	)
);
/* for pc */
$wp_customize->add_setting(
	'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width]',
	array(
		'default'   => '',
		'transport' => 'refresh',
		'type'      => 'option',
	)
);

	$wp_customize->add_control(
		new Stla_Desktop_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_paragraph_textarea', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);
	/* for tablet */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width-tab]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Tab_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width-tab]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_paragraph_textarea', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);
	/* for mobile */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width-phone]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Mobile_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][max-width-phone]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_paragraph_textarea', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);

	// Label.
	$wp_customize->add_control(
		new WP_Customize_Label_Only(
			$wp_customize, // WP_Customize_Manager.
			'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][margin-label-only]', // Setting id.
			array( // Args, including any custom ones.
				'label'    => __( 'Margin' ),
				'section'  => 'gf_stla_form_id_paragraph_textarea',
				'settings' => array(),
			)
		)
	);

	stla_margin_padding_controls( $wp_customize, $current_form_id, 'gf_stla_form_id_paragraph_textarea', 'paragraph-textarea', 'margin' );

	// Label.
	$wp_customize->add_control(
		new WP_Customize_Label_Only(
			$wp_customize, // WP_Customize_Manager.
			'gf_stla_form_id_' . $current_form_id . '[paragraph-textarea][padding-label-only]', // Setting id.
			array( // Args, including any custom ones.
				'label'    => __( 'Padding' ),
				'section'  => 'gf_stla_form_id_paragraph_textarea',
				'settings' => array(),
			)
		)
	);
	stla_margin_padding_controls( $wp_customize, $current_form_id, 'gf_stla_form_id_paragraph_textarea', 'paragraph-textarea', 'padding' );
