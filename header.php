<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libidiol</title>
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
                    <li class="list-inline-item mobile-flag">
                        <div class="language-link language-icon-container" id="language-link">
                            <?php
                            $current_language = apply_filters('wpml_current_language', NULL);
                            $languages = apply_filters('wpml_active_languages', NULL, 'skip_missing=0');
                            if (!empty($languages)) {
                                foreach ($languages as $lang) {
                                    if ($lang['language_code'] == $current_language) {

                                        echo '<img src="' . esc_url($lang['country_flag_url']) . '" alt="' . esc_attr($lang['native_name']) . '">';
                                        break;
                                    }
                                }
                            }
                            ?>
                        </div>
                        <div class="hidden-content-mobile" id="language-content">
                            <?php echo do_shortcode('[wpml_language_selector_widget]'); ?>
                        </div>
                    </li>
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
                    <li class="list-inline-item" id="account-link">
                        <div class="icon-wrapper">
                            <i class="fa fa-user menu-icon" aria-hidden="true"></i>
                            <div class="options show-options">
                                <?php
                                $my_account_page_id = get_option('woocommerce_myaccount_page_id');
                                $my_account_text = __('My Account', 'Libidiol.com');
                                ?>
                                <a href="<?php echo get_permalink($my_account_page_id); ?>"><?php echo esc_html($my_account_text); ?></a>

                                <?php
                                $become_partner_text = __('Partners', 'Libidiol.com');
                                ?>
                                <a href="https://lbd.libidiol.com/" target="_blank"><?php echo esc_html($become_partner_text); ?></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <a href="<?= icl_get_home_url(); ?>">
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
                            <div class="language-link icon-hover-container">
                                <?php
                                $current_language = apply_filters('wpml_current_language', NULL);
                                $languages = apply_filters('wpml_active_languages', NULL, 'skip_missing=0');
                                if (!empty($languages)) {
                                    foreach ($languages as $lang) {
                                        if ($lang['language_code'] == $current_language) {

                                            echo '<img src="' . esc_url($lang['country_flag_url']) . '" alt="' . esc_attr($lang['native_name']) . '">';
                                            break;
                                        }
                                    }
                                }
                                ?>
                            </div>
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
                            <div class="icon-wrapper account-container">
                                <div class="icon-hover-container">
                                    <i class="fa fa-chevron-down account" aria-hidden="true"></i>
                                    <i class="fa fa-user menu-icon" aria-hidden="true"></i>
                                </div>

                                <div class="options" id="account-content">
                                    <?php
                                    $my_account_page_id = get_option('woocommerce_myaccount_page_id');
                                    $my_account_text = __('My Account', 'Libidiol.com');
                                    ?>
                                    <a href="<?php echo get_permalink($my_account_page_id); ?>"><?php echo esc_html($my_account_text); ?></a>

                                    <?php
                                    $become_partner_text = __('Partners', 'Libidiol.com');
                                    ?>
                                    <a href="https://lbd.libidiol.com/" target="_blank"><?php echo esc_html($become_partner_text); ?></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="head-button-container">
                    <div class="head-button-body">
                        <?php
                        $shop_page_url = '';
                        if (function_exists('icl_object_id')) {
                            $shop_page_id = icl_object_id(get_option('woocommerce_shop_page_id'), 'page', false, ICL_LANGUAGE_CODE);
                            $shop_page_url = get_permalink($shop_page_id);
                        } else {
                            $shop_page_url = home_url('/shop/');
                        }
                        ?>
                        <a href="<?php echo esc_url($shop_page_url); ?>" class="header-button-link"><?= __('Order now', 'Libidiol.com') ?></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>