<?php
/**
 * Created by PhpStorm.
 * User: tailehuu
 * Date: 3/8/17
 * Time: 3:45 PM
 */
?>

<?php get_header(); ?>

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">B&#x1EA5;t &#x110;&#x1ED9;ng S&#x1EA3;n - TQT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">GI&#x1EDA;I THI&#x1EC6;U</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">D&#x1ECA;CH V&#x1EE4;</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#project">D&#x1EF0; &#xC1;N</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#news">TIN T&#x1EE8;C</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">LI&#xCA;N H&#x1EC6;</a>
                    </li>
                </ul>
            </div>
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

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in
                        no time! All of the templates and themes on Start Bootstrap are open source, free to download, and
                        easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">D&#x1ECB;ch V&#x1EE5;</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>

                        <h3>Sturdy Templates</h3>

                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>

                        <h3>Ready to Ship</h3>

                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>

                        <h3>Up to Date</h3>

                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>

                        <h3>Made with Love</h3>

                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="no-padding" id="project">
        <div class="container-fluid">
            <div class="row no-gutter popup-gallery">
                <div class="col-lg-4 col-sm-6">
                    <a href="<?php bloginfo('template_url'); ?>/assets/images/project/fullsize/1.jpg" class="project-box">
                        <img src="<?php bloginfo('template_url'); ?>/assets/images/project/thumbnails/1.jpg" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/2.jpg" ?>" class="project-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/2.jpg" ?>" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/3.jpg" ?>" class="project-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/3.jpg" ?>" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/4.jpg" ?>" class="project-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/4.jpg" ?>" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/5.jpg" ?>" class="project-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/5.jpg" ?>" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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
                    <a href="<?= get_template_directory_uri() . "/assets/images/project/fullsize/6.jpg" ?>" class="project-box">
                        <img src="<?= get_template_directory_uri() . "/assets/images/project/thumbnails/6.jpg" ?>" class="images-responsive" alt="">

                        <div class="project-box-caption">
                            <div class="project-box-caption-content">
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

    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Tin T&#x1EE9;c</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>

                        <h3>Sturdy Templates</h3>

                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>

                        <h3>Ready to Ship</h3>

                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>

                        <h3>Up to Date</h3>

                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>

                        <h3>Made with Love</h3>

                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container text-center">
            <div class="call-to-action">
                <h2>Free Download at Start Bootstrap!</h2>
                <a href="http://startbootstrap.com/template-overviews/creative/" class="btn btn-default btn-xl sr-button">Download
                    Now!</a>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section class="map no-padding" id="contact">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.529681420914!2d106.69070601510667!3d10.770684062244142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c33814545%3A0x936611bb98c309f0!2zMzEgTmd1eeG7hW4gVHLDo2ksIELhur9uIFRow6BuaCwgUXXhuq1uIDEsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1488958618376"></iframe>
    </section>

<?php get_footer(); ?>