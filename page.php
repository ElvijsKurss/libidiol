<?php

get_header();

?>

<body>
    <div class="container main-wrapper">
        <h1 class="custome-page-header"><?php the_title(); ?></h1>
    </div>
    <div class=" container main-wrapper">
        <p class="custome-page-paragraph"><?php the_content(); ?></p>
    </div>
</body>

<?php
get_footer();
