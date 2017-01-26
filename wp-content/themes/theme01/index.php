<?php get_header(); ?>

    <div id="content">
        <?php if (have_posts()) : ?>
            <!-- Start of the main loop. -->
            <?php while (have_posts()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail(); ?>
                <?php the_excerpt(); ?>
            <?php endwhile; ?>
            <!-- End of the main loop -->

            <!-- Add the pagination functions here. -->
            <?php posts_nav_link(); ?>
        <?php else : ?>
            <?php _e('Sorry, no posts matched your criteria.', 'textdomain'); ?>
        <?php endif; ?>
    </div>

    <div id="sidebar">
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>