<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" >
	<header class="entrada-encabezado-galeria">
		<div class="entrada-fecha">
			<time><?php echo get_the_date() ?></time>
		</div>
		<div class="entrada-titulo">
			<h1><?php the_title(); ?></h1>
		</div>

		<div class="entrada-entradilla">
			<p><?php echo get_the_excerpt(); ?></p>
		</div>


		<div class="linea-entradilla">
		</div>

	</header>

	<section class="entrada-contenido row">
		<div>
			<!-- Contenido del post -->
			<?php the_content(); ?>
		</div>
	</section>
</article>
