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
			<?php if( $categories ): ?>
				<?php foreach ($categories as $key => $category): ?>
				<a id="cat-<?php echo $category->cat_ID ?>" class="<?php echo $category->slug ?> sublink col-sm-4" 
					href="<?php echo get_category_link($category->cat_ID) ?>">

					<article class="subcategory">
						<header class="subcategory-header">
							<h2><?php echo $category->name ?></h2>
						</header>
						<section> 
							<div class="subcategory-layer2">
								<h2><?php echo $category->name ?></h2>
							</div>
						</section>
					</article>
				</a>
				<?php endforeach; ?>
			<?php endif; ?>	
		</div>	
		<?php
		echo $after_widget;
	}
}