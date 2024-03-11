<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="main-header text-center" id="home">
        <nav class="navbar navbar-expand-lg navbar-dark main-wrapper container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="http://custom-theme-website.test/">
                <img class="top-logo" src="<?= get_stylesheet_directory_uri() ?>/assets/images/logo.png" alt="logo" />
            </a>

            <div class="mobile-menu collapse navbar-collapse" id="navigation">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul class="navbar-nav mr-auto">%3$s</ul>',
                        'menu_class' => 'navbar-nav mr-auto'
                    )
                );
                ?>

                <div class="mobile-contact-us-container">
                    <div>
                        <p class="header-content-text-mobile">Thailand, Ramkhamhaeng road</p>
                    </div>
                    <div>
                        <p class="header-content-text-mobile">+66858576671</p>
                    </div>
                    <div>
                        <p class="header-content-text-mobile">office@libidiol.com</p>
                    </div>
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
                    <ul class="social-list">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="icon-euro menu-icon"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="icon-language menu-icon"></i></a></li>
                        <!-- <li class="list-inline-item">
                            <a href="#" class="search-icon"><i class="icon-search menu-icon"></i></a>
                        </li> -->
                        <li class="list-inline-item"><a href="#"><i class="icon-shopping-basket menu-icon"></i></a></li>
                    </ul>
                </div>

                <!-- Search Field -->
                <!-- <div id="search-overlay">
                    <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                        <label>
                            <span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
                            <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                        </label>
                        <input type="submit" class="search-submit" value="<?php echo esc_attr_x('Search', 'submit button'); ?>" />
                        <button type="button" class="close-search">X</button>
                    </form>
                </div> -->
                <div class="head-button-container">
                    <div class="head-button-body"><a href="#order-now-section" class="header-button-link">Order now</a></div>
                </div>
            </div>
        </nav>
    </header>




    <?php wp_footer(); ?>
</body>

</html>