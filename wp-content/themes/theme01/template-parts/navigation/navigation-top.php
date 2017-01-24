<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Theme 01
 * @since 1.0
 * @version 1.0
 */

?>
	<?php wp_nav_menu( array(
		'theme_location' => 'top',
		'menu_id'        => 'top-menu',
	) ); ?>
