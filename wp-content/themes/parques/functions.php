<?php
/**
* Funciones del tema parques,
* estas funciones solo sirven para este tema,
*
*  For more information on hooks, actions, and filters,
*  @link http://codex.wordpress.org/Plugin_API
*  los metodos genericos se pueden definir aqui para ser utilizado 
* en cualquier momento.
*
**/

function parques_setup()
{
	// Enable support for Post Thumbnails, and declare two sizes.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 672, 372, true );
	add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	// Usamos el nav_menu
	register_nav_menu( 'main-menu', 'Menú principal' );
}
// añadimos la funcion parques_setup(), cuando se activa el tema.
add_action( 'after_setup_theme', 'parques_setup' );

/**
 * registra los widgtets del tema , 
 * registre los temas que necesite en esta funcion
 *
 * @return void
 **/
function parques_widget_init()
{

	register_sidebar( 
		array(
			'id'    		=> 'progress-bar',
			'name'			=> 'Barra de progreso',
			'description'	=> 'Barra de progreso que indica el avance del proyecto',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-footer',
			'name'			=> "footer",
			'description'	=> 'footer con la infomacion del contacto en todas las pag',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
		)
	);

}
add_action( 'widgets_init', 'parques_widget_init' );


/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function parques_wp_title( $title, $sep ) 
{
	global $paged, $page;

	if ( is_feed() ) 
	{
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) 
	{
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'parques' ), max( $paged, $page ) );
	}

	return $title;
}

add_filter( 'wp_title', 'parques_wp_title', 10, 2 );

/**
 * scrips comunes en todo el sitio -
 * basicamente utizados para implementar el estilo por defecto
 * style.css y los estilos de boostrap
 * utilizalos con responsabilidad.
 *
 **/
function parques_styles()
{ 
	// add general style
	wp_enqueue_style( 'style', get_template_directory_uri().'style.css',array(),'3.0.2' );

	// add css bootstrap
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap.min.css',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap-theme.min.css',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-map', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap.css.map',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-theme-map', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap-theme.css.map',array(),'3.0.2' );
} 
add_action( 'wp_enqueue_scripts', 'parques_styles' );


/**
 * scrips utilizados globalmente.
 * No incluyas scrips que sean comunes para el sitio.
 * intenta siempre incluirlos al final.
 * utilizalos con responsabilidad.
 *
 **/
function parques_scripts()
{ 
	//add scrips boostrap , con la opcion de cargar al final.
	wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/bootstrap-3.2.0/js/bootstrap.min.js',false,'3.2.0',true);
} 
add_action( 'wp_enqueue_scripts', 'parques_scripts' );


?>
