<article id="post-<?php the_ID(); ?>" role="article" class="article row">
	<header>
		<time><?php echo get_the_date() ?></time>
	</header>
	<section>
		<h3 class="title-article"><a href="<?php esc_url(the_permalink()) ?>" > <?php echo get_the_title() ?></a> </h3>
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
		<div class="line-inf col-sm-12"></div>
	</footer>
	
</article><!-- end article -->