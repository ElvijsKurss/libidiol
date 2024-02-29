<footer class="footer text-center py-2 theme-bg-dark">
    <div id="footer-container" class="main-wrapper container">

        <div class="column one">
            <a href="http://custom-theme-website.test/">
                <img class="bottom-logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo" />
            </a>
            <p class="footer-content-text">Unleash Natures Power For Passionate <br /> Living with Libidiol</p>
            <ul class="social-icons">
                <li class="footer-icons"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                <li class="footer-icons"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                <li class="footer-icons"><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                <li class="footer-icons"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
        </div>
        <!-- Desktop version for Useful links -->
        <div class="column two" id="desktop-version-useful-links">
            <div id="column-two-content">
                <h3>Useful Links</h3>
            </div>
            <div id="column-two-text">
                <div><a href="#about-us-section">
                        <p class="footer-content-text-two">About us</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/delivery-information/">
                        <p class="footer-content-text-two">Delivery Information</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/terms-and-conditions/">
                        <p class="footer-content-text-two">Terms & Conditions</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/privacy-policy/">
                        <p class="footer-content-text-two">Privacy Policy</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/refund-policy/">
                        <p class="footer-content-text-two">Refund Policy</p>
                    </a></div>
            </div>
        </div>

        <div class="column three">
            <div class="column-container">
                <div id="column-three-content">
                    <h3>Contact Us</h3>
                </div>
                <div>
                    <p class="footer-content-text-three">Thailand, Ramkhamhaeng road</p>
                </div>
                <div>
                    <p class="footer-content-text-three">+66858576671</p>
                </div>
                <div>
                    <p class="footer-content-text-three">office@libidiol.com</p>
                </div>
            </div>

        </div>
        <div class="column four" id="contact-us">
            <div id="column-four-content">
                <div id="bottom-form-header">
                    <h3>Send Your Message</h3>
                </div>

                <div id="input-container-email"><input type="email" name="email" placeholder="Your E-mail"></input></div>
                <div id="input-container-text">
                    <textarea name="message"></textarea>
                </div>
                <div type="submit" name="send" class="putSend" value="Send" id="send-email"><button>Submit</button></div>
            </div>
        </div>

        <!-- Mobile version Useful links content -->
        <div class="column two" id="mobile-version-useful-links">
            <div id="column-two-content">
                <h3>Useful Links</h3>
            </div>
            <div id="column-two-text">
                <div><a href="#about-us-section">
                        <p class="footer-content-text-two">About</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/privacy-policy/">
                        <p class="footer-content-text-two">Privacy Policy</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/refund-policy/">
                        <p class="footer-content-text-two">Refund</p>
                    </a></div>
                <hr class="seperator-hr-element">
                <div><a href="http://custom-theme-website.test/terms-and-conditions/">
                        <p class="footer-content-text-two">Terms & Conditions</p>
                    </a></div>
            </div>
        </div>

    </div>
</footer>

</div>

<?php
wp_footer();
?>


</body>

</html>