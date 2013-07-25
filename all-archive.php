<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/*
Template Name: all-archives
*/

get_header(); ?>

<?php get_template_part( 'loop-header' ); ?>
<ul>
<?php wp_get_archives("type=postbypost");?>
</ul>
<?php get_footer(); ?>
