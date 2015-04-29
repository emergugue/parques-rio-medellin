<?php
/*
* Pagina
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
	<h1 class="titulo-principal">

		<?php if (is_category() )
		{
			single_cat_title() ;

		} elseif (is_tag()) 
		{
			single_tag_title();
		} 
		elseif (is_page()) 
		{
			the_title() ;

		} elseif (is_day()) 
		{
			the_time('l, F j, Y');
		} elseif (is_month()) 
		{
			the_time('F Y');
		} elseif (is_year()) 
		{
			the_time('Y');
		}
		?>
	</h1>
</header><!-- .page-header -->

<div id="primary" role="main">
	

	<div >
		<!-- Contenido de la pagina -->
		<?php the_content(); ?>
	</div>

</div><!-- #primary -->

<?php
get_footer();