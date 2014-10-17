<?php 
/**
* Archivo encargado de mostrar el post indicado,
* para la categoria de noticias mostrara opciones de
* articulos relaciondos y comentararios.
* 
**/

get_header(); ?>

<header class="page-header">
	<div class="breadcrumbs">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}
		?>
	</div>
</header><!-- .page-header -->


<div id="primary" class="container-fluid">
	<div class="site-content col-sm-8" role="main" >
			<!-- categoria diferente galeria -->
			<?php if (! in_category( 11 ) ): ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content-single', get_post_format() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php else: ?>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'content-single-gallery', get_post_format() ); ?>
					<?php endwhile; ?>
				<?php endif; ?>

			<?php endif; ?>		

		<div>
			<?php dynamic_sidebar( "widget-social" ); ?>
		</div>

	</div>
	
	<div class="sidebar hidden-xs  col-sm-4" >

	</div>

</div><!--primary-->
<?php
get_footer();