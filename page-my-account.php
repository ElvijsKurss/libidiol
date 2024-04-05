<?php
get_header();

$loginClass = "";
if (!is_user_logged_in()) {
    $loginClass = " login";
}
?>

<body>
    <div class="container main-wrapper container-mobile">
        <div class="full-view-background-mobile">

            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <h1 class="custome-page-header"><?php the_title(); ?></h1>
                    <div class="additional-custome-page-paragraph<?= $loginClass ?>"><?php the_content(); ?></div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>

</body>

<?php
get_footer();
?>