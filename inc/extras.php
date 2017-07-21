<?php
/*-----------------------------------------*/
/* Cargar Panel de Opciones
/*-----------------------------------------*/
if ( ! function_exists( 'optionsframework_init' ) ) : {
  define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/options-framework/' );
  require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';
}
endif;

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );