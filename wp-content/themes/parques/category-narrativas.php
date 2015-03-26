<?php 
/* Category: narrativas */

get_header(); ?>

<div id="primary">
	<div class="sidebar col-sm-3"><?php dynamic_sidebar('nav-menu-narrativa');?></div>

	<div class="site-content col-sm-9" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="breadcrumbs">
					<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}
					?>
				</div>
				<h1 class="titulo-principal">
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
			<section >
				<?php
					echo get_the_content('');
				?>
			</section>
		<?php else : ?>
			<h1>No existe contenido relacionado </h1>
		<?php endif; ?>
	</div><!-- #content -->

</div><!-- #primary -->
<?php
get_footer();
