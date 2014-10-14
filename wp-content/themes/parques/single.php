<?php 
/**
* Archivo encargado de mostrar el post indicado,
* para la categoria de noticias mostrara opciones de
* articulos relaciondos y comentararios.
* 
**/

get_header(); ?>

<div id="primary" class="container-fluid">
	<div class="site-content col-sm-8" role="main" >

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" >
				<header class="entrada-encabezado">
					<div class="entrada-fecha">
						<time><?php echo get_the_date() ?></time>
					</div>

					<div class="entrada-titulo">
						<h1><?php the_title(); ?></h1>
					</div>
				</header>

				<section class="entrada-contenido row">
					<div>
						<!-- Contenido del post -->
						<?php the_content(); ?>
					</div>
				</section>
			</article>
		<?php endwhile; ?>
		<?php endif; ?>	<!-- end if have_post() -->

		<div>
			<?php dynamic_sidebar( "widget-social" ); ?>
		</div>

	</div>
	
	<div class="sidebar hidden-xs  col-sm-4" >

	</div>

</div><!--primary-->
<?php
get_footer();