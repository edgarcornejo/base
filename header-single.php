<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>

    <meta name="distribution" content="global"/>
    <meta name="author" content="Edgar Cornejo Cahuana" />
    <meta name="designer" content="Edgar Cornejo"/>
  </head>
  
  <body>
    <aside id="main-aside">
      <hgroup>
        <a href="https://aht.cl/" title="AHT"><img itemprop="logo" id="logo-aht" src="<?php echo get_template_directory_uri(); ?>/static/img/aht.png" alt="AHT"/></a>

        <h1><?php bloginfo('name'); ?></h1>
        <h2><?php bloginfo('description'); ?></h2>
      </hgroup>

      <nav>
        <ul class="main-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
        </ul>
      </nav>

      <p id="contacto">
      <strong>Agente Comercial Chile:</strong></br>
      Andrés Torres</br>
      andres.torres@aht.cl</br>
      Teléfono: +56 41 318 2438</br>
      Celular: +56 9 3075 4037 </br></br>

      <strong>Agente Comercial Perú:</strong></br>
      Francisco Yañez</br>
      francisco.yanez@aht.com.pe</br>
      Celular: +51 940 200 394</p>
    </aside>