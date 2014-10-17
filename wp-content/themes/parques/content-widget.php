<article id="post-<?php the_ID(); ?>" role="article" class="article">
	<header>
		<time><?php echo get_the_date() ?></time>
		<figure class="image-article">
			<a href="<?php esc_url(the_permalink()) ?>" >
				<?php the_post_thumbnail( 'thumbnail' ) ?>
			</a>
		</figure>
	</header>
	<section >
		<h3 class="title-article2"> <?php echo get_the_title() ?> </h3>
	</section>
	<footer class="footer-article">
		<a href="<?php esc_url(the_permalink()) ?>" class="link-leer-mas" >
			<div class="leer-mas">
				Leer toda la noticia
			</div>
		</a>
	</footer>
	
</article><!-- end article -->