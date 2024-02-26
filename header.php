<!DOCTYPE html>
<html lang="en">

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/logo.png">
<?php
wp_head();
?>

</head>
<header class="header text-center" id="home">
    <nav class="navbar navbar-expand-lg navbar-dark main-wrapper container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navigation" class="main-wrapper collapse">
            <div id="nav-bar-logo">
                <a href="http://custom-theme-website.test/">
                    <img class="top-logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo" />
                </a>
            </div>

            <div id="nav-bar-categories">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav" >%3$s</ul>'
                    )
                );
                ?>
            </div>

            <div class="mobile-contact-us-container">
                <div><a href="#">
                        <p class="header-content-text-mobile">Thailand, Ramkhamhaeng road</p>
                    </a></div>
                <div><a href="#">
                        <p class="header-content-text-mobile">+66858576671</p>
                    </a></div>
                <div><a href="#">
                        <p class="header-content-text-mobile">office@libidiol.com</p>
                    </a></div>

            </div>

            <div class="mobile-social-icons-container">
                <ul class="mobile-social-icons-container-content">
                    <li class="footer-icons"><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                    <li class="footer-icons"><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                    <li class="footer-icons"><a href="#"><i class="fab fa-pinterest" aria-hidden="true"></i></a></li>
                    <li class="footer-icons"><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>

            <div id="nav-bar-icons">
                <!-- <ul class="social-list">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><img src="wp-content/themes/libidiol/master-template/assets/images/euro.png"></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><img src="wp-content/themes/libidiol/master-template/assets/images/language.png"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="wp-content/themes/libidiol/master-template/assets/images/search-symbol.png"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="wp-content/themes/libidiol/master-template/assets/images/basket.png"></a></li>
                </ul> -->
                <ul class="social-list">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="icon-euro menu-icon"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="icon-language menu-icon"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-search menu-icon"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="icon-shopping-basket menu-icon"></i></a></li>
                </ul>
            </div>
            <div class="head-button-container">
                <div class="head-button-body"><a href="#order-now-section" class="header-button-link">Order now</a></div>
            </div>
        </div>
    </nav>

</header>