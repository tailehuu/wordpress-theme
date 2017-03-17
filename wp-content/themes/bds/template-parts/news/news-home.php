<?php
/**
 * Template part for displaying news category for home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<section id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><a href="<?php echo bloginfo('url') . "/category/news"; ?>">Tin T&#x1EE9;c</a>
                </h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <?php
        global $post;
        $args = array(
            'posts_per_page' => 4,
            'offset' => 1,
            'category' => 35,
            'nopaging' => true
        );
        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post); ?>
            <?php get_template_part('template-parts/news/news', 'content'); ?>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>
</section>