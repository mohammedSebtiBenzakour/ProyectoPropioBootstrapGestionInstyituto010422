<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title></title>
</head>
<body>

	<div class="container">

		<div class="row pt-3">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container-fluid">
					<a class="navbar-brand" href="#">Navbar scroll</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarScroll">
						<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Link</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									Link
								</a>
								<ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
									<li><a class="dropdown-item" href="#">Action</a></li>
									<li><a class="dropdown-item" href="#">Another action</a></li>
									<li><hr class="dropdown-divider"></li>
									<li><a class="dropdown-item" href="#">Something else here</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
							</li>
						</ul>
						<form class="d-flex">
							<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success" type="submit">Search</button>
						</form>
						<form class="d-flex ps-3" method="post" action="salir.php">
							<button class="btn btn-outline-success" type="submit">Cerrar session</button>
						</form>
					</div>
				</div>
			</nav>
		</div>
		<div class="row">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../indexNuevo.html">Home</a></li>
					<li class="breadcrumb-item"><a href="../indexNuevo.html">Administración</a></li>
					<li class="breadcrumb-item"><a href="loginProfesores.php">Login para Profesores</a></li>
					<li class="breadcrumb-item active" aria-current="page">Formulario para crear usuarios 'Profesores'</li>
				</ol>
			</nav>
		</div>
		<h1>Formulario para crear usuarios 'Profesores'</h1>

		<form id="contact-form" method="post" action="registrarUsuarios.php" role="form" class="row g-3 needs-validation" novalidate>

			<div class="messages"></div>

			<div class="controls">

				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_name">Nombre *</label>
							<input id="form_name" type="text" name="nombre" class="form-control" placeholder="Por Favor introduce el Nombre *" required="required" data-error="Firstname is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_lastname">Apellidos *</label>
							<input id="form_lastname" type="text" name="apellido" class="form-control" placeholder="Por Favor introduce los Apellidos *" required="required" data-error="Lastname is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_usuario">Nombre de usuario *</label>
							<input id="form_usuario" type="text" name="usuario" class="form-control" placeholder="Por Favor introduce el Nombre de usuario *" required="required" data-error="Firstname is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_password">Contraseña *</label>
							<input id="form_password" type="password" name="password" class="form-control" placeholder="Por Favor introduce la Contraseña *" required="required" data-error="Valid email is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_email">Email *</label>
							<input id="form_email" type="email" name="email" class="form-control" placeholder="Por Favor introduce el email *" required="required" data-error="Valid email is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_pais">Pais *</label>
							<input id="form_pais" type="text" name="pais" class="form-control" placeholder="Por Favor introduce el pais *" required="required" data-error="Valid pais is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_comunidad">Comunidad *</label>
							<input id="form_comunidad" type="text" name="comunidad" class="form-control" placeholder="Por Favor introduce el comunidad *" required="required" data-error="Valid comunidad is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_ciudad">Ciudad *</label>
							<input id="form_ciudad" type="text" name="ciudad" class="form-control" placeholder="Por Favor introduce el ciudad *" required="required" data-error="Valid ciudad is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_fecha">Fecha de nacimiento *</label>
							<input id="form_fecha" type="date" name="fecha" class="form-control" placeholder="Por Favor introduce el fecha *" required="required" data-error="Valid fecha is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_fecha">Dirección *</label>
							<textarea id="form_fecha" type="text" name="direccion" class="form-control" placeholder="Por Favor introduce el la direccion *" required="required" data-error="Valid direccion is required."></textarea>
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<label for="form_telefono">Teléfono *</label>
							<input id="form_telefono" type="text" name="telefono" class="form-control" placeholder="Por Favor introduce el la telefono *" required="required" data-error="Valid telefono is required.">
							<div class="help-block with-errors"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-check">
							<input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
							<label class="form-check-label" for="invalidCheck3">
								Agree to terms and conditions
							</label>
							<div id="invalidCheck3Feedback" class="invalid-feedback">
								You must agree before submitting.
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row pt-3">
				<div class="col-md-6">
					<input type="submit" class="btn btn-success btn-send" value="Registrarse">
				</div>
				<div class="col-md-4">
					<a class="btn btn-primary" href="loginProfesores.php" role="button">Salir</a>
				</div>

			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-muted">
						<strong>*</strong> Campos obligatorios. 
					</div>
				</div>
			</div>

		</form>
	</div>
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="validarLoginProfesores.js"></script>
</body>
</html>