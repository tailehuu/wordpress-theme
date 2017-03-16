<?php
/**
 * Template part for displaying projects category for home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<section class="no-padding" id="project">
    <div class="container-fluid">
        <div class="row no-gutter popup-gallery">
            <?php
            global $post;
            $args = array('posts_per_page' => 6, 'offset' => 1, 'category' => 36);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
                <?php get_template_part('template-parts/project/project', 'content'); ?>
            <?php endforeach;
            wp_reset_postdata(); ?>
        </div>
    </div>
</section>