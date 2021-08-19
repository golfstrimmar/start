<?php
/*
Template Name: home-start
*/
defined( 'ABSPATH' ) || exit;
get_header();
?>


<?php get_template_part('./includes/bunner') ?>  
<?php get_template_part('./includes/posts') ?>  
<?php get_template_part('./includes/projects') ?>  
<?php get_template_part('./includes/contacts') ?>  


<?php 
get_footer();