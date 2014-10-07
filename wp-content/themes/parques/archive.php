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
		</header><!-- .page-header -->

		<?php
		// Empieza el LOOP, con el contenido segun la plantilla
		while ( have_posts() ) : the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;
		?>
		<div class="pag">
		<?php
			/* paginacion marca telemedellin */
			if ( function_exists( 'bt_pagination' ) ) 
			{
				bt_pagination();
			}
			else
			{
				echo 'que falla home';
			}
			?>
			
		</div>

		<?php
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
	</div><!-- #content -->
	<!-- Bloque oculto en moviles. -->
	<div class="sidebar hidden-xs  col-sm-4">

	</div>
</div><!-- #primary -->
<?php
get_footer();
