<?php
/**
 * Home template
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>

    <!-- about -->
    <?php get_template_part('about'); ?>

    <!-- services -->
    <?php get_template_part('services'); ?>

    <!-- project -->
    <?php get_template_part('template-parts/project/project', 'home'); ?>

    <!-- news -->
    <?php get_template_part('template-parts/news/news', 'home'); ?>

    <!-- map -->
    <?php get_template_part('map'); ?>

<?php get_footer(); ?>