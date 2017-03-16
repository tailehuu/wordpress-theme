<?php
/**
 * Template part for displaying Carousel
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<!-- Full Page Image Background Carousel Header -->
<header id="myCarousel" class="carousel slide">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <?php
        global $post;
        $i = 0;
        $args = array('category' => 40);
        $myposts = get_posts($args);
        foreach ($myposts as $post) : setup_postdata($post);
            $i++;
            ?>
            <div class="item <?php echo $i == 1 ? "active" : ""; ?>">
                <div class="fill"
                     style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);"></div>
                <div class="carousel-caption">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        <?php endforeach;
        wp_reset_postdata(); ?>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>
