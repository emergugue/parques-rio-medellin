<?php 
/**
* Plantilla para mostrar las categorias  anunciadas en cada
* uno de los menus, segun el tipo de articulo seran catalogados aqui
* se dividira en tipo de plantillas dependiendo de la situacion.
* Utilizelo con responsabilidad
* @link http://codex.wordpress.org/Template_Hierarchy
**/

get_header(); ?>

<?php
/* para decidir si es plantilla tipo 1 o tipo 2 */
$catCod 	= get_cat_ID( single_cat_title("", false) ); 
$col 		= "";
$widgetArea = true;

if( in_category( array(4,5,6,8,9) ) ) 
{
	$widgetArea = false;
}
else
{
	$col = "col-sm-8";
}
?>

<div id="primary" class="container-fluid">
	<div class="site-content <?php echo $col ?>" role="main">

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

			<?php if( !$widgetArea ):  ?>
					<?php while ( have_posts() ) : the_post() ?>
						<div class="content-main">
							<?php get_template_part( 'content-category', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>
			<?php else: ?>

				<!-- caregoria: galerias -->
				<?php if( in_category(11)): ?>

					<?php while ( have_posts() ) : the_post() ?>
						<div class="content-main">
							<?php get_template_part( 'content-gallery', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>

				<?php else: ?>
					<?php while ( have_posts() ) : the_post() ?>
						<div class="content-main">
							<?php get_template_part( 'content', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>
				<?php endif;  ?>
			<?php endif; ?>	

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

	<?php if( $widgetArea): ?>
		<!-- Bloque oculto en moviles. -->
		<div class="sidebar hidden-xs  col-sm-4"><?php dynamic_sidebar('sidebar');?></div>
	<?php endif; ?>	

</div><!-- #primary -->
<?php
get_footer();
