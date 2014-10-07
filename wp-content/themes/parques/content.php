<article id="post-<?php the_ID(); ?>" role="article" class="article">
	<header>
		<time><?php echo get_the_date() ?></time>
		<figure class="image-article">
			<a href="<?php esc_url(the_permalink()) ?>" >
				<img src="" alt="">
				<?php the_post_thumbnail( 'medium' ) ?>
			</a>
		</figure>
	</header>
	<section>
		<h2 class="title-article"> <?php echo get_the_title() ?> </h2>
		<span>
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
		</span>
		<div class="leer-mas">
			<a href="<?php esc_url(the_permalink()) ?>" class="link-leer-mas" >Leer toda la noticia</a>
		</div>

	</section>
	
</article><!-- end article -->