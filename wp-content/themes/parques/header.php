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
	<header class="container">
		<div class="row header-content">
				<div id="main-logo" class="col-sm-9">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="visible-xs">
						<img src="<?php echo bloginfo('template_url') .'/images/logo-parques-del-rio.png' ?>" alt="">
					</a>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="hidden-xs">
						<img src="<?php echo bloginfo('template_url') .'/images/logo-parques.png' ?>" alt="">
					</a>
				</div>

				<div class="hidden-xs col-sm-3 header-rigth">
					<div class="redes-sociales">
						<ul>
							<li><a href="mailto:emerson.gutierrez@telemedellin.tv" class="mail-header" target="_blank"></a></li>
							<li><a href="https://twitter.com/ParqRioMedellin" class="tw-header" target="_blank"></a></li>
							<li><a href="https://www.facebook.com/AmigosdelParquedelRioMedellin" class="fb-header" target="_blank"></a></li>
						</ul>
					</div>
					<div class="alcaldia-header">
						<a href="http://www.medellin.gov.co/irj/portal/medellin" target="_blank">
						</a>
					</div>
				</div>

		</div>

		<nav id="menu-principal" class="navbar navbar-default" role="navigation">
			 <div>
			 	<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#barra-inicio">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				  </button>
				  <span class="hidden-sm hidden-md hidden-lg navbar-brand collapsed" data-toggle="collapse" data-target="#barra-inicio" >Menú</span>
				</div>

			 	<!-- Collect the nav links, forms, and other content for toggling -->
    			<div class="collapse navbar-collapse row-fluid" id="barra-inicio">
				 	<?php
				 	
						wp_nav_menu(
									array(
										'theme_location' => 'main-menu',
										'menu_class' => 'nav navbar-nav col-sm-8' 
										)
									); 
					
					?>
					<form id="form-search" class="navbar-form navbar-right col-sm-" role="search">
		        		 <?php get_search_form(); ?>
		      		</form>	

				</div><!--end navbar-collapse -->

			 </div><!-- end container-fluid -->
		</nav>

	</header>




	<div class="container contenido-principal">
		<?php if ( is_home() ) :?>
			   <div class="bradcrumb"></div>
		<?php endif /*is_home() */?> 
