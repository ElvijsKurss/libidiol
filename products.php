<?php
get_header();
?>

<body>

    <?php
    // Check if it's a single product page
    if (is_singular('product')) {
        // Get the product ID
        $product_id = get_the_ID();
        // Get product data using WooCommerce functions or custom queries
        $product = wc_get_product($product_id); // Assuming WooCommerce is used
        if ($product) {
    ?>
            <div class="container product-details">
                <h2><?php echo esc_html($product->get_name()); ?></h2>
                <p><?php echo esc_html($product->get_description()); ?></p>
                <p><?php echo esc_html($product->get_price_html()); ?></p>
                <!-- Add more product details as needed -->
            </div>
    <?php
        }
    }
    ?>
</body>

<?php
get_footer();
?>