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
	add_image_size( 'parques-full-width', 1038, 576, true );
	add_image_size( 'thumbnails-home', 9999, 500, false );

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
			'before_widget' => '<div id="%1$s" class="col-sm-4">',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-social',
			'name'			=> "widget-social",
			'description'	=> 'Contenido para las redes sociales',
			'before_widget' => '<div id="%1$s" class="widget-social" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-gallery',
			'name'			=> "widget-gallery",
			'description'	=> 'widget para el plugin de galerias',
			'before_widget' => '<div  class="widget-gallery" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-banner',
			'name'			=> "widget-banner",
			'description'	=> 'Banner para parques del rio.',
			'before_widget' => '<div id="widget-banner" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-home',
			'name'			=> "widget-home",
			'description'	=> 'Contenido relacionado con articulos del sitio.',
			'before_widget' => '<div id="widget-home" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-progreso',
			'name'			=> "widget-progreso",
			'description'	=> 'Widget con barra de progreso del proyecto.',
			'before_widget' => '<div id="widget-progreso" class="hidden-xs" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'widget-categorias',
			'name'			=> "widget-categorias",
			'description'	=> 'Widget con categorías del proyecto.',
			'before_widget' => '<div id="widget-categorias" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'sidebar',
			'name'			=> "sidebar",
			'description'	=> 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget-%1$s" >',
			'after_widget'  => '</div>',
		)
	);

	register_sidebar( 
		array(
			'id'    		=> 'nav-menu-narrativa',
			'name'			=> "nav-menu-narrativa",
			'description'	=> 'Sidebar',
			'before_widget' => '<div id="%1$s" class="widget-%1$s" >',
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
 * scripts comunes en todo el sitio -
 * basicamente utizados para implementar el estilo por defecto
 * style.css y los estilos de boostrap
 * utilizalos con responsabilidad.
 *
 **/
function parques_styles()
{ 
	// add general style
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css',array(),'3.0.2' );

	// add css bootstrap
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap.min.css',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap-theme.min.css',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-map', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap.css.map',array(),'3.0.2' );
	wp_enqueue_style( 'bootstrap-theme-map', get_template_directory_uri().'/bootstrap-3.2.0/css/bootstrap-theme.css.map',array(),'3.0.2' );
} 
add_action( 'wp_enqueue_scripts', 'parques_styles' );


/**
 * scripts utilizados globalmente.
 * No incluyas scripts que sean comunes para el sitio.
 * intenta siempre incluirlos al final.
 * utilizalos con responsabilidad.
 *
 **/
function parques_scripts()
{ 
	//add jquery
	wp_enqueue_script('jquery','/wp-includes/js/jquery/jquery.js',false,'1.11.0',true);

	//add scripts boostrap , con la opcion de cargar al final.
	wp_enqueue_script('bootstrap.min', get_template_directory_uri().'/bootstrap-3.2.0/js/bootstrap.min.js',false,'3.2.0',true);

	//scripts genericos de la aplicacion
	wp_enqueue_script('script', get_template_directory_uri().'/js/script.js',false,'1.0',true);
} 
add_action( 'wp_enqueue_scripts', 'parques_scripts' );

/**
* Funcion que inicia los widgets , se debe incluir la clase 
* que contiene el widget continuacion para luego registrarlos
*
**/

function parquesWidgets()
{
	//add classes
	include_once(TEMPLATEPATH.'/widgets/widgettexto.php');
	include_once(TEMPLATEPATH.'/widgets/widget-social.php');
	include_once(TEMPLATEPATH.'/widgets/widget-home.php');
	include_once(TEMPLATEPATH.'/widgets/widget-progreso.php');
	include_once(TEMPLATEPATH.'/widgets/widget-categorias.php');
	include_once(TEMPLATEPATH.'/widgets/widget-banner.php');
	include_once(TEMPLATEPATH.'/widgets/widget-timelines.php');
	include_once(TEMPLATEPATH.'/widgets/widget-flickr.php');
	include_once(TEMPLATEPATH.'/widgets/nav-menu-narrativas.php');

	//add widget
 	register_widget( 'Widget_Texto' );
 	register_widget( 'Widget_Social' );
 	register_widget( 'Widget_Home' );
 	register_widget( 'Widget_Progreso' );
 	register_widget( 'Widget_Categorias' );
 	register_widget( 'Widget_Banner' );
 	register_widget( 'Widget_Timelines' );
 	register_widget( 'Widget_Flickr' );
 	register_widget( 'Widget_Narrativas' );


}
add_action( 'widgets_init', 'parquesWidgets' );




/**
* bt_pagination
* Funcion para crear paginado adaptado al estilo de boostrap
*
* @version  1.0
* @author Pablo Martínez
*/
function bt_pagination() 
{
	$prev_arrow = is_rtl() ? '&laquo;' : '&laquo;';
	$next_arrow = is_rtl() ? '&raquo;' : '&raquo;';

	global $wp_query;
	$curr 	= get_query_var('paged');
	settype($curr, "int"); 

	$total 	= $wp_query->max_num_pages;
	$big = 999999999;
	if( $total > 1 )  
	{
		if( !$current_page = $curr )
		{
			$current_page = 1;
		}
		if( get_option('permalink_structure') ) 
		{
			$format = 'page/%#%/';
		} else 
		{
			$format = '&paged=%#%';
		}

		$pag = paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, $curr ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
				) );

		$replace = str_replace("<li><span class='page-numbers current'>","<li class='active'><span class='page-numbers current'>", $pag );
		$replace = str_replace( "<ul class='page-numbers'>", '<ul class="pagination">', $replace );

		echo $replace;
	}
}

/**
 * getSubcategories
 *
 * Permite obtener subcategorias dependiendo
 * de una categoria padre.
 *
 * @param codigo de la categoria padre, extraido generalmente con esta funcion
*		  get_cat_ID( single_cat_title("", false) ); 
 * @return array
 * @author Pablo Martínez
 **/
function getSubcategories($parent)
{
	settype($parent, 'int');

	$args = array(
		'orderby' => 'id',
		'parent'  => $parent
		);

	$categories = get_categories( $args );

	if($categories == NULL || count($categories) == 0 )
	{
		return NULL;
	}

	return $categories;
}

/* Adición de skin personalizado para el slider /**/
add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
      $skins['parques'] = array(
           'label' => 'Parques',
           'path' => get_bloginfo('template_url') . '/new-royalslider/parques/parques.css'
      );
      return $skins;
}