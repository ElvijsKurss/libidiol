<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php
        // Loop through each section
        while (have_posts()) :
            the_post();
        ?>
            <section id="section-<?php the_ID(); ?>" class="custom-section">
                <div class="section-content">
                    <h2><?php the_title(); ?></h2>
                    <div class="section-post">
                        <?php the_content(); ?>
                    </div>
                    <?php
                    $image = get_field('section_image');
                    $background = get_field('section_background');
                    ?>
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                </div>
                <div class="section-background" style="background-image: url('<?php echo $background; ?>');"></div>
            </section>
        <?php endwhile; ?>
    </main>
</div>

<?php
get_footer();
