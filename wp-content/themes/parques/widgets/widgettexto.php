<?php
	/**
	 * Widget marca telemedellin para poner cualquier texto informativo en columnas
	 * funciona con las clases de wordpress 3 para que sea resposive.
	 *
	 * @author Telemedellin
	**/

class Widget_Texto extends WP_Widget 
{

	function Widget_Texto(){
		parent::__construct( false, 'Widget texto Telemedellín', 
			array('description'=>'Este widget permite poner una columna con información,adaptada para moviles.'));
	}

	function widget( $args, $instance )
	{
		$this->widgetTextoView($args, $instance);
	}

	function update( $new_instance, $old_instance )
	{
		$instance 				= $old_instance;
		$instance['titulo'] 	= strip_tags($new_instance['titulo']);
		$instance['texto'] 		= strip_tags($new_instance['texto']);

		return $new_instance;
	}

	function form( $instance )
	{
		$titulo = ( !empty($instance['titulo'] ) ) ? esc_attr($instance['titulo']) : '' ;
		$texto 	= ( !empty($instance['texto'] ) ) ? esc_attr($instance['texto']) : '' ;
		?>
		<div>
			<p>
				<label for="<?php echo $this->get_field_id('titulo'); ?>"><?php _e('titulo:'); ?> 
					<input class="widefat" id="<?php echo $this->get_field_name('titulo'); ?>" 
					name="<?php echo $this->get_field_name('titulo'); ?>" type="text" 
					value="<?php echo $titulo; ?>" 
					/>

				</label>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id('texto'); ?>"><?php _e('texto:'); ?> 
					<input class="widefat" id="<?php echo $this->get_field_name('texto'); ?>"
					name="<?php echo $this->get_field_name('texto'); ?>" type="text" 
					value="<?php echo $texto; ?>" 
					/>
				</label>
			</p>
		</div>
	<?php
	}

	function widgetTextoView($args, $instance)
	{
		extract($args);
		$title = apply_filters('widget_title', $instance['titulo']);
		$texto = apply_filters('widget_title', $instance['texto']);
		/* vista del widget */
		echo $before_widget;
		?>

		<h3 class="wtext-title">	<?php echo $title ?> </h3>
		<span class="wtext-info">
			<p> <?php echo $texto ?> </p>
		</span>

		<?php
		echo $after_widget;
	}
}


