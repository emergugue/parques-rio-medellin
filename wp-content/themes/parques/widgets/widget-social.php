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
						<a class="gp-share" target="_blank" href="https://plus.google.com/share?url=<?php echo $url ?>">G+</a>
					</div>
				</div>

				<div class="facebook item-social col-sm-4">
					<div class="share-content">
						<a class="fb-share" target="_blank" href="http://www.facebook.com/sharer/sharer.php?s=100&amp;p[url]=<?php echo $url ?>;p[images][0]=&amp;p[title]=<?php echo wp_title('-', false); ?>&amp;p">Facebook</a>
					</div>
				</div>

				<div class="twitter item-social col-sm-4">
					<div class="share-content">
						<a class="tw-share" target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo $url ?>&amp;text=<?php echo wp_title('-', false); ?>&amp;via=ParquesdelRio">Twitter</a>
					</div>

				</div>
			</div>	
		</div>
		<?php
		echo $after_widget;
	}
}