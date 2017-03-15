<?php
/**
 * Footer
 *
 * @package WordPress
 * @subpackage bds
 * @since 1.0
 * @version 1.0
 */

?>

<footer <?= is_category() ? 'class="no-padding"' : ''?>>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h4><strong><?php bloginfo('name'); ?></strong>
                </h4>

                <p>329 C&#x1ED9;ng H&#xF2;a, P13, Q.T&#xE2;n B&#xEC;nh
                    <br>H&#x1ED3; Ch&#xED; Minh, VN</p>
                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> (+84) 915 866 749</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:feedback@batdongsantqt.com">feedback@batdongsantqt.com</a>
                    </li>
                </ul>
                <br>
                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x sr-icons"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x sr-icons"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-dribbble fa-fw fa-3x sr-icons"></i></a>
                    </li>
                </ul>
                <hr class="small">
                <p class="text-muted">B&#x1EA3;n quy&#x1EC1;n &copy; <?php bloginfo('name'); ?>
                    2017</p>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>