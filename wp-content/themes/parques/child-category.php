<?php
/**
* Plantilla Subcategorias
* Plantilla utilizada para mostrar una subcategoria.
*stdClass Object ( [term_id] => 4 [name] => Gerencia [slug] => gerencia [term_group] => 0 [term_taxonomy_id] => 4 [taxonomy] => category [description] => [parent] => 3 [count] => 1 [cat_ID] => 4 [category_count] => 1 [category_description] => [cat_name] => Gerencia [category_nicename] => gerencia [category_parent] => 3 ) 
*
* @author Telemedellín
**/
?>

<?php
$link = esc_url(get_category_link($category->cat_ID));
if( $category->cat_ID == 9 )
{
	$link = esc_url(get_permalink( 91 ));
}
?>

<div class="col-sm-4">
	<a id="cat-<?php echo $category->cat_ID ?>" class="<?php echo $category->slug ?> categoria sublink col-sm-4" 
		href="<?php echo $link ?>">
			<div class="subcategory-layer2"></div>
			<h2><?php echo $category->name ?></h2>
	</a>
</div>