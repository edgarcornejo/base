<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="Cache-Control" content="no-store" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/static/img/favicon.svg">

    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>

    <meta name="distribution" content="global"/>
    <meta name="author" content="Edgar Cornejo" />
    <meta name="designer" content="Edgar Cornejo"/>
  </head>
  
  <body>
    <header id="main-header">
      <section>
        <a href="/" id="logo" title="<?php bloginfo('name'); ?>"><img itemprop="logo" src="<?php echo get_template_directory_uri(); ?>/static/img/logo.svg" alt="logo"/></a>

        <div id="main-titles">
          <h1><?php bloginfo('name'); ?></h1>
          <h2><?php bloginfo('description'); ?></h2>
        </div>
        
        <nav id="main-nav"><nav class="main-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
        </nav>
      </section>
    </header>