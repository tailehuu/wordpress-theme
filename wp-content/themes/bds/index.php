<?php
/**
 * Index
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>

    <section id="news">
        <div class="container">
            <div class="row">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        get_template_part('template-parts/post/content', get_post_format());
                    endwhile;
                else :
                    get_template_part('template-parts/post/content', 'none');
                endif;
                ?>
            </div>
            <div class="row" style="padding-top: 100px">
                <div class="col-lg-12 col-md-12 text-center">
                    <!-- Add the pagination functions here. -->
                    <?php posts_nav_link(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>