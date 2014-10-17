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
		<h2 class="titulo-principal">Conoce el proyecto</h2>
		<?php
		$catCod 	= 3;
		$categories = getSubcategories($catCod);
		?>
		<div class="categorias">
				<div id="primary" class="container-fluid" role="main">
					<div class="content-main row">
						<?php if( $categories ): ?>

							<?php foreach ($categories as $key => $category): ?>
								<a id="cat-<?php echo $category->cat_ID ?>"
									class="<?php echo $category->slug ?> categoria sublink col-sm-4" 
									href="<?php echo get_category_link($category->cat_ID) ?>">
										<h2><?php echo $category->name ?></h2>
										<div class="subcategory-layer2"></div>
								</a>

							<?php endforeach; ?>

						<?php endif; ?>	
					</div>	

				</div><!-- #primary -->
		</div>	
		<?php
		echo $after_widget;
	}
}