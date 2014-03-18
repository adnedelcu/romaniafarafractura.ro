<?php

function rff_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

function rff_register_sidebars() {
  register_sidebar();
}

add_action('init', 'rff_register_menus');
add_action('init', 'rff_register_sidebars');
