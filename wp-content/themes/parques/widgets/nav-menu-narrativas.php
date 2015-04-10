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

		<nav class="menu-nav">
			<ul>
				<?php 
					$post_act_id = get_single_post_id();
					$catnow		 = get_cat_ID; 

					$catid = get_category_by_slug('narrativas')->term_id; 

				 	$args = array('category__in'=>$catid, 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => '-1' ); 
          			$query = new WP_Query( $args );

          			if ($query->have_posts()) :
          				while ($query->have_posts() ) : $query->the_post();
          				
          				$class = '';
          				if( get_the_ID() == $post_act_id ) $class= 'active';
          		?>	
						<li>
							<a id="nav-post-<?php the_ID(); ?>" class="<? echo $class ?>" href="<?php echo esc_url(get_permalink()) ?>">
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
