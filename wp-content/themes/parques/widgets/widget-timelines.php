<?php

	/**
	 * Widget para los timelines de twitter
	 *
	 * @author Telemedellin
	**/

class Widget_Timelines extends WP_Widget 
{

	function Widget_Timelines(){
		parent::__construct( false, 'Widget timelines', 
			array('description'=>'Widget para los timelines.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetTimelines($args);
	}


	function widgetTimelines($args)
	{
		extract($args);
		echo $before_widget;

		?>
		<div class="timelines">
			<div class="timeline-twitter">
				<!-- embebido -->
			 	  <a class="twitter-timeline"  href="https://twitter.com/ParqRioMedellin" data-widget-id="530028981425172480">Tweets por @ParqRioMedellin</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="facebook">
				<div class="fb-like-box" data-href="https://www.facebook.com/AmigosdelParquedelRioMedellin" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="true" data-show-border="true"></div>
			</div>
		</div>	
		<?php
		echo $after_widget;
	}
}