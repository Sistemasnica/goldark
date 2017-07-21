<?php /* Template Name: Home */
	get_header(); ?>

      <?php
       $logo_uploader = of_get_option('logo_uploader','');
       $fax_contact = of_get_option('fax_contact','');
       $email_contact = of_get_option('email_contact','');
       $direc_contact = of_get_option('direc_contact','');
      ?>


<?php get_footer(); ?>