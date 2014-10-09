<?php

	/**
	 * Widget marca telemedellin para poner las redes sociales, en cualquier contenedor.
	 *
	 * @author Telemedellin
	**/

class Widget_social extends WP_Widget 
{

	function Widget_Social(){
		parent::__construct( false, 'Widget redes sociales', 
			array('description'=>'Widget con los scrips de las redes sociales.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetSocial($args);
	}


	function widgetSocial($args)
	{
		extract($args);
		echo $before_widget;
		?>

		<div class="googlepĺus item-social col-xs-4">
			<div class="g-plus" data-action="share" ></div>
		</div>

		<div class="facebook item-social col-xs-4">
			<div class="fb-share-button" ></div>
		</div>

		<div class="twitter item-social col-xs-4">
			<a class="twitter-share-button" href="https://twitter.com/share">Tweet</a>
		</div>

		<?php
		echo $after_widget;
	}
}