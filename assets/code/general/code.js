jQuery(function ($) {
//beginning

	var desktop = 1024;
	var tablet = 769;
	var phone = 768;

	$("").on("click", function(e){
		
	});

	$(document).ready(function(){
		// Función para comprobar el tamaño de la pantalla y agregar/quitar clases
		function jsContainerOne() {
			if ($(window).width() < phone) {
				$('.js-container-one').addClass('oculto');
			} else {
				$('.js-container-one').removeClass('l-width-4');
			}
			if ($(window).width() > tablet) {
				$('.js-container-one').addClass('l-width-4');
			} else {
				$('.js-container-one').removeClass('oculto');
			}
		}
	
		// Ejecutar la función cuando se carga la página y al cambiar el tamaño de la ventana
		jsContainerOne();
		$(window).resize(jsContainerOne);
	});

//ending
});