<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>ELECCION DE PERFIL</title>
</head>
<body>

	<?php 

	session_start();

	$error = "" ;

	if (!isset($_SESSION['error'])) {
		$error = "";
	}else{

		$error = $_SESSION['error'] ;

	}
	?>
	<?php 

	require_once('conexion.php');

	$consultar = "select * from perfiles";
	$query = mysqli_query($connection, $consultar);
	$array = mysqli_fetch_array($query);


	?>
	<center>
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
						<li class="breadcrumb-item active" aria-current="page">Elección de perfiles</li>
					</ol>
				</nav>
			</div>
			<div class="row position-relative">
				<h1 class="">ELECCIÓN DE PERFIL</h1>
				<h2><?php echo $error ?></h2>
				<form class="row g-3" action="" method="POST">
					<div class="row d-flex justify-content-center mb-3">
						<div class="col-5 ">
							<label for="validationServer04" class="form-label">Perfil</label>
							<select class="form-select is-invalid" id="validationServer04" aria-describedby="validationServer04Feedback" required name="perfil">
								<option selected disabled value="">Eligir vuestro perfil...</option>
								<?php foreach ($query as $row) { ?>
								<option value="<?php echo $row['perfil']; ?>"><?php echo $row['perfil']; ?></option>
								<?php } ?>
							</select>
							<div id="validationServer04Feedback" class="invalid-feedback">
								Please select a valid perfil.
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center">
						<div class="col-5">
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
					<div class="col-12">
						<button class="btn btn-primary" type="submit">Enviar consulta</button>
					</div>
				</form>
			</div>
			<div class="row">
			</div>
			<div class="row p-4">
				<div class="col">
					<a class="btn btn-outline-info" href="eleccionPorPerfiles.php" role="button">Reiniciar</a>
				</div>
				<div class="col">
					<a class="btn btn-outline-success" href="crearPerfiles.php" role="button">Si no tienes perfil Pulsa aquí</a>
				</div>
				<div class="col">
					<a class="btn btn-outline-warning" href="../indexNuevo.html" role="button">Volver</a>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<script type="text/javascript" src="validarLoginProfesores.js"></script>
	</center>

</body>
</html>