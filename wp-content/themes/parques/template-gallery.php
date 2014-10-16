<?php
/*
Template Name: gallery
*/
?>
<?php get_header(); ?>


<header class="page-header">
	<h1 class="page-title">

		<?php if (is_category())
		{
			single_cat_title() ;
		} elseif (is_tag()) 
		{
			single_tag_title();
		} 
		elseif (is_author()) 
		{
			get_the_author_meta('display_name');

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

<div id="primary" class="container-fluid" role="main">
	

	<div >
		<!-- Contenido de la pagina -->
		<?php the_content(); ?>
	</div>

</div><!-- #primary -->

<?php
get_footer();