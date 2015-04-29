<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,200,300,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,700,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->	

	<!-- estilos y js agregados se encuentran en el archivo de funciones -->
	<?php wp_head(); ?> 

</head>
<body <?php body_class(); ?> >
	<header>
		<div class="container contenedor-header">
			<div class="row header-content">
					<div id="main-logo" class="col-sm-9 col-md-8">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="visible-xs">
							<img src="<?php echo bloginfo('template_url') .'/images/logo-parques-del-rio.png' ?>" alt="">
						</a>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="hidden-xs">
							<img src="<?php echo bloginfo('template_url') .'/images/logo-parques.png' ?>" alt="">
						</a>
					</div>

					<div class="hidden-xs col-sm-3 col-md-4 header-rigth">
						<div class="redes-sociales">
							<ul>
								<li><a href="mailto:parquedelriomedellin@gmail.com" class="mail-header" target="_blank"></a></li>
								<li><a href="https://www.facebook.com/AmigosdelParquedelRioMedellin" class="tw-header" target="_blank"></a></li>
								<li><a href="https://twitter.com/ParquesdelRio" class="fb-header" target="_blank"></a></li>
								<li><a href="https://instagram.com/ParquesdelRio" class="ig-header" target="_blank"></a></li>
								<li><a href="https://www.youtube.com/channel/UCaNo9sd_jhWkdZetXzrKajw" class="yt-header" target="_blank"></a></li>
							</ul>
						</div>
						<div class="alcaldia-header">
							<a href="http://www.medellin.gov.co/irj/portal/medellin" target="_blank">
							</a>
						</div>
					</div>

			</div>

			<?php
				bt2_menu();
			?>
		</div>
	</header>




	<div class="container contenido-principal">
		<?php if ( is_home() ) :?>
			   <div class="bradcrumb"></div>
		<?php endif /*is_home() */?> 
