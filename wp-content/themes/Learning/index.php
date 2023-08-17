<?php
get_header();

echo "Default Template";

if (have_posts()) : ?>
    <?php while (have_posts()) : the_post();
        the_title();
        the_content();
    ?>

    <?php endwhile; ?>
<?php endif;
get_footer();
?>