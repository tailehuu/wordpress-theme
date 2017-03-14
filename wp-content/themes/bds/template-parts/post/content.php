<?php
/**
 * Template part for displaying page content in page.php
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
        <p class="text-muted"><?php the_content(); ?></p>
    </div>
<?php
} else {
    ?>
    <div class="col-lg-3 col-md-6 text-center">
        <div class="service-box">
            <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>

            <h3><a href="<?= get_permalink() ?>"><?php the_title(); ?></a></h3>

            <p class="text-muted"><?php the_excerpt(); ?></p>
        </div>
    </div>
<?php
}
?>
