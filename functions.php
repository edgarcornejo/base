<?php

/**
 * Crear nuestros menús gestionables desde el 
 * administrador de Wordpress.
 */

function mis_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
    )
  );
}
add_action( 'init', 'mis_menus' );

/**
 * Crear una zona de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
 
function mis_widgets(){
  register_sidebar(
    array(
    	'name'          => __( 'Sidebar' ),
    	'id'            => 'sidebar',
    	'before_widget' => '<menu class="widget">',
    	'after_widget'  => '</menu>',
    	'before_title'  => '<h3>',
    	'after_title'   => '</h3>',
    )
  );
}

add_action('init','mis_widgets');
/**
 * Filtrar resultados de búsqueda para que solo muestre 
 * posts en el listado
 */

function buscar_solo_posts($query) {
  if($query->is_search) {
    $query->set('post_type','post');
  }
  return $query;
}
add_filter('pre_get_posts','buscar_solo_posts');

/*Quitar*/
remove_action( 'wp_head', 'wp_resource_hints', 2 );
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action('wp_head', 'wp_generator');