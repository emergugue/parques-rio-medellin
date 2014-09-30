<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
	<title><?php wp_title( "-" ); ?> </title>
	<meta name="description" content="<?php bloginfo( "description" ); ?>">
	<?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="logo"></div>
		<div class="redes-sociales"></div>
		<nav><?php wp_nav_menu(
			array(
				'theme_location' => 'main-menu'
				)
		); ?> </nav>
	</header>
	<div class="contenido-principal">
		<?php if ( is_home() ) :?>
			   <div class="bradcrumb"></div>
		<?php endif /*is_home() */?> 
