<?php
function optionsframework_option_name() {
	// This gets the theme name from the stylesheet
	$themename = wp_get_theme();
	$themename = preg_replace("/W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option( 'optionsframework' );
	$optionsframework_settings['id'] = $themename;
	update_option( 'optionsframework', $optionsframework_settings );
}
function optionsframework_options() {


//Configuracion General
$options[] = array(
     'name' => __('Configuración General', 'options_framework_theme'),
     'type' => 'heading');

	 //Cambio del logo
	 $options[] = array(
     'name' => __('Logo', 'options_check'),
     'desc' => __('Selecciona el logo a mostrar en la web.', 'options_check'),
     'id' => 'logo_uploader',
     'type' => 'upload');

//Información de Contacto
$options[] = array(
     'name' => __('Información de Contacto', 'options_framework_theme'),
     'type' => 'heading');

	//Teléfono de contacto
	$options[] = array(
	'name' => __('Teléfono de Contacto', 'options_framework_theme'),
	'desc' => __('Instroduzca el número de Teléfono.', 'options_framework_theme'),
	'id' => 'tel_contact',
	'std' => '',
	'class' => 'mini',
	'type' => 'text'
	);

	//Fax
	$options[] = array(
	'name' => __('Dirección del Fax', 'options_framework_theme'),
	'desc' => __('Instroduzca el número de Fax.', 'options_framework_theme'),
	'id' => 'fax_contact',
	'std' => '',
	'class' => 'mini',
	'type' => 'text'
	);
	 
	//Email de contacto
	$options[] = array(
	'name' => __('E-mail de Contacto', 'options_framework_theme'),
	'desc' => __('Instroduzca el Email.', 'options_framework_theme'),
	'id' => 'email_contact',
	'std' => '',
	'class' => '',
	'type' => 'text'
	);

	//Direccion
	$options[] = array(
	'name' => __('Dirección del Local', 'options_framework_theme'),
	'desc' => __('Instroduzca su Dirección.', 'options_framework_theme'),
	'id' => 'direc_contact',
	'std' => '',
	'class' => '',
	'type' => 'text'
	);

	//Nombre de la Fan Page
	$options[] = array(
	'name' => __('Nombre de la pagina Facebook', 'options_framework_theme'),
	'desc' => __('Nombre de la Fan Page.', 'options_framework_theme'),
	'id' => 'nomb_contact',
	'std' => '',
	'class' => 'mini',
	'type' => 'text'
	);

	//Url Facebook
	$options[] = array(
	'name' => __('Url de Facebook', 'options_framework_theme'),
	'desc' => __('Instroduzca su Fan Page.', 'options_framework_theme'),
	'id' => 'face_contact',
	'std' => '',
	'class' => '',
	'type' => 'text'
	);

	return $options;
}