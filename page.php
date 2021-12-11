<!-- Archivo de cabecera gobal de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
<div id="wrapper">
  <section id="main-content">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>

    <?php endif; ?>
    <!-- Archivo de barra lateral por defecto -->
    <?php get_sidebar(); ?>
    <!-- Archivo de pié global de Wordpress -->
    <?php get_footer(); ?>
  </section>
</div>