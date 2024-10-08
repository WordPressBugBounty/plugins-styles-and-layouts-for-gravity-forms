<?php
/**
 * Form select components.
 */

$wp_customize->add_section(
	'gf_stla_select_form_section',
	array(
		'title' => 'Select Form',
		'panel' => 'gf_stla_panel',
	)
);

	$wp_customize->add_setting(
		'gf_stla_select_form_id',
		array(
			'default'   => '-1',
			'transport' => 'postMessage',
			'type'      => 'option',
		)
	);

	// Get all gravity forms created by user.
	if ( class_exists( 'RGFormsModel' ) ) {
		$forms = RGFormsModel::get_forms( null, 'title' );

		$select_form = array( -1 => '---Select form --' );

		foreach ( $forms as $form ) {
			$select_form[ $form->id ] = $form->title;
		}
	} else {
		$select_form['form not installed'] = 'Gravity Forms not installed';
	}

	$wp_customize->add_control(
		'gf_stla_select_form_id',
		array(
			'type'     => 'select',
			'priority' => 10, // Within the section.
			'section'  => 'gf_stla_select_form_section', // Required, core or custom.
			'label'    => __( 'Select Form' ),
			'choices'  => $select_form,

		)
	);
