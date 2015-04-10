<?php 
/*
Template Name: narrativas
*/

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
</header><!-- .page-header -->

<div id="primary">
	<div class="sidebar col-sm-3"><?php dynamic_sidebar('nav-menu-narrativa');?></div>
	<div class="site-content col-sm-9" role="main" >
		<!-- categoria diferente galeria -->
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content-single-page', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<div>
			<?php dynamic_sidebar( "widget-social" ); ?>
		</div>
	</div>
</div><!--primary-->
<?php
get_footer();
