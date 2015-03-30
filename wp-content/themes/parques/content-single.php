<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" >
	<header class="entrada-encabezado">
		<div class="entrada-fecha">
			<time><?php echo get_the_date() ?></time>
		</div>

		<div class="entrada-titulo">
			<h1 class="titulo-principal"><?php the_title(); ?></h1>
		</div>
	</header>

	<section class="entrada-contenido">
		<div>
			<!-- Contenido del post -->
			<?php the_content(); ?>
		</div>
	</section>
</article>
