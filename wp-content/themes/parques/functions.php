<?php
register_nav_menu( 'main-menu', 'Menú principal' );
register_sidebar( 
	array(
		'name'=> "Barra de progreso",
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
	)
);//Fin del registro del sidebar para el banner-home
register_sidebar( 
	array(
		'name'=> "footer",
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
	)
);//Fin del registro del sidebar para el banner-home
?>
