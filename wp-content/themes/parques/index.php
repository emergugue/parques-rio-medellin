<?php
/*
* Index
*/
get_header(); 
?>
<div id="primary" role="main">
	<?php /* Slider Home /**/ ?>
	<?php echo get_new_royalslider(1); ?>
	<?php /* Últimas noticias /**/ ?>
	<?php dynamic_sidebar( "widget-home" ); ?>
	<?php /* Barra de progreso /**/?>
	<?php dynamic_sidebar( "widget-progreso" ); ?>
	<?php /* Categorías /**/?>
	<?php dynamic_sidebar( "widget-categorias" ); ?>
</div><!-- #primary -->
<?php get_footer(); ?>