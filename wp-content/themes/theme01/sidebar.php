<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Theme_01
 * @since 1.0
 * @version 1.0
 */

if (!is_active_sidebar('primary')) {
    return;
}
?>

<aside>
    <?php dynamic_sidebar('primary'); ?>
</aside><!-- #secondary -->
