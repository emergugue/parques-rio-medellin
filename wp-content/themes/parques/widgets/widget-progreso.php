<?php

	/**
	 * Widget con barra de progreso del proyecto.
	 *
	 * @author Telemedellin
	**/

class Widget_Progreso extends WP_Widget 
{

	function Widget_Progreso(){
		parent::__construct( false, 'Widget Progreso Parques del rio', 
			array('description'=>'Widget con barra de progreso del proyecto.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetViewProgreso($args);
	}


	function widgetViewProgreso($args)
	{
		extract($args);
		echo $before_widget;
		?>
		<h2 class="titulo-avance">Así va el avance del proyecto</h2>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
				<span class="sr-only">20% Completo</span>
			</div>
		</div>
		<?php
		echo $after_widget;
	}
}