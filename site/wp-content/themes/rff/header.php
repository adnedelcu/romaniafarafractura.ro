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
        <div class="logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?= get_template_directory_uri() ?>/img/logo.png"
                 alt="<?php bloginfo('name'); ?>">
          </a>
        </div>

        <div class="social">
          <div class="social-left"></div>

          <div class="social-container">
            <a class="social-icon" href="#">g</a>
            <a class="social-icon" href="#">t</a>
            <a class="social-icon" href="#">f</a>
          </div>

          <div class="social-right"></div>
        </div>
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
