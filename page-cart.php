<?php
get_header();
?>

<body>
    <div class="container main-wrapper container-mobile">
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

</body>

<?php
get_footer();
?>