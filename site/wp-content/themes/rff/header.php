<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"
          rel="stylesheet">
    <meta http-equiv="Content-language"
          content="<?php bloginfo('language'); ?>">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="container">
      <div id="header">
      </div>

      <?php wp_nav_menu(array(
        'theme_location' => 'top_menu',
        'depth' => 1,
        'container' => 'div',
        'container_class' => 'menu',
        'menu_id' => false,
        'menu_class' => false,
        'fallback_cb' => false,
        )); ?>

      <?php wp_nav_menu(array(
        'theme_location' => 'navigation',
        'depth' => 2,
        'container' => 'div',
        'container_class' => 'nav',
        'menu_class' => 'dd',
        'menu_id' => 'dd',
        //'walker' => new extended_walker(),
        'fallback_cb' => false,
        )); ?>

      <div class="row">
        <div class="col-xs-8">
          <div id="maincontent">
