<?php 
/**
* Plantilla para mostrar las categorias  anunciadas en cada
* uno de los menus, segun el tipo de articulo seran catalogados aqui
* se dividira en tipo de plantillas dependiendo de la situacion.
* Utilizelo con responsabilidad
* @link http://codex.wordpress.org/Template_Hierarchy
**/

get_header(); ?>

<div id="primary" class="container-fluid">
	<div class="site-content col-sm-8" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
				<?php if (is_category())
						{
						single_cat_title() ;
					 	} elseif (is_tag()) 
					 	{
							single_tag_title();
						} 
						elseif (is_author()) 
						{
							get_the_author_meta('display_name');
						} elseif (is_day()) 
						{
							the_time('l, F j, Y');
						} elseif (is_month()) 
						{
							the_time('F Y');
						} elseif (is_year()) 
						{
							the_time('Y');
						}
				?>
				</h1>
			</header><!-- .page-header -->

			<?php $catCod 	= get_cat_ID( single_cat_title("", false) ); ?>
			<?php if( $catCod == 4 || $catCod == 5 || $catCod == 6):  ?>
					<?php while ( have_posts() ) : the_post() ?>
						<div class="content-main row">
							<?php get_template_part( 'content-category', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>
			<?php else: ?>
				<?php while ( have_posts() ) : the_post() ?>
					<div class="content-main">
						<?php get_template_part( 'content', get_post_format() ); ?>
					</div>
				<?php endwhile; ?>
			<?php endif;  ?>

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
			<h1>no existe contenido relacionado</h1>
		<?php endif; ?>
	</div><!-- #content -->
	<!-- Bloque oculto en moviles. -->
	<div class="sidebar hidden-xs  col-sm-4"></div>

</div><!-- #primary -->
<?php
get_footer();
