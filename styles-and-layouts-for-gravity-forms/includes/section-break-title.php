<?php
/**
 * Section break tile controls for customizer.
 */

$wp_customize->add_section(
	'gf_stla_form_id_section_break_title_description',
	array(
		'title' => 'Section Break Title & Description ',
		'panel' => 'gf_stla_panel',
	)
);


// font align style buttons.
$wp_customize->add_setting(
	'gf_stla_form_id_' . $current_form_id . '[section-break-title][text-align]',
	array(
		'default'   => '',
		'transport' => 'postMessage',
		'type'      => 'option',
	)
);

$wp_customize->add_control(
	new Stla_Text_Alignment_Option(
		$wp_customize,
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][text-align]',
		array(
			'label'   => 'Title Font Alignment',
			'section' => 'gf_stla_form_id_section_break_title_description',
			'type'    => 'text_alignment',
			'choices' => $align_pos,
		)
	)
);


// font style buttons.
$wp_customize->add_setting(
	'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-style]',
	array(
		'default'   => 'bold',
		'transport' => 'postMessage',
		'type'      => 'option',
	)
);

$wp_customize->add_control(
	new Stla_Font_Style_Option(
		$wp_customize,
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-style]',
		array(
			'label'   => 'Title Font Style',
			'section' => 'gf_stla_form_id_section_break_title_description',
			'type'    => 'font_style',
			'choices' => $font_style_choices,
		)
	)
);


// Label.
$wp_customize->add_control(
	new WP_Customize_Label_Only(
		$wp_customize, // WP_Customize_Manager.
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size-label-only]', // Setting id.
		array( // Args, including any custom ones.
			'label'    => __( 'Title Font Size' ),
			'section'  => 'gf_stla_form_id_section_break_title_description',
			'settings' => array(),
		)
	)
);
/* for pc */
$wp_customize->add_setting(
	'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size]',
	array(
		'default'   => '',
		'transport' => 'refresh',
		'type'      => 'option',
	)
);

	$wp_customize->add_control(
		new Stla_Desktop_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);

	/* for tablet */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size-tab]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Tab_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size-tab]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);

	/* for mobile */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size-phone]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Mobile_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-size-phone]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);


	// Line height label.
	$wp_customize->add_control(
		new WP_Customize_Label_Only(
			$wp_customize, // WP_Customize_Manager.
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height-label-only]', // Setting id.
			array( // Args, including any custom ones.
				'label'    => __( 'Title Line Height' ),
				'section'  => 'gf_stla_form_id_section_break_title_description',
				'settings' => array(),
			)
		)
	);
	/* for pc*/
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Desktop_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);

	/* for_tablet*/
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height-tab]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Tab_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height-tab]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);


	/* for mobile*/
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height-phone]',
		array(
			'default'   => '',
			'transport' => 'refresh',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new Stla_Mobile_Text_Input_Option(
			$wp_customize,
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][line-height-phone]',
			array(
				'type'        => 'text',
				'priority'    => 10, // Within the section.
				'section'     => 'gf_stla_form_id_section_break_title_description', // Required, core or custom.
				'label'       => '',
				'input_attrs' => array(
					'placeholder' => 'Ex: 40px',
				),
			)
		)
	);

	/* Start of Section */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-color]',
		array(
			'default'   => '',
			'transport' => 'postMessage',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, // WP_Customize_Manager.
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][font-color]', // Setting id.
			array( // Args, including any custom ones.
				'label'   => __( 'Title Font Color' ),
				'section' => 'gf_stla_form_id_section_break_title_description',
			)
		)
	);
	/* Start of Section */
	$wp_customize->add_setting(
		'gf_stla_form_id_' . $current_form_id . '[section-break-title][background-color]',
		array(
			'default'   => '',
			'transport' => 'postMessage',
			'type'      => 'option',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize, // WP_Customize_Manager.
			'gf_stla_form_id_' . $current_form_id . '[section-break-title][background-color]', // Setting id.
			array( // Args, including any custom ones.
				'label'   => __( 'Title Background Color' ),
				'section' => 'gf_stla_form_id_section_break_title_description',
			)
		)
	);
