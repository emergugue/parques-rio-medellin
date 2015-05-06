<?php 
/**
* Plantilla para mostrar las categorias  anunciadas en cada
* uno de los menus, segun el tipo de articulo seran catalogados aqui
* se dividira en tipo de plantillas dependiendo de la situacion.
* Utilizelo con responsabilidad
* @link http://codex.wordpress.org/Template_Hierarchy
**/

wp_enqueue_script('wp_enqueue_scripts');

get_header();

$col 		= "";
$widgetArea = true;

$col = "col-sm-8";

$dataParent = get_categories('parent=2&hide_empty=0');
$select = '';
$select .= '<select name="categoria" class="form-control">';

foreach ($dataParent as $parent)
{
	$select .= '<option value="'.$parent->cat_ID.'">'.$parent->name.'</option>';
	$dataChildren = get_categories('parent='.$parent->cat_ID.'&hide_empty=0');
	foreach ($dataChildren as $children)
	{
		$select .= '<option value="'.$children->cat_ID.'">-- '.$children->name.'</option>';
	}
}

$select .= '</select>';

?>
<div id="primary">
	<div class="site-content <?php echo $col ?>" role="main">
	<?php if (have_posts()): ?>
		<header class="page-header">
			<div class="breadcrumbs">
				<?php if(function_exists('bcn_display'))
				{
					bcn_display();
				}
				?>
			</div>
			<div class="panel panel-default">
				<h3 class="titulo-principal" style="margin: 0px;border-right:0px;">
					Puedes usar los siguientes filtros para las noticias
				</h3>
				<div class="panel-body">
					<form id="filtro" method="POST">
						<div class="col-md-4">
							<label>Categoría</label>
							<?php echo $select; ?>
						</div>
						<div class="col-sm-3">
							<label>Fecha inicio</label>
							<input type="text" id="txtDesde" name="txtDesde" class="form-control" placeholder="Desde" readonly>
						</div>
						<div class="col-sm-3">
							<label>Fecha fin</label>
							<input type="text" id="txtHasta" name="txtHasta" class="form-control" placeholder="Hasta" readonly>
						</div>
						<div class="col-md-2">
							<label>&nbsp;</label>
							<input type="button" id="btnFiltrar" class="btn btn-warning form-control" value="Filtrar" >
						</div>
						<div class="col-md-12">
							<span class="error">
								<ul></ul>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div style="clear:both;"></div>
			<h1 class="titulo-principal">
			<?php
				if (is_category())
				{
					single_cat_title();
			 	}
			?>
			</h1>
		</header>
		<!-- .page-header -->
		<div class="content-main">
			<?php while ( have_posts() ) : the_post() ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>
		</div>
		<div class="pag">
			<?php
			/* paginacion marca telemedellin */
			if ( function_exists( 'bt_pagination' ) ) 
			{
				bt_pagination();
			}
			?>
		</div>
	<?php else : ?>
		<h1>No existe contenido relacionado</h1>
	<?php endif; ?>
	</div>
	<!-- #content -->
	<?php if( $widgetArea): ?>
		<!-- Bloque oculto en moviles. -->
		<div class="sidebar hidden-xs  col-sm-4"><?php dynamic_sidebar('sidebar');?></div>
	<?php endif; ?>	
</div>
<!-- #primary -->
<?php get_footer(); ?>
<script>
</script>