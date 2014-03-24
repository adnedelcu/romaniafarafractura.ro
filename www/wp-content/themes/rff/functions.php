<?php

function rff_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function rff_register_sidebars() {
  register_sidebar();
}

function rff_widget_class($title) {
    $cls = 'rff-widget-title widget-' . sanitize_title($title);
    return '<span class="' . $cls . '"></span>' . $title;
}

add_action('init', 'rff_register_menus');
add_action('init', 'rff_register_sidebars');
add_action('widget_title', 'rff_widget_class');

add_theme_support('post-thumbnails');
