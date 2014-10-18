<article id="post-<?php the_ID(); ?>" role="article" class="article article-blog row-fluid">
	<header>
		<time><?php echo get_the_date() ?></time>
		<figure class="image-article">
			<a href="<?php esc_url(the_permalink()) ?>" >
				<?php the_post_thumbnail( 'medium' ) ?>
			</a>
		</figure>
	</header>
	<section >
		<h3 class="title-article"> <?php echo get_the_title() ?> </h3>
		<div>
			<?php
				/**
				* Si tiene entradilla ya sea por cualquiera de los metodos,
				* que pongan el texto en el campo de la entradilla o poniento la etiqueta 'more'
				**/
				if( get_the_excerpt())
				{
					echo get_the_excerpt();
				}
				else
				{
					echo get_the_content('');
				} 
			?>
		</div>
	</section>
	<footer class="footer-article">
		<a href="<?php esc_url(the_permalink()) ?>" class="leer-mas" >
				Leer toda la noticia
		</a>
	</footer>
	
</article><!-- end article -->