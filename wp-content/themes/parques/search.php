<?php 
/**
* Plantilla base para mostrar resutados del buscador
* @link http://codex.wordpress.org/Template_Hierarchy
**/

get_header(); ?>

<div id="primary" class="container-fluid">
	<div class="site-content col-sm-8" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="titulo-principal"><?php echo esc_attr(get_search_query()) ?> </h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post() ?>
				<div class="content-main">
					<?php get_template_part( 'content_search', get_post_format() ); ?>
				</div>
			<?php endwhile; ?>

			<div class="pag">
				<?php
				/* paginacion marca telemedellin */
				if ( function_exists( 'bt_pagination' ) ) 
				{
					bt_pagination();
				}
				?>
			</div>

		<?php else : ?>
			<h1>No existe contenido relacionado</h1>
		<?php endif; ?>
	</div><!-- #content -->
	<!-- Bloque oculto en moviles. -->
	<div class="sidebar hidden-xs  col-sm-4">
		<!-- Bloque oculto en moviles. -->
		<?php dynamic_sidebar('sidebar');?>
	</div>

</div><!-- #primary -->
<?php
get_footer();
