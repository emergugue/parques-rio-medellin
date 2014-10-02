	</div> <!-- main  -->
	<footer>
		<div id="contenedor-footer" class="container-fluid">
			<div class="row" >
				<div class="col-sm-3">

					<h3>Direccion : </h3>
					<span>
						<p>Calle falsa 1223 Parque San antonio Medellin Antioquia Colombia</p>
					</span>

				</div>
				<div class="col-sm-3">
					<h3>Contacto :</h3>
						<span>
							<p>Telefono 785145455511 , linea gratuita nacional 5442415415121</p>
							<p>Contato@contacto.gmail.com</p>
						</span>
					
				</div>
				<div class="col-sm-3">
					<h3>Horario de atención :</h3>
						<span>
							<p>Luens a jueves: 7pm 7360 - viernes 7- 4
								- 7-20 pm a 8 pm 
							</p>
						</span>
				</div>			
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
			<?php //dynamic_sidebar( "widget-footer" ); ?>
		</div>
	</footer>
<?php wp_footer(); ?> 

</body>
</html>