<?php
/**
* Plantilla para mostrar la caracteristica de la categoria
* con sus subcategorias, con una imagen descriptiva. 
*
* @category	obra
* @author 	telemedellín
**/
get_header();
?>

<header class="page-header">
	<div class="breadcrumbs">
		<?php if(function_exists('bcn_display'))
		{
			bcn_display();
		}
		?>
	</div>
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
	
	<div class="cat-descripcion">
		<p><?php echo category_description(); ?> </p>
	</div>

	<?php

	$catCod 	= get_cat_ID( single_cat_title("", false) );
	$categories = getSubcategories($catCod);

	?>
	<div class="content-main row">
		<?php if( $categories ): ?>

			<?php foreach ($categories as $key => $category): ?>
				<!-- subcategorias -->			
				<?php include( 'child-category.php') ?>
				
			<?php endforeach; ?>
		<?php endif; ?>	
	</div>	

	<div >
		<?php dynamic_sidebar( "widget-social" ); ?>
	</div>

</div><!-- #primary -->
<?php
get_footer();