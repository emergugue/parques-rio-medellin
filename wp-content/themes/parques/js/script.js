
  var $ = jQuery;

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57916051-1', 'auto');
  ga('send', 'pageview');

if($('#filtro').length)
{
	var imagesUrl = window.location.origin+'/wp-content/themes/parques/images/';

    function validarRangos()
    {
    	var fechaInicio = $('#txtDesde').val();
    	var fechaFin = $('#txtHasta').val();

    	if ((fechaInicio!=='') && (fechaFin!==''))
    	{
			$('.error > ul > li#fechaInicio').remove();
			$('.error > ul > li#fechaFin').remove();
			$('.error > ul > li#fechas').remove();

    		return true;
    	}
    	else
    	{
    		mostrarMensaje(fechaInicio, fechaFin);

			return false;
    	}
    }

    function mostrarMensaje(fechaInicio, fechaFin)
    {
		if ((fechaInicio==='') && (!$('#fechaInicio').length))
		{
			$('.error > ul').css({
				color:'red',
				margin:'20px 0px 0px 0px'
			}).append("<li id='fechaInicio'>Por favor seleccione la fecha de inicio.</li>");
		}

		if ((fechaFin==='') && (!$('#fechaFin').length))
		{
			$('.error > ul').css({
				color:'red',
				margin:'20px 0px 0px 0px'
			}).append("<li id='fechaFin'>Por favor seleccione la fecha de fin.</li>");
		}
    }

    function validarFechas()
    {
    	var fechaInicio = $('#txtDesde').val().split('-');
    	fechaInicio = fechaInicio.join('');

    	var fechaFin = $('#txtHasta').val().split('-');
    	fechaFin = fechaFin.join('');

    	if (fechaInicio > fechaFin)
    	{
			$('.error > ul').css({
				color:'red',
				margin:'20px 0px 0px 0px'
			}).append("<li id='fechas'>La fecha de inicio no puede ser mayor a la fecha final.</li>");

			return false;
    	}
    	else
    		return true;
    }

	$('#filtro').on('keypress', function() {
		$('#btnFiltrar').trigger('click');
	});

    $('#txtDesde').datepicker({
        dateFormat: 'yy-mm-dd',
        buttonImage: imagesUrl + 'datepicker.png'
    });

    $('#txtHasta').datepicker({
        dateFormat: 'yy-mm-dd',
        buttonImage: imagesUrl + 'datepicker.png'
    });

	$('#btnFiltrar').on('click', function(evt)
	{
		if (validarRangos() && validarFechas())
		{
			$.ajax({
				method: "POST",
				url: "wp-content/themes/parques/content-category-noticias.php",
				data: $('#filtro').serialize(),
				success: function(data)
				{
					var obj = JSON.parse(data);

					$('.content-main').html(obj.content);
					$('.pag').html(obj.pag);
				},
				error: function(jqXHR, textStatus, errorThrown)
				{
					console.log(errorThrown);
				}
			});
		}
		else
			evt.stopPropagation();
	});
}