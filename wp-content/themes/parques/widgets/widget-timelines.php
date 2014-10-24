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
			 	<a class="twitter-timeline"  href="https://twitter.com/PabloPalillo" data-widget-id="525733523894718465">Tweets por @PabloPalillo</a>
            	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			</div>
			<div class="facebook">
			</div>
		</div>	

		<?php
		echo $after_widget;
	}
}