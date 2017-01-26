<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Theme_01
 * @since 1.0
 * @version 1.0
 */

?>
<h1>Primary Menu</h1>
<?php wp_nav_menu(array(
    'theme_location' => 'primary-menu',
    'menu_id' => 'primary-menu',
    'container_class' => 'primary_class'
)); ?>

<h1>Secondary Menu</h1>
<?php wp_nav_menu(array(
    'theme_location' => 'secondary-menu',
    'menu_id' => 'secondary-menu',
    'container_class' => 'secondary_class',
    'link_before' => '<span class="screen-reader-text">',
    'link_after' => '</span>',
)); ?>
