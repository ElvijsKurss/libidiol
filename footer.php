<footer class="footer text-center py-2 theme-bg-dark">
    <div id="footer-container" class="main-wrapper container">

        <div class="column one">
            <a href="<?= icl_get_home_url(); ?>">
                <img class="bottom-logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo" />
            </a>
            <p class="footer-content-text-no-hover">
                <?= __('Unleash Natures Power For Passionate', 'Libidiol.com') ?> <br />
                <?= __('Living with Varomax', 'Libidiol.com') ?>
            </p>
            <ul class="social-icons">
                <li class="footer-icons"><a href="https://www.facebook.com/libidiol"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li class="footer-icons"><a href="https://www.linkedin.com/company/libidiol/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <!-- Desktop version for Useful links -->
        <div class="column two" id="desktop-version-useful-links">
            <div id="column-two-content">
                <h3><?= __('Useful Links', 'Libidiol.com') ?></h3>
            </div>
            <div id="column-two-text">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/delivery-information/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Delivery Information', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <hr class="seperator-hr-element">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/terms-and-conditions/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Terms & Conditions', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <hr class="seperator-hr-element">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/privacy-policy/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Privacy Policy', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <hr class="seperator-hr-element">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/refund-policy/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Refund Policy', 'Libidiol.com') ?></p>
                    </a>
                </div>

            </div>
        </div>

        <div class="column three">
            <div class="column-container">
                <div id="column-three-content">
                    <h3>Contact Us</h3>
                </div>
                <div>
                    <a href="https://maps.app.goo.gl/FLaKRV3Gobmfj7ah9">
                        <p class="footer-content-text-three"><?= __('Thailand, Ramkhamhaeng road', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <div>
                    <p class="footer-content-text-three">
                        <a href="tel:+66858576671">+66858576671</a>
                    </p>
                </div>
                <div>
                    <p class="footer-content-text-three"><a href="mailto:office@libidiol.com">office@libidiol.com</a></p>
                </div>

            </div>

        </div>

        <!-- Mobile version Useful links content -->
        <div class="column two" id="mobile-version-useful-links">
            <div id="column-two-content">
                <h3><?= __('Useful Links', 'Libidiol.com') ?></h3>
            </div>
            <div id="column-two-text">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/terms-and-conditions/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Terms & Conditions', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <hr class="seperator-hr-element">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/privacy-policy/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Privacy Policy', 'Libidiol.com') ?></p>
                    </a>
                </div>
                <hr class="seperator-hr-element">
                <div>
                    <a href="<?php echo esc_url(apply_filters('wpml_permalink', 'http://libidiol.com/refund-policy/', ICL_LANGUAGE_CODE)); ?>">
                        <p class="footer-content-text-two"><?= __('Refund Policy', 'Libidiol.com') ?></p>
                    </a>
                </div>
            </div>
            <div>
                <p class="follow-us-mobile"><?= __('Follow Us', 'Libidiol.com') ?></p>
                <ul class="follow-us-icons">
                    <li class="footer-icons-mobile"><a href="https://www.facebook.com/libidiol"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="footer-icons-mobile"><a href="https://www.linkedin.com/company/libidiol/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="copyright">
        <?= __(' 164 Ramkamheang 112 Road, Sammakorn Village, Sapansoong District, Bangkok, Thailand 10240 BULLPORT CO., LTD') ?>
    </div>
</footer>

</div>

<?php
wp_footer();
?>


</body>

</html>