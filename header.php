<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

    <header id="masthead" class="site-header">
      <nav id="site-navigation" class="main-navigation">
        <a class="site-title" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></li>
        <div id="burger-menu" class="burger__nav transition">
          <ul>
            <img class="burger-logo floating" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/burger-logo.png'; ?>" alt="logo Fleurs d'oranger & chats errants">
            <li class="titleAnim1"><a class="burger__link" href="#story">Histoire</a></li>
            <li class="titleAnim1"><a class="burger__link" href="#characters">Personnages</a></li>
            <li class="titleAnim1"><a class="burger__link" href="#place">Lieu</a></li>
            <li class="titleAnim1"><a class="burger__link" href="#studio">Studio Koukaki</a></li>
            <span class="burger-footer"><a href="<?php echo esc_url(home_url('/')); ?>">Studio Koukaki</a></span>
          </ul>
          <img class="orchid-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Orchid.png'; ?> " alt="orchidée violette">
          <img class="chat-violet-menu floating" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Kawaneko2.png'; ?> " alt="chat violet">
          <img class="sunflower-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Sunflower.png'; ?> " alt="marguerite">
          <img class="random-flower-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/random_flower.png'; ?> " alt="fleur rose et jaune">
          <img class="orange-flower-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/flower.png'; ?> " alt="fleur orange">
          <img class="chat-noir-menu floating" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Jaakuna-2.png'; ?> " alt="chat noir">
          <img class="chat-orange-menu floating" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Orenjiiro-2.png'; ?> " alt="chat orange">
          <img class="orange-orchid-menu" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/hibiscus_footer.png'; ?> " alt="orchidée orange">
        </div>
        <div id="icon" class="burger__btn">
          <span class="line1"></span>
          <span class="line2"></span>
          <span class="line3"></span>
        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->