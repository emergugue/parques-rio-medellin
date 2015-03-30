<?php
/**
* pagina 404
*/
get_header();
?>

<div id="error-404" class="container-fluid" role="main">
	<article >
		<header>
			<h1>Error 404</h1>
			<figure><img src="<?php echo bloginfo('template_url') .'/images/exclamation.png' ?>" </figure>
		</header>
		<section>
			<p>Lo sentimos la pagina a la que intentas acceder , ya no está disponible </p>
			<p>te invitamos a navegar por nuestro sitio o utilizar el buscador para encontrar
			   la información que necesitas.</p>
		</section>
	</article>
</div><!-- #primary -->
<?php
get_footer();