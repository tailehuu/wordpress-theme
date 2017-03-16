<?php
/**
 * Home template
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>

    <!-- about -->
    <?php get_template_part('about'); ?>

    <!-- services -->
    <?php get_template_part('services'); ?>

    <!-- project -->
    <section class="no-padding" id="project">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php bloginfo('template_url'); ?>/assets/images/project/fullsize/1.jpg"
                       class="portfolio-box">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/project/thumbnails/1.jpg"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/2.jpg" ?>"
                       class="portfolio-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/2.jpg" ?>"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/3.jpg" ?>"
                       class="portfolio-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/3.jpg" ?>"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/4.jpg" ?>"
                       class="portfolio-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/4.jpg" ?>"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/5.jpg" ?>"
                       class="portfolio-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/5.jpg" ?>"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/6.jpg" ?>"
                       class="portfolio-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/6.jpg" ?>"
                             class="img-responsive" alt="">

                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    Category
                                </div>
                                <div class="project-name">
                                    Project Name
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- news -->
    <?php get_template_part('news', 'home'); ?>

    <!-- map -->
    <?php get_template_part('map'); ?>

<?php get_footer(); ?>