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
            <div class="mobile-cart-container">
                <ul class="social-list">
                    <li class="list-inline-item" id="cart-icon">
                        <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon-link">
                            <i class="icon-shopping-basket menu-icon"></i>
                            <?php
                            $cart_count = WC()->cart->get_cart_contents_count();
                            if ($cart_count > 0) {
                                echo '<span class="cart-count-mobile"><span class="cart-count-inner">' . $cart_count . '</span></span>';
                            }
                            ?>
                        </a>
                    </li>
                    <li class="list-inline-item" id="account-icon">
                        <a href="http://libidiol.com/my-account/">
                            <i class="fa fa-user menu-icon" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <a class="navbar-brand" href="http://libidiol.com">
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

                <div id="nav-bar-icons">
                    <ul class="social-list">
                        <li class="list-inline-item">
                            <a href="#" class="language-link"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="icon-language menu-icon"></i></a>
                            <div class="hidden-content">
                                <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                            </div>
                        </li>
                        <li class="list-inline-item" id="cart-icon">
                            <a href="<?php echo wc_get_cart_url(); ?>" class="cart-icon-link">
                                <i class="icon-shopping-basket menu-icon"></i>
                                <?php
                                $cart_count = WC()->cart->get_cart_contents_count();
                                if ($cart_count > 0) {
                                    echo '<span class="cart-count"><span class="cart-count-inner">' . $cart_count . '</span></span>';
                                }
                                ?>
                            </a>
                            <div class="header-cart-content hidden">
                                <?php echo do_shortcode('[woocommerce_cart]'); ?>
                            </div>
                        </li>
                        <li class="list-inline-item" id="account-icon">
                            <a href="http://libidiol.com/my-account/">
                                <i class="fa fa-user menu-icon" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>


                <div class="head-button-container">
                    <div class="head-button-body"><a href="http://libidiol.com/shop/" class="header-button-link">Order now</a></div>
                </div>
            </div>
        </nav>
    </header>