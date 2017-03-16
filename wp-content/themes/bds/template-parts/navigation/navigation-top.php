<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <?php wp_nav_menu(array(
            'theme_location' => is_home() ? 'home-menu' : 'primary-menu',

            'container_id' => 'bs-example-navbar-collapse-1',
            'container_class' => 'collapse navbar-collapse',

            'menu_class' => 'nav navbar-nav navbar-right',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        )); ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>