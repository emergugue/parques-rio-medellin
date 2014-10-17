<a id="post-<?php the_ID(); ?>" role="article" class="<?php echo $category->slug ?> categoria sublink col-sm-4" 
	href="<?php esc_url(the_permalink()) ?>">
		<h2><?php echo get_the_title() ?></h2>
		<div class="subcategory-layer2"></div>
</a>
