	</div> <!-- main  -->
	<footer>
		<div id="contenedor-footer" class="container-fluid">
			<div class="row" >
				<?php dynamic_sidebar( "widget-footer" ); ?>
			</div>
			<div class="row" >
				<div class="col-sm-4 social-links">
					<ul>
						<li><a class="item-social mail-icon" href="#"></a></li>
						<li><a class="item-social fb-icon" href="#"></a></li>
						<li><a class="item-social tw-icon" href="#"></a></li>
					</ul>
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