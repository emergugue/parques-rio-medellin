<div class="col-sm-3">
	<a id="post-<?php the_ID(); ?>" role="article" class="<?php echo $post->post_name ?> categoria sublink" 
		href="<?php esc_url(the_permalink()) ?>">
			<div class="subcategory-layer2"></div>
			<h2><?php echo get_the_title() ?></h2>
	</a>
</div>