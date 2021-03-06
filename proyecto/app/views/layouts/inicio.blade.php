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
		<link href="{{url('assets/scripts/fullPage.js-master/jquery.fullPage.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('assets/scripts/slippry-master/dist/slippry.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('assets/scripts/jquery.scrollbar-master/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css">
		<link href="{{url('assets/css/styles.css')}}" rel="stylesheet" type="text/css">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="{{url('assets/scripts/jquery.min.js')}}"></script>
		<script src="{{url('assets/scripts/bootstrap.min.js')}}"></script>
		<script src="{{url('assets/scripts/fullPage.js-master/jquery.fullPage.min.js')}}"></script>
		<script src="{{url('assets/scripts/slippry-master/dist/slippry.min.js')}}"></script>
		<script src="{{url('assets/scripts/jquery.scrollbar-master/jquery.scrollbar.min.js')}}"></script>
		<script src="{{url('assets/scripts/main.js')}}"></script>
	</head>
	<body>
		<h1 class="hidden">
			Grupo Beula Consultores
		</h1>

		<div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="Contact" aria-hidden="true" data-keyboard="false" data-backdrop="static">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<iframe src="{{url('beula/form-modal')}}" width="100%" height="550" frameborder="0" allowtransparency="true"></iframe>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-default visible-xs visible-sm">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{url()}}">
						Grupo Beula Consultores
					</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="#beula">
								Beula
							</a>
						</li>
						<li>
							<a href="#servicios">
								Servicios
							</a>
						</li>
						<li>
							<a href="#recolocacion-laboral">
								Recolocación Laboral
							</a>
						</li>
						<li>
							<a href="#estres-management">
								Estrés Management
							</a>
						</li>
						<li>
							<a href="#escuela">
								Escuela
							</a>
						</li>
						<li>
							<a href="#convenios">
								Convenios
							</a>
						</li>
						<li>
							<a href="#aula-virtual">
								Aula Virtual
							</a>
						</li>
						<li>
							<a href="#contactenos">
								Contáctenos
							</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		<header class="container-fluid hidden-xs hidden-sm">
			<section class="container">
				<div class="row">
					<div class="col-md-3">
						<a href="{{url()}}" title="Beula Consultores" class="logo pull-left">
							<img src="{{url('assets/images/logo.png')}}" alt="" class="img-responsive">
						</a>
					</div>
					<div class="col-md-9">
						<ul class="links-sociales pull-right">
							<li>
								<a href="https://www.linkedin.com/in/grupo-beula-consultores-98921170" target="_blank" class="center-block">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/beula_" target="_blank" class="center-block">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/Beula.Consultores/?fref=ts" target="_blank" class="center-block">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<!--<li>
								<a href="" target="_blank" class="center-block">
									<i class="fa fa-search fa-lg"></i>
								</a>
							</li>-->
						</ul>
						<div class="row">
							<div class="col-md-12">
								<nav>
									<ul id="menu" class="menu pull-right">
										<li data-menuanchor="beula">
											<a href="#beula" class="submenu">
												Beula<i class='fa fa-angle-down'></i>
											</a>
											<ul>
												<li><a href="{{url('/beula/acerca-de')}}">Acerca de Beula</a></li>
												<li><a href="{{url('/beula/mision-y-vision')}}">Misión y Visión</a></li>
											</ul>
										</li>
										<li data-menuanchor="servicios">
											<a href="#servicios" class="submenu">
												Servicios<i class='fa fa-angle-down'></i>
											</a>
											<ul>
												<li><a href="{{url('/servicios/reclutamiento-seleccion-de-personal')}}">Reclutamiento y selección de personal</a></li>
												<li><a href="{{url('/servicios/evaluaciones-psicolaborales-desempeno')}}">Evaluaciones psicolaborales</a></li>
												<li><a href="{{url('/servicios/analisis-descripcion-de-puestos')}}">Análisis y descripción de puestos</a></li>
												<li><a href="{{url('/servicios/identificacion-de-competencias')}}">Identificación de competencias</a></li>
												<li><a href="{{url('/servicios/capacitacion-de-personal')}}">Capacitación</a></li>
												<li><a href="{{url('/servicios/outdoor-training')}}">Outdoor training</a></li>
												<li><a href="{{url('/servicios/elearning-corporativo')}}">E–learning corporativo</a></li>
												<li><a href="{{url('/servicios/terapia-empresarial-psicologica')}}">Terapia empresarial psicológica</a></li>
											</ul>
										</li>
										<li data-menuanchor="recolocacion-laboral">
											<a href="#recolocacion-laboral">
												Recolocación Laboral
											</a>
										</li>
										<li data-menuanchor="estres-management">
											<a href="#estres-management">
												Estrés Management
											</a>
										</li>
										<li data-menuanchor="escuela">
											<a href="#escuela" class="submenu">
												Escuela<i class='fa fa-angle-down'></i>
											</a>
											<ul>
												<li><a href="{{url('/escuela/especializaciones')}}">Especializaciones</a></li>
												<li><a href="{{url('/escuela/cursos')}}">Cursos</a></li>
												<li><a href="{{url('/escuela/seminarios')}}">Seminarios</a></li>
											</ul>
										</li>
										<li data-menuanchor="convenios">
											<a href="#convenios">
												Convenios
											</a>
										</li>
										<li data-menuanchor="aula-virtual">
											<a href="#aula-virtual">
												Aula Virtual
											</a>
										</li>
										<li data-menuanchor="contactenos">
											<a href="#contactenos">
												Contáctenos
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>
		@yield('contenido')
		<footer>
			<section class="container">
				<p>
					Grupo Beula Consultores <span class="pull-right">Jirón Risso 242 – 246, Ofc. 403. Lince. (Alt. 20 de la Arequipa)</span>
					<br>
					<a href="mailto:informes@beula.com.pe">informes@beula.com.pe</a> - <a href="mailto:seleccion@beula.com.pe">seleccion@beula.com.pe</a> <span class="pull-right"><a href="tel:012530078">253-0078</a> – <a href="tel:017373279">737-3279</a> – <a href="tel:987121711">987-121-711</a> – <a href="tel:969637073">969-637-073</a></span>
				</p>
			</section>
		</footer>
	</body>
</html>