<?php
// Template Name: Jobs

$jobs = new WP_Query([
    'post_type' => 'jobs',
    'post_status' => 'publish'
]);
if ($jobs->have_posts()) {
    while ($jobs->have_posts()) {
        $jobs->the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <a href="<?= get_permalink(get_the_ID()); ?>">View Post</a>
        <hr>
<?php

    }
    wp_reset_postdata();
}
