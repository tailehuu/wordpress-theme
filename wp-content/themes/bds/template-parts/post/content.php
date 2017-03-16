<?php
/**
 * Template part for displaying post content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<?php
if (is_single()) {
    ?>
    <div class="col-lg-12 col-md-12">
        <h3><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_content(); ?>
    </div>

    <!-- Add the pagination functions here. -->
    <div class="row paginate">
        <div class="col-lg-12 col-md-12 text-center">
            <?php next_post_link(); ?>
        </div>
    </div>
<?php
} else {
    ?>
    <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
            <?php the_post_thumbnail(array(260, 195)); ?>

            <h3><a href="<?= get_permalink() ?>"><?php the_title(); ?></a></h3>

            <?php the_excerpt(); ?>
        </div>
    </div>
<?php
}
?>
