@extends("layouts/inicio")
@section('contenido')
<div id="fullpage">
	<!-- slide -->
	<section id="section0" class="section">
		<ul id="slider">
			<li>
				<img src="{{url('assets/images/banner/01.jpg')}}" alt="">
			</li>
			<!--li>
				<img src="{{url('assets/images/banner/02.jpg')}}"  alt="1920 x 944 jpg">
			</li-->
		</ul>
	</section>
	<!-- FIN slide -->
	<!-- beula -->
	<section id="section1" class="section beula">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<div class="bloque">
						<div class="row">
							<div class="col-xs-10 col-xs-offset-1">
								<h2>
									BEULA
								</h2>
								<div class="row">
									<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-md-offset-1">
										<p class="center-block text-center">
											<a href="{{url('beula/acerca-de')}}">
												<img src="{{url('assets/images/beula/acerca-de.jpg')}}" alt="" class="img-responsive">
												ACERCA DE BEULA
											</a>
										</p>
									</div>
									<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-md-4 col-md-offset-2">
										<p class="center-block text-center">
											<a href="{{url('beula/mision-y-vision')}}">
												<img src="{{url('assets/images/beula/nuestra-mision-y-vision.jpg')}}" alt="" class="img-responsive">
												MISIÓN Y VISIÓN
											</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN beula -->
	<!-- servicios -->
	<section id="section2" class="section servicios">
		<div class="container">
			<div class="bloque">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>
							NUESTROS SERVICIOS
						</h2>
						<div class="row">
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/reclutamiento-y-seleccion-de-personal.jpg')}}" alt="" class="img-responsive">
										RECLUTAMIENTO Y SELECCIÓN<br>DE PERSONAL
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/evaluaciones-psicolaboral-y-desempeno.jpg')}}" alt="" class="img-responsive">
										EVALUACIONES<br>PSICOLABORALES<!--<br>Y DE DESEMPEÑO-->
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/analisis-y-descripcion-de-puestos.jpg')}}" alt="" class="img-responsive">
										ANÁLISIS Y DESCRIPCIÓN<br>DE PUESTOS
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/identificacion-de-competencias.jpg')}}" alt="" class="img-responsive">
										IDENTIFICACIÓN DE<br>COMPETENCIAS
									</a>
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/capacitacion.jpg')}}" alt="" class="img-responsive">
										CAPACITACIÓN<br>DE PERSONAL
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/outdoor-training.jpg')}}" alt="" class="img-responsive">
										OUTDOOR<br>TRAINING
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/e-learning-corporativo.jpg')}}" alt="" class="img-responsive">
										E-LEARNING<br>CORPORATIVO
									</a>
								</p>
							</div>
							<div class="col-sm-6 col-lg-3">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/servicios/terapia-empresarial-psicologica.jpg')}}" alt="" class="img-responsive">
										TERAPIA EMPRESARIAL<br>PSICOLÓGICA
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN servicios -->
	<!-- recolocación laboral -->
	<section id="section3" class="section recolocacion">
		<div class="container-fluid" style="padding-left:0;padding-right:0">
			<div class="bloque">
				<div class="row" style="margin-left:0;margin-right:0">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<h2>
							RECOLOCACIÓN LABORAL
						</h2>
						<div class="parrafo">
							<div class="scrollbar-inner">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
							</div>
						</div>
						<a href="#" class="contacto">
							Contáctanos aquí
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN recolocación laboral -->
	<!-- estres management -->
	<section id="section4" class="section estres">
		<div class="container-fluid" style="padding-left:0;padding-right:0">
			<div class="bloque">
				<div class="row" style="margin-left:0;margin-right:0">
					<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
						<h2>
							ESTRÉS MANAGEMENT
						</h2>
						<div class="parrafo">
							<div class="scrollbar-inner">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
							</div>
						</div>
						<a href="#" class="contacto">
							Contáctanos aquí
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN estres management -->
	<!-- escuela -->
	<section id="section5" class="section escuela">
		<div class="container">
			<div class="bloque">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>
							ESCUELA
						</h2>
						<div class="row">
							<div class="col-sm-4">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/escuela/especializaciones.jpg')}}" alt="" class="img-responsive">
										ESPECIALIZACIONES
									</a>
								</p>
							</div>
							<div class="col-sm-4">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/escuela/cursos.jpg')}}" alt="" class="img-responsive">
										CURSOS
									</a>
								</p>
							</div>
							<div class="col-sm-4">
								<p class="center-block text-center">
									<a href="#">
										<img src="{{url('assets/images/escuela/seminarios.jpg')}}" alt="" class="img-responsive">
										SEMINARIOS
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN escuela -->
	<!-- convenios -->
	<section id="section7" class="section convenios">
		<div class="container">
			<div class="bloque">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>
							CONVENIOS
						</h2>
						<img src="{{url('assets/images/convenios/banner.jpg')}}" alt="" class="img-responsive center-block">
						<div class="parrafo">
							<div class="scrollbar-inner">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi nec nibh faucibus, varius augue et, vulputate tortor. Aenean ut nibh non tortor volutpat cursus a sit amet tellus. Suspendisse aliquam aliquet nisl, ac posuere mauris maximus eu.
								</p>
								<p>
									Praesent dictum interdum augue, euismod rhoncus risus euismod non. Nam a dapibus purus. Donec lacinia magna turpis, ut vestibulum lectus interdum sit amet. Mauris id aliquet urna. Sed purus ipsum, facilisis eu velit ut, aliquam facilisis dolor. Duis a quam a odio euismod bibendum consectetur in nulla. Duis urna leo, bibendum id velit sit amet, accumsan laoreet tortor. Quisque porttitor, ante in dictum maximus, odio lectus imperdiet lorem, suscipit laoreet neque nunc sit amet est.
								</p>
								<p>
									Cras eget lacinia dolor. Duis eleifend est id orci porta finibus. Phasellus mollis suscipit dolor, quis gravida nibh lacinia eu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque egestas venenatis eros, nec fermentum justo suscipit egestas.
								</p>
							</div>
						</div>
						<a href="#" class="contacto">
							Contáctanos aquí
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN convenios -->
	<!-- aula virtual -->
	<section id="section6" class="section aula-virtual">
		<div class="container-fluid" style="padding-left:0;padding-right:0;position:absolute;width:100%;bottom:5%">
			<div class="bloque">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="row">
							<div class="col-sm-5 col-lg-3">
								<img src="http://beula.com.pe/web-2016-3/assets/images/aula-virtual.png" alt="" class="img-responsive center-block">
							</div>
							<div class="col-sm-7 col-lg-8">
								<p>
									<br><br>
									La distancia ya no es un problema, ahora puedes estudiar desde donde estés con un sólo clic.
									<br>
									<a href="http://aula.beula.com.pe" class="contacto" target="_blank">
										Aula Virtual
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN aula virtual -->
	<!-- contactanos -->
	<section id="section8" class="section contactenos">
		<div class="container">
			<div class="bloque">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<h2>
							CONTÁCTENOS
						</h2>
						<form name="contacto" id="contacto">
							<div class="form-group">
								<select name="curso" class="form-control">
									<option value="">Seleccionar curso</option>
									<option value="1">Curso 1</option>
									<option value="2">Curso 2</option>
									<option value="3">Curso 3</option>
									<option value="4">Curso 4</option>
								</select>
							</div>
							<h3>
								INFORMACIÓN PERSONAL
							</h3>
							<div class="row">
								<div class="col-sm-6">
									<label for="nombres">
										Nombres
									</label>
									<input type="text" class="form-control" name="nombres" id="nombres">
								</div>
								<div class="col-sm-6">
									<label for="apellidos">
										Apellidos
									</label>
									<input type="text" class="form-control" name="apellidos" id="apellidos">
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label for="email">
										Correo electrónico
									</label>
									<input type="email" class="form-control" name="email" id="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="tipodocumento">
										Tipo de documento
									</label>
									<select id="tipodocumento" name="tipodocumento" class="form-control">
										<option value="">Seleccionar opción</option>
										<option value="1">DNI</option>
										<option value="2">Carnet extranjería</option>
										<option value="3">Pasaporte</option>
									</select>
								</div>
								<div class="col-sm-4">
									<label for="numerodocumento">
										Nro. de documento
									</label>
									<input type="text" class="form-control" name="numerodocumento" id="numerodocumento">
								</div>
								<div class="col-sm-4">
									<label for="telefono">
										Teléfono o celular
									</label>
									<input type="tel" class="form-control" name="telefono" id="telefono">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-4">
									<label for="departamento">
										Departamento
									</label>
									<select id="departamento" name="departamento" class="form-control">
										<option value="">Seleccionar opción</option>
									</select>
								</div>
								<div class="col-sm-4">
									<label for="provincia">
										Provincia
									</label>
									<select id="provincia" name="provincia" class="form-control">
										<option value="">Seleccionar opción</option>
									</select>
								</div>
								<div class="col-sm-4">
									<label for="distrito">
										Distrito
									</label>
									<select id="distrito" name="distrito" class="form-control">
										<option value="">Seleccionar opción</option>
									</select>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<label for="comentarios">
										Escriba aquí su consulta
									</label>
									<textarea name="comentarios" id="comentarios" class="form-control"></textarea>
									Máx. 150 caracteres
									<input type="submit" value="Enviar" class="contacto pull-right">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FIN contactanos -->
</div>
@stop