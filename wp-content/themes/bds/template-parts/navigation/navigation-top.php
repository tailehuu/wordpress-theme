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
//            'theme_location' => 'primary-menu',

            'container_id' => 'bs-example-navbar-collapse-1',
            'container_class' => 'collapse navbar-collapse',

            'menu_class' => 'nav navbar-nav navbar-right',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        )); ?>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

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
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?= get_template_directory_uri() . '/assets/images/header/house1.jpg' ?>);"></div>
            <div class="carousel-caption">
                <h2>Dream House</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?= get_template_directory_uri() . '/assets/images/header/house2.jpg' ?>);"></div>
            <div class="carousel-caption">
                <h2>What the house</h2>
            </div>
        </div>
        <div class="item">
            <!-- Set the third background image using inline CSS below. -->
            <div class="fill" style="background-image:url(<?= get_template_directory_uri() . '/assets/images/header/house3.jpg' ?>);"></div>
            <div class="carousel-caption">
                <h2>Big House</h2>
            </div>
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</header>