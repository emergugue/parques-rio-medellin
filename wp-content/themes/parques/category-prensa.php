<?php 
/* Category: zona-de-descargas */
?>

<?php
	$url = get_home_url();
	wp_enqueue_style('js_composer', $url.'/wp-content/plugins/js_composer/assets/css/js_composer.css?ver=4.4.2');
	get_header();
?>

<div id="primary">
	<div class="site-content col-sm-12" role="main">
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
				?>
			</h1>
		</header>
		<div class="content-main">
			<section class="entrada-contenido">
				<div>
					<!-- Contenido del post -->
					<div class="vc_row wpb_row vc_row-fluid">
						<?php query_posts('category_name=noticias,galeria,zona-de-descargas'); ?>
						<?php

							while ( have_posts() ) : the_post();
							    the_content();
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</section>
		</div>
	</div>
</div>

<?php get_footer();