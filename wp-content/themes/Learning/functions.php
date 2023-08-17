<?php
add_action('wp_head', function () {
?>
    <style>
        /* body {
            background-color: purple;
        } */
    </style>
<?php
}, 11);



add_action('wp_footer', function () {
?>
    <script>
        console.log("Welcome to custom script");
    </script>
<?php

}, 11);
/*
add_action('wp_body_open', function () {
?>
    <h1>Wp Body open</h1>
<?php

});


add_action('demo_content', function () {
?>
    <h1>Wp Body open</h1>
<?php
});
*/
/*
add_filter('body_class', function ($classes) {
    if (is_front_page()) {
        $classes[] = "Manjeet_class";
    }

    return $classes;
});
*/



function wporg_custom_post_type()
{
    register_post_type(
        'jobs',
        array(
            'labels'      => array(
                'name'          => __('Jobs', 'learning'),
                'singular_name' => __('Job', 'learning'),
            ),
            'public'      => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'rewrite'     => array('slug' => 'jobs'), // my custom slug
            'capability_type' => 'post',
        )
    );
}
add_action('init', 'wporg_custom_post_type');
