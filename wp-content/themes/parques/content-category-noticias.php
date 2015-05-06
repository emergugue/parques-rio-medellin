<?php
	header('Content-Type:text/plain; charset=ISO-8859-1');
	extract($_POST);
	require '../../../wp-load.php';

	$txtDesde = explode("-", $txtDesde);
	$txtHasta = explode("-", $txtHasta);

	$query = array(
		'cat' => $categoria,
		'date_query' => array(
			array(
				'year' => $txtDesde[0],
				'month' => $txtDesde[1],
				'day' => $txtDesde[2],
				'compare' => '>='
			),
			array(
				'year' => $txtHasta[0],
				'month' => $txtHasta[1],
				'day' => $txtHasta[2],
				'compare' => '<='
			)
		)
	);

	query_posts($query);

	$datos = array();
	$datos['content'] = '';
	$datos['pag'] = '';

	if (have_posts()):
		while ( have_posts() ) : the_post() ?>

		<?php 
 			$contenido = get_the_excerpt() ? get_the_excerpt() : get_the_content('');

			$datos['content'] .= "<article id='post-".get_the_ID()."' role='article' class='article article-blog row-fluid'><header><time>".get_the_date()."</time><figure class='image-article'><a href='".esc_url(get_permalink())."'>".get_the_post_thumbnail('medium')."</a></figure></header><section><h3 class='title-article'>".get_the_title()."</h3><div>".$contenido."</div></section><footer class='footer-article'><a href='".esc_url(get_permalink())."' class='leer-mas'>Leer toda la noticia</a></footer></article>";


		?>
		<?php 
		endwhile;
	else:
	$datos['content'] = '<h1>No existe contenido relacionado</h1>';
	endif;

if (function_exists('bt_pagination')) 
{
	$datos['pag'] = bt_pagination();
}

echo json_encode($datos);

?>