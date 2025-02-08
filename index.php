<!-- Archivo de cabecera global de Wordpress -->

<?php 
  if ( is_single() ) : get_header( 'single' );
  else : get_header(); endif; 
?>