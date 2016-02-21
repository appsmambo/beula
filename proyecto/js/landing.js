$(document).ready(function () {
	$('#myTabs a').click(function (e) {
		e.preventDefault();
		$(this).tab('show');
	})
	$.fancybox({
		href:'#formulario',
		width:600,
		fitToView:false,
		autoHeight:true,
		closeClick:false,
		closeBtn:false,
		scrolling:'no',
		helpers:{
			overlay:{closeClick: false} // prevents closing when clicking OUTSIDE fancybox
		}
	});
	$('#registro-personas').validetta({
		showErrorMessages:false,
		realTime:true,
		onValid:function (event) {
			event.preventDefault();
			$('div#personas').block({
				message:'<h3>Procesando...</h3>',
				css:{
					width:'420px',
					border:'none',
					padding:'15px',
					backgroundColor:'#000',
					'-webkit-border-radius':'10px',
					'-moz-border-radius':'10px',
					opacity:.5,
					color:'#fff'
				}
			});
			var data = $('#registro-personas').serialize();
			$.ajax({
				type:'POST',
				url:urlPersonas,
				data:data,
				success:function (data) {
					if (data.status == 'ok') {
						$('div#personas').block({
							message:'<h3>Sus datos han sido registrados, nos pondremos en contacto con usted a la brevedad.</h3>',
							css:{
								width:'420px',
								border:'none',
								padding:'15px',
								backgroundColor:'#000',
								'-webkit-border-radius':'10px',
								'-moz-border-radius':'10px',
								opacity:.5,
								color:'#fff'
							}
						});
					} else {
						$('div#personas').block({
							message:'<h3>Hubo un error al registrar sus datos, vuelva a intentarlo.</h3>'
						});
						setTimeout(function () {
							$('div#personas').unblock();
						}, 3500);
					}
				},
				dataType: 'json'
			});
		}
	});
	$('#registro-empresas').validetta({
		showErrorMessages:false,
		realTime:true,
		onValid:function (event) {
			event.preventDefault();
			$('div#empresas').block({
				message:'<h3>Procesando...</h3>',
				css:{
					width:'420px',
					border:'none',
					padding:'15px',
					backgroundColor:'#000',
					'-webkit-border-radius':'10px',
					'-moz-border-radius':'10px',
					opacity:.5,
					color:'#fff'
				}
			});
			var data = $('#registro-empresas').serialize();
			$.ajax({
				type:'POST',
				url:urlEmpresas,
				data:data,
				success:function (data) {
					if (data.status == 'ok') {
						$('div#empresas').block({
							message:'<h3>Sus datos han sido registrados, nos pondremos en contacto con usted a la brevedad.</h3>',
							css:{
								width:'420px',
								border:'none',
								padding:'15px',
								backgroundColor:'#000',
								'-webkit-border-radius':'10px',
								'-moz-border-radius':'10px',
								opacity:.5,
								color:'#fff'
							}
						});
					} else {
						$('div#empresas').block({
							message:'<h3>Hubo un error al registrar sus datos, vuelva a intentarlo.</h3>'
						});
						setTimeout(function () {
							$('div#empresas').unblock();
						}, 3500);
					}
				},
				dataType:'json'
			});
		}
	});
});
