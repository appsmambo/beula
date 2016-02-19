<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grupo Beula Consultores</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic" rel="stylesheet" type="text/css">
		<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
		<link href="{{url('js/fancyapps/jquery.fancybox.css')}}" rel="stylesheet">
		<link href="{{url('css/main.css')}}" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="js/queryloader2.min.js"></script>
		<script type="text/javascript">
			window.addEventListener('DOMContentLoaded', function() {
				QueryLoader2(document.querySelector('body'), {
					barColor:'#fff',
					backgroundColor:'#00b1e1',
					percentage:false,
					barHeight:1,
					minimumTime:200,
					maxTime:35000,
					fadeOutTime:750
				});
			});
		</script>
		<script src="{{url('js/jquery.min.js')}}"></script>
		<script src="{{url('js/bootstrap.min.js')}}"></script>
		<script src="{{url('js/fancyapps/jquery.fancybox.pack.js')}}"></script>
		<script src="{{url('js/main.js')}}"></script>
	</head>
	<body>
		<div class="hidden">
			<section id="formulario" class="formulario">
				<h2 class="text-center">
					INSCRÍBETE AQUÍ
				</h2>
				<ul id="myTabs" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#personas" aria-controls="personas" role="tab" data-toggle="tab">Registro para personas</a></li>
					<li role="presentation"><a href="#empresas" aria-controls="empresas" role="tab" data-toggle="tab">Registro para empresas</a></li>
				</ul>
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="personas">
						<form style="margin-top:16px" name="registro-personas" id="registro-personas" action="{{url('registro-personas')}}" method="post">
							{{Form::token()}}
							<div class="row">
								<div class="col-xs-12">
									<label for="persona_nombres">Datos personales:</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="persona_nombres" id="persona_nombres" placeholder="Nombres" autofocus>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="persona_apellidos" placeholder="Apellidos">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="persona_telefono" placeholder="Teléfono">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="persona_celular" placeholder="Celular">
									</div>
								</div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="persona_email" placeholder="Correo electrónico">
							</div>
							<div class="form-group">
								<label for="persona_curso">Quiero matricularme en:</label>
								<select class="form-control" name="persona_curso" id="persona_curso">
								@foreach($cursos as $curso)
									<option value="{{$curso['id']}}">{{$curso['descripcion']}}</option>
								@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="persona_comentario">Comentario:</label>
								<textarea class="form-control" rows="3" name="persona_comentario" id="persona_comentario"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label>Autorización envío de información</label>
								</div>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox" name="persona_informacion" value="1"> Deseo recibir recibir información acerca de programas, cursos y seminarios. de parte de Beula Consultores.
								</label>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label>Autorización para el tratamiento de datos personales</label>
								</div>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="persona_politicas"> Al presionar en ENVIAR, usted acepta haber leído y aceptado <a href="#">La Política de Seguridad y Privacidad</a>.
								</label>
							</div>
							<button type="submit" class="btn btn-info">ENVIAR</button>
						</form>
					</div>
					<div role="tabpanel" class="tab-pane fade" id="empresas">
						<form style="margin-top:16px" name="registro-empresas" id="registro-empresas" action="{{url('registro-empresas')}}" method="post">
							{{Form::token()}}
							<div class="row">
								<div class="col-xs-12">
									<label for="empresa_razonsocial">Datos de la empresa:</label>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="empresa_razonsocial" id="empresa_razonsocial" placeholder="Razón Social">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="empresa_ruc" placeholder="RUC">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="empresa_domicilio" placeholder="Domicilio fiscal">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" name="empresa_email" placeholder="Correo electrónico">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="empresa_telefono" placeholder="Teléfono">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="tel" class="form-control" name="empresa_celular" placeholder="Celular">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="empresa_inscritos">Nombres de Inscritos:</label>
								<textarea class="form-control" rows="3" name="empresa_inscritos" id="empresa_inscritos"></textarea>
							</div>
							<div class="form-group">
								<label for="empresa_curso">Quiero matricularme en:</label>
								<select class="form-control" name="empresa_curso" id="persona_curso">
								@foreach($cursos as $curso)
									<option value="{{$curso['id']}}">{{$curso['descripcion']}}</option>
								@endforeach
								</select>
							</div>
							<div class="form-group">
								<label for="empresa_comentario">Comentario:</label>
								<textarea class="form-control" rows="3" name="empresa_comentario" id="empresa_comentario"></textarea>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label>Autorización envío de información</label>
								</div>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="empresa_informacion"> Deseo recibir recibir información acerca de programas, cursos y seminarios. de parte de Beula Consultores.
								</label>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label>Autorización para el tratamiento de datos personales</label>
								</div>
							</div>
							<div class="checkbox">
								<label>
								  <input type="checkbox" name="empresa_politicas"> Al presionar en ENVIAR, usted acepta haber leído y aceptado <a href="#">La Política de Seguridad y Privacidad</a>.
								</label>
							</div>
							<button type="submit" class="btn btn-info">ENVIAR</button>
						</form>
					</div>
				</div>
			</section>
		</div>
	</body>
</html>