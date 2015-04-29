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
		$this->widgetViewProgreso($args, $instance);
	}

	function update( $new_instance, $old_instance )
	{
		$instance 				= $old_instance;
		$instance['avance'] 	= strip_tags($new_instance['avance']);

		return $new_instance;
	}

	function form( $instance )
	{
		$avance = ( !empty($instance['avance'] ) ) ? esc_attr($instance['avance']) : '' ;
		?>
		<div>
			<p>
				<label for="<?php echo $this->get_field_id('avance'); ?>"><?php _e('avance:'); ?> 
					<input class="widefat" id="<?php echo $this->get_field_name('avance'); ?>" 
					name="<?php echo $this->get_field_name('avance'); ?>" type="text" 
					value="<?php echo $avance; ?>" 
					/>

				</label>
			</p>
		</div>
	<?php
	}



	function widgetViewProgreso($args, $instance)
	{
		extract($args);
		$avance = apply_filters('widget_title', $instance['avance']);
		echo $before_widget;
		?>
		<h2 class="titulo-avance">Así va el avance de Parques del Río Medellín</h2>
		<div class="progress">
			<div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $avance ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $avance ?>%;">
				<span class="sr-only"><?php echo $avance ?>% Completo</span>
			</div>
		</div>
		<a href="<?php echo get_home_url(); ?>/asi-va-el-avance-de-parques-del-rio-medellin" class="btn-progreso">Ver el proyecto</a>
		<?php
		echo $after_widget;
	}
}