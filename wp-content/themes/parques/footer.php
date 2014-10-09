	</div> <!-- main  -->
	<footer>
		<div id="contenedor-footer" class="container-fluid">
			<div class="row" >
				<?php dynamic_sidebar( "widget-footer" ); ?>
			</div>
			<div class="row" >
				<div class="col-sm-3">
					<a class="item-social" href="#">
						<img width="45" src="<?php echo bloginfo('template_url') .'/images/icons/32/closed32.png' ?>" >
					</a>
					<a class="item-social" href="#">
						<img src="<?php echo bloginfo('template_url') .'/images/icons/32/fb32.png' ?>" >
					</a>	
					<a class="item-social" href="#">
						<img src="<?php echo bloginfo('template_url') .'/images/icons/32/tw32.png' ?>">
					</a>
				</div>
				
				<div class="col-sm-8">
					<h3> <?php bloginfo('name'); ?> </h3>
				</div>
			</div>
		</div>
	</footer>
	
<?php include_once('socialinclude.php'); ?>
<?php wp_footer(); ?> 

</body>
</html>