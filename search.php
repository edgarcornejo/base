<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Búsqueda -->
<p class="categ">Resultados de búsqueda para <strong><?php echo get_search_query() ?></strong></p>
<!-- Listado de posts -->
<?php if ( have_posts() ) : ?>

  <section id="main-wrapper">
    <?php while ( have_posts() ) : the_post(); ?>
      <article>
        <header>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <address>Por <?php the_author_posts_link() ?></address>
          <time datatime="<?php the_time('Y-m-j'); ?>"> el <?php the_time('j F, Y'); ?></time>
          <?php //the_category (); ?>
        </header>
        <?php the_excerpt(); ?>
      </article>
    <?php endwhile; ?>
    <div class="pagination">
      <span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
      <span class="in-right"><?php previous_posts_link('Entradas más recientes »'); ?></span>
    </div>
  </section>
  
  <?php else : ?>
  <p><?php _e('Ups!, no hay entradas.'); ?></p>
  <?php endif; ?>

  <!-- Archivo de barra lateral por defecto -->
  <?php get_sidebar(); ?>

  <!-- Archivo de pié global de Wordpress -->
  <?php get_footer(); ?>