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
		<div class="text">
			<span> Compartir </span>
		</div>

		<div class="social-buttons row">
			<div class="googleplus item-social col-sm-4">
				<div class="share-content">
					<div class="g-plus" data-action="share" data-annotation="none" data-height="15"></div>
				</div>
			</div>

			<div class="facebook item-social col-sm-4">
				<div class="share-content">
					<div class="fb-share-button" ></div>
				</div>
			</div>

			<div class="twitter item-social col-sm-4">
				<div class="share-content">
					<a href="https://twitter.com/share" class="twitter-share-button" data-via="parqRioMedellin" data-lang="es" data-count="none" data-dnt="true">Twittear</a>
				</div>

			</div>
		</div>	

		<?php
		echo $after_widget;
	}
}