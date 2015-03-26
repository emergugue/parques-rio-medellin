<?php

	/**
	 * 
	 * Widget menu narrativas
	 *
	 * @author Telemedellin
	**/

class Widget_Narrativas extends WP_Widget 
{

	function Widget_Narrativas(){
		parent::__construct( false, 'Widget Nav Menu Narrativas', 
			array('description'=>'Menu donde se listaran elementos corresponiente de concurso narrativas.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetView($args);
	}


	function widgetView($args)
	{
		extract($args);
		echo $before_widget;
		?>

		<nav class"menu-nav">
			<ul>
				<?php 
					$catid = get_category_by_slug('narrativas')->term_id; 

				 	$args = array('cat'=>$catid, 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1' ); 
          			$query = new WP_Query( $args );

          			if ($query->have_posts()) :
          				while ($query->have_posts() ) : $query->the_post();
          		?>	
						<li>
							<a id="nav-post-<?php the_ID(); ?>" href="<?php echo esc_url(get_permalink()) ?>">
								<?php echo get_the_title() ?>
							</a>
						</li>

					<?php endwhile; ?>
				<?php endif; ?>
			</ul>
		</nav>

		<?php
		echo $after_widget;
	}
}