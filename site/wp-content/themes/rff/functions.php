<?php

function rff_register_menus() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}

add_action('init', 'rff_register_menus');
