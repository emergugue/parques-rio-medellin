<?php $args = "category_name=noticias"; ?>
<?php $proyecto = "category_name=proyecto"; ?>

<?php get_header(); ?>		
	<div class="banner-home">Si hola </div>
	<div class="noticias-home">
		<?php $posts_array = new WP_Query( $args ); ?> 
			<?php if ( $posts_array->have_posts() ) : while ( $posts_array->have_posts() ) : $posts_array->the_post(); ?>
			<?php the_title(); ?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Pailas, no hay post' ); ?></p>
			<?php endif; ?>
	</div>
	<div class="proyecto-home">
		<?php $posts_array = new WP_Query( $proyecto ); ?> 
			<?php if ( $posts_array->have_posts() ) : while ( $posts_array->have_posts() ) : $posts_array->the_post(); ?>
			<?php the_title(); ?>
			<?php endwhile; else : ?>
				<p><?php _e( 'Pailas, no hay post' ); ?></p>
			<?php endif; ?>
	</div>
	<div class="avance-home">
		<?php dynamic_sidebar( "progress-bar" ); ?>
	</div>
<?php get_footer(); ?>	