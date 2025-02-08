<!-- Archivo de cabecera global de Wordpress -->
<?php get_header('single'); ?>
<!-- Contenido del post -->
<?php if ( have_posts() ) : the_post(); ?>

  <section id="main-wrapper">
    <article>
      <header>
        <h1><?php the_title(); ?></h1>
        <!--<address>Por <?php //the_author_posts_link() ?></address>
        <time datatime="<?php //the_time('Y-m-j'); ?>"> el <?php //the_time('j F, Y'); ?></time>-->
      </header>
      <?php the_content(); ?>
      <?php //the_category (); ?>
      <!-- Comentarios -->
      <?php //comments_template(); ?>
      <?php else : ?>
      <p><?php _e('Ups!, esta entrada no existe.'); ?></p>
      <?php endif; ?>
    </article>
  </section>

  <!-- Archivo de barra lateral por defecto -->
  <?php get_sidebar(); ?>

  <!-- Archivo de pié global de Wordpress -->
  <?php get_footer(); ?>

  
