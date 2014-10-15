<form class="form-group" action="<?php echo esc_url(home_url( '/' )); ?>" method="get" >
	<input type="text" id="search-main-button"  name="s" class="form-control" placeholder="Search" 
		   value="<?php the_search_query(); ?>" >
		   
	<button type="submit" class="btn btn-default"></button>
</form>
