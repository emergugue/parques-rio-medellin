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


<div id="primary">
<?php if (! in_category( 'narrativas' ) && ! in_category( 'galerias-narrativa' )  && ! in_category( 'noticias-narrativas' ) ): ?>
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
			<?php if( in_category( 2 ) ): ?>
			<div class="comments"> 
				<?php  echo do_shortcode('[vivafbcomment count="off"]'); ?>
			</div>
			<?php endif; ?>

			<?php dynamic_sidebar( "widget-social" ); ?>
		</div>
	</div>

	<div class="sidebar hidden-xs  col-sm-4" >
		<!-- Bloque oculto en moviles. -->
		<?php dynamic_sidebar('sidebar');?>
	</div>
	
<?php else: ?>

	<div class="sidebar col-sm-3"><?php dynamic_sidebar('nav-menu-narrativa');?></div>
	<div class="site-content col-sm-9" role="main" >
		<!-- categoria diferente galeria -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content-single-page', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<div>
			<?php dynamic_sidebar( "widget-social" ); ?>
		</div>
	</div>


<?php endif; ?>

</div><!--primary-->
<?php
get_footer();
