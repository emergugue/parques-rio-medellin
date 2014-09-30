<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->	

	<meta name="description" content="<?php bloginfo( "description" ); ?>">
	
	<!-- estilos y js agregados se encuentran en el archivo de funciones -->
	<?php wp_head(); ?> 

</head>
<body <?php body_class(); ?> >
	<header>
		<div class="main-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo bloginfo('template_url') .'/images/header.jpg' ?>" alt="">
			</a>
		</div>
		<div class="redes-sociales"></div>

		<nav class="collapse navbar-collapse" id="nav-bar-main">
			<?php 
				wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_class' => 'nav-menu' 
							)
				); ?> 
		</nav>

	</header>

	<div class="contenido-principal">
		<?php if ( is_home() ) :?>
			   <div class="bradcrumb"></div>
		<?php endif /*is_home() */?> 
