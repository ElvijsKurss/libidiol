<?php
get_header();
?>

<body>
    <div class="container main-wrapper">
        <?php
        // Check if it's a WooCommerce shop page
        if (is_shop()) {
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    // Display product information here
                    // You can use the WooCommerce loop or custom query to display products
                    wc_get_template_part('content', 'product'); // WooCommerce product content template
                endwhile;
            endif;
        } else {
            // Display regular page content using the_content()
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
        ?>
                    <h1 class="custome-page-header"><?php the_title(); ?></h1>
                    <div class="custome-page-paragraph"><?php the_content(); ?></div>
        <?php
                endwhile;
            endif;
        }
        ?>
    </div>
</body>

<?php
get_footer();
?>