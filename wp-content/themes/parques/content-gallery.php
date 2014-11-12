<a id="post-<?php the_ID(); ?>" class="col-sm-4" href="<?php esc_url(the_permalink()) ?>">
	<article  class="gallery">
		<header>
			<time><?php echo get_the_date() ?></time>
			<figure class="image-article">
					<?php the_post_thumbnail( 'medium' ) ?>
			</figure>
		</header>
		<section >
			<h3 class="title-article"> <?php echo get_the_title() ?> </h3>
		</section>
	</article><!-- end article -->
</a>