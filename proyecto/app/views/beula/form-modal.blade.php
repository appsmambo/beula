<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Grupo Beula Consultores</title>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet" type="text/css">
		<link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
		
		<link href="{{url('assets/css/styles.css')}}" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
		<script src="{{url('assets/scripts/bootstrap.min.js')}}"></script>
		
		<script src="{{url('assets/scripts/main.js')}}"></script>

	</head>
	<body id="form-modal">
		<h2>INSCRÍBETE AQUÍ</h2>
		<form id="contactForm" method="post" class="form-horizontal" action="{{url('beula/sendform')}}">
			<div class="row">
				<div class="col-xs-12">
					<select name="curso" class="form-control">
						<option value="">Seleccionar curso</option>
						<option value="1">Curso 1</option>
						<option value="2">Curso 2</option>
						<option value="3">Curso 3</option>
						<option value="4">Curso 4</option>
					</select>
				</div>
			</div>

			<h3>MIS DATOS</h3>
			
			<div class="row">
				<div class="col-xs-12">
					<input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres y Apellidos">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
				</div>
				<div class="col-xs-6">
					<input type="tel" class="form-control" name="celular" id="celular" placeholder="Celular">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<input type="email" class="form-control" name="email" id="email" placeholder="Correo Electrónico">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-6">
					<select id="tipodocumento" name="tipodocumento" class="form-control">
						<option value="">Tipo de documento</option>
						<option value="1">DNI</option>
						<option value="2">Carnet extranjería</option>
						<option value="3">Pasaporte</option>
					</select>
				</div>
				<div class="col-xs-6">
					<input type="text" class="form-control" name="numerodocumento" id="numerodocumento" placeholder="Nro. de Documento">
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<select name="curso" class="form-control">
						<option value="">Elige tu profesión</option>
						<option value="1">Profesión 1</option>
						<option value="2">Profesión 2</option>
						<option value="3">Profesión 3</option>
						<option value="4">Profesión 4</option>
					</select>
				</div>
			</div>

			<div class="row checkboxgroup">
				<div class="col-xs-12">
					<label for="cbox1"><input type="checkbox"  id="cbox1" value="tyc_checkbox"> Acepto los términos y condiciones</label><br>
					<label for="cbox2"><input type="checkbox"  id="cbox2" value="second_checkbox"> Acepto recibir información de Beula en mi correo personal.</label><br>
					<label for="cbox3"><input type="checkbox"  id="cbox3" value="second_checkbox"> Acepto los términos de <a href="#">La Política de Seguridad y Privacidad</a></label>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<input type="submit" value="Enviar" class="contacto align-left">
				</div>
			</div>
		</form>
	</body>
	</html>