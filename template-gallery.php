<?php
/*
Template Name: Gallery Page
*/
get_header();?>
<?php get_header('primary');?>

<?php get_template_part('includes/section','subpage_content');?>

<?php get_template_part('includes/section','isotope_gallery');?>

<?php
get_footer('menu');
get_footer();?>