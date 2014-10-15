<form class="form-group" action="<?php echo esc_url(home_url( '/' )); ?>" method="get" >
	<input type="text" id="search-main-button"  name="s" class="form-control searchTerm" placeholder="¿Qué estás buscando?" 
		   value="<?php the_search_query(); ?>" >
	<!-- <input class="searchButton" type="submit" /> -->	   
	<button type="submit" class="btn btn-default"></button>
</form>
