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
								<a href="" target="_blank" class="center-block">
									<i class="fa fa-youtube fa-lg"></i>
								</a>
							</li>
							<li>
								<a href="" target="_blank" class="center-block">
									<i class="fa fa-twitter fa-lgx"></i>
								</a>
							</li>
							<li>
								<a href="" target="_blank" class="center-block">
									<i class="fa fa-facebook fa-lg"></i>
								</a>
							</li>
							<li>
								<a href="" target="_blank" class="center-block">
									<i class="fa fa-search fa-lg"></i>
								</a>
							</li>
						</ul>
						<div class="row">
							<div class="col-md-12">
								<ul id="menu" class="menu pull-right">
									<li data-menuanchor="beula">
										<a href="#beula" class="submenu">
											Beula
										</a>
										<ul>
											<li>
												<a href="#">
													Acerca de Beula
												</a>
											</li>
											<li>
												<a href="#">
													Nuestra Misión y Visión
												</a>
											</li>
										</ul>
									</li>
									<li data-menuanchor="servicios">
										<a href="#servicios">
											Servicios
										</a>
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
										<a href="#escuela">
											Escuela
										</a>
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
							</div>
						</div>
					</div>
				</div>
			</section>
		</header>
		@yield('contenido')
	</body>
</html>