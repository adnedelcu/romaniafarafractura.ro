<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css"
          rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"
          rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css"
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
            <a class="social-icon" href="#"><i class="fa fa-google-plus"></i></a>
            <a class="social-icon" href="#"><i class="fa fa-twitter"></i></a>
            <a class="social-icon" href="#"><i class="fa fa-facebook"></i></a>
          </div>

          <div class="social-right"></div>
        </div>

        <?php wp_nav_menu(array(
          'theme_location' => 'header-menu',
          'depth' => 1,
          )); ?>
      </div>

      <div class="row">
        <div class="col-xs-8">
          <div id="maincontent">
