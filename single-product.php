<?php
get_header();
?>

<body>
    <div class="container main-wrapper">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>
                <h1 class="custome-page-header"><?php the_title(); ?></h1>
                <div class="custome-page-paragraph"><?php the_content(); ?></div>
        <?php
            endwhile;
        endif;
        ?>
    </div>

    <?php
    if (is_singular('product')) {
        $product_id = get_the_ID();
        $product = wc_get_product($product_id);
        if ($product) {
    ?>
    <?php
        }
    }
    ?>
</body>

<?php
get_footer();
?>