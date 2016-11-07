var altoVentana;

$(window).load(function () {
	altoVentana = $(window).height();
	$('.fondo.aula-virtual').height(altoVentana);
});

$(document).ready(function () {
	/*$('#slider').lightSlider({
		item:1,
		slideMargin:0,
		auto:true,
		pauseOnHover:true,
		loop:true,
		controls:false,
		pager:true,
		pause:3500
	});*/
	$('#slider').slippry({
		controls:false
	});
	$('#fullpage').fullpage({
		menu:'#menu',
		anchors:['inicio','beula','servicios','recolocacion-laboral','estres-management','escuela','convenios','aula-virtual','contactenos'],
	});
	$('.scrollbar-inner').scrollbar();
	/*
	$('a[href*="#"]:not([href="#"])').click(function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top
				}, 1000);
				return false;
			}
		}
	});
	*/
});
