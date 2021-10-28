<?php
/*
Template Name: Sub Page
*/
get_header();
get_header('primary');?>

<?php get_template_part('includes/section','banner_static');?>

<?php get_template_part('includes/section','subpage_content');?>

<?php get_template_part('includes/section','subpage_repeater');?>

<?php get_template_part('includes/section','subpage_callouts');?>

<?php
get_footer('menu');
get_footer();?>