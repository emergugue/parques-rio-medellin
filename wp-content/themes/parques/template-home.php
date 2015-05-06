<?php
/*
Template Name: home
*/
?>
<?php get_header(); ?>

<header class="page-header">
	<div class="breadcrumbs">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}
		?>
	</div>
</header><!-- .page-header -->

<div id="primary" role="main">

	<div >
		<!-- Contenido de la pagina -->
		<?php the_content(); ?>
	</div>

</div><!-- #primary -->

<?php get_footer();