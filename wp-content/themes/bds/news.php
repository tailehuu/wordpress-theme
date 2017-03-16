<?php
/**
 * News template for index page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<section id="<?= is_single() ? 'news-detail' : 'news' ?>">
    <?php if (!is_single()) : ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><a href="<?php echo bloginfo('url') . "/category/news"; ?>">Tin T&#x1EE9;c</a>
                    </h2>
                    <hr class="primary">
                </div>
            </div>

        </div>
    <?php endif; ?>

    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/post/content', get_post_format()); ?>
                <?php endwhile; ?>
            </div>

            <?php if (!is_single()) : ?>
                <!-- Add the pagination functions here. -->
                <div class="row paginate">
                    <div class="col-lg-12 col-md-12 text-center">
                        <?php posts_nav_link('|', '< Trang tr&#x1B0;&#x1EDB;c', 'Trang sau >'); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php else : ?>
            <?php get_template_part('template-parts/post/content', 'none'); ?>
        <?php endif; ?>
    </div>
</section>