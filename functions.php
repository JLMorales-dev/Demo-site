<?php
// this loads all style and javascript files
function flexgrid_files() {
    //google fonts
    wp_enqueue_style('', false);

    // main stylesheet
    wp_enqueue_style('main_stylesheet', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'flexgrid_files');

function flexgrid_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
    //add_theme_support('menu');
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'flexgrid_features');


?>

