<?php

	/**
	 * Widget para mostrar galerias de flickr, depende de un plugin 
	 * llamado slickr-flickr
	 *
	 * @author Telemedellin
	**/

class Widget_Flickr extends WP_Widget 
{

	function Widget_Flickr(){
		parent::__construct( false, 'Widget slickr-flickr', 
			array('description'=>'Wiget para mostrar galerias de flickr, depende de un plugin .'));
	}

	function widget( $args, $instance )
	{
		$this->widgetViewGallery($args);
	}


	function widgetViewGallery($args)
	{
		extract($args);
		echo $before_widget;
		echo do_shortcode( '[slickr-flickr id="125491706@N04" type="slideshow" size="small"]' );
		echo $after_widget;
	}
}