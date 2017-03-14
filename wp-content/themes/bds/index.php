<?php
/**
 * Index
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>


    <section id="news">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><a href="<?php echo bloginfo('url') . "/category/news"; ?>">Tin T&#x1EE9;c</a></h2>
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


<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        get_template_part('template-parts/post/content', get_post_format());
    endwhile;
else :
    get_template_part('template-parts/post/content', 'none');
endif;
?>

<?php get_footer(); ?>