<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _tk
 */

get_header(); ?>

<?php
	query_posts(array(
			'post_type' => 'visual',
			'showposts' => 10,
			'category'  => 'painting'
	) );
?>
<div class="row">

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( 'content', 'visual' ); ?>

<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
