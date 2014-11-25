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
		$url='http://'.$_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
		echo $before_widget;
		?>
		<div class="linea-color"></div>
		<div class="contenedor-compartir">
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
						<a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $url ?>&amp;text=<?php echo wp_title('-', false); ?>&amp;via=ParquesdelRio"><img src="http://logicum.co/wp-content/uploads/2013/01/TwitterTweet.jpg"></a>
					</div>

				</div>
			</div>	
		</div>
		<?php
		echo $after_widget;
	}
}