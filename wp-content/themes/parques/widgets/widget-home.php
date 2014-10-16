<?php

	/**
	 * Widger para contenidos de articulos del sitio.
	 *
	 * @author Telemedellin
	**/

class Widget_Home extends WP_Widget 
{

	function Widget_Home(){
		parent::__construct( false, 'Widget Home Parques del rio', 
			array('description'=>'Wiget con articulos del sitio web.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetViewPost($args);
	}


	function widgetViewPost($args)
	{
		extract($args);
		echo $before_widget;

		$args = array('cat'=>'2', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '3' );
		$the_query = new WP_Query($args);
		?>

		<?php if( $the_query->have_posts() ): 
				while ( $the_query->have_posts() ) : $the_query->the_post()
		?>
				<div class="content-main">
					<?php get_template_part( 'content-widget',get_post_format() ); ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>

		<?php
		echo $after_widget;
	}
}