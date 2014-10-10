<a id="post-<?php the_ID(); ?>" role="article" class="<?php echo $category->slug ?> sublink col-sm-4" 
	href="<?php esc_url(the_permalink()) ?>">

	<article class="subcategory">
		<header class="subcategory-header">
			<h2><?php echo get_the_title() ?></h2>
		</header>
		<section> 
			<div class="subcategory-layer2">
				<h2><?php echo get_the_title() ?></h2>
			</div>
		</section>
	</article>
</a>
