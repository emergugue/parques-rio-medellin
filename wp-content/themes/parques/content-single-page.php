<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" >
	<header class="entrada-encabezado">
	<?php if( get_class_narrativas() ): ?>

		<div class="entrada-titulo">
			<h1 class="titulo-principal-custom">
				<span class="text-hidden"><?php the_title(); ?></span>
				<img src="<?php echo get_bloginfo('template_url').'/images/'.get_class_narrativas().'.jpg'; ?>" alt="<?php the_title() ?>">
			</h1>
		</div>
	<?php else: ?>
		<div class="entrada-titulo">
			<h1 class="titulo-principal"><?php the_title(); ?></h1>
		</div>
	<?php endif; ?>
	</header>

	<section class="entrada-contenido">
		<div>
			<!-- Contenido del post -->
			<?php the_content(); ?>
		</div>
	</section>
</article>
