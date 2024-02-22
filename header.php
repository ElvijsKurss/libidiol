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
    <nav class="navbar navbar-expand-lg navbar-dark main-wrapper">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <!--<button class="navbar-toggler" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">-->
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- /* collapse show class makes it work semi-fine*/ -->
        <div id="navigation" class="main-wrapper">
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

            <div id="nav-bar-icons">
                <ul class="social-list">
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><img src="wp-content/themes/libidiol/master-template/assets/images/euro.png"></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fa fa-chevron-down" aria-hidden="true"></i><img src="wp-content/themes/libidiol/master-template/assets/images/language.png"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="wp-content/themes/libidiol/master-template/assets/images/search-symbol.png"></a></li>
                    <li class="list-inline-item"><a href="#"><img src="wp-content/themes/libidiol/master-template/assets/images/basket.png"></a></li>
                </ul>
            </div>
            <div class="head-button-container">
                <div class="head-button-body"><a href="#order-now-section" class="header-button-link">Order now</a></div>
            </div>
        </div>

    </nav>
</header>