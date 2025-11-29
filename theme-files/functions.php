<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function custom_post_name () {
return array(
'feeds' => true,
'slug' => 'apps',
'with_front' => false,
);
}
add_filter( 'et_project_posttype_rewrite_args', 'custom_post_name' );