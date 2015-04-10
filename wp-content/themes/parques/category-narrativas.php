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
					Concurso de narrativas
				</h1>
			</header><!-- .page-header -->
			<section >
				<?php
					$first_post = get_post_field( 'post_content', 776 ,'display');
					echo  $first_post;
				?>
			</section>
		<?php else : ?>
			<h1>No existe contenido relacionado </h1>
		<?php endif; ?>
	</div><!-- #content -->

</div><!-- #primary -->
<?php
get_footer();
