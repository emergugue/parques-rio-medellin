<?php

	/**
	 * Widget con categorías.
	 *
	 * @author Telemedellin
	**/

class Widget_Categorias extends WP_Widget 
{

	function Widget_Categorias(){
		parent::__construct( false, 'Widget Categorias Parques del rio', 
			array('description'=>'Widget con categorías.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetViewCategorias($args);
	}


	function widgetViewCategorias($args)
	{
		extract($args);
		echo $before_widget;
		?>
		<h2>Conoce el proyecto</h2>
		<?php
		$catCod 	= 3;
		$categories = getSubcategories($catCod);
		?>
		<div class="categorias">
			<?php if( $categories ): ?>
				<?php foreach ($categories as $key => $category): ?>
				<div class="categoria">
					<a id="cat-<?php echo $category->cat_ID ?>" class="<?php echo $category->slug ?> sublink col-sm-4" href="<?php echo get_category_link($category->cat_ID) ?>">
						<h2><?php echo $category->name ?></h2>
					</a>
				</div>
				<?php endforeach; ?>
			<?php endif; ?>	
		</div>	
		<?php
		echo $after_widget;
	}
}