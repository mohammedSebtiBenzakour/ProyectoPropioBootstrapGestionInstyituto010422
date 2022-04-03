<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-select.min.css">
	<link rel="stylesheet" type="text/css" href="../css/registrarAlumnos.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Registrar Alummnos</title>
</head>
<body>
	<center>
		<?php 
		session_start();
		require_once('conexion.php');

		$usuario = $_SESSION['usuario'] ;
		$perfil = $_SESSION['perfil'] ;
		if (!isset($usuario) || !isset($perfil)) {
			header("location: loginProfesores.php");
		}else{

// 	echo "<h1>Bienvenido : $usuario </h1>";

// echo "<h2></h2>";
		}


		if (!isset($_SESSION['dni_alumno'])) {
	//header("location: EjercicioClaseBootstrap.php");
			$dni_alumno = "";
		}else{
			$dni_alumno = $_SESSION['dni_alumno'] ;
	//echo "<h1>Bienvenido : $email </h1>";

// echo "<h2></h2>";
		}
		?>
		<?php 

		$consultar = "select * from nivel_instituto";
		$query = mysqli_query($connection, $consultar);
		$array = mysqli_fetch_array($query);


		?>
		<div class="container">
			<div class="row pt-3  w-75">
				<div class="col-12 pb-4">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<div class="container-fluid">
							<a class="navbar-brand" href="#">Registrar Alummnos</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Datos de la persona conectada
										</a>
										<ul class="dropdown-menu p-2" aria-labelledby="navbarScrollingDropdown">
											<li>Bienvenido : <?php echo $usuario; ?> </li>
											<li>Tu perfil es : <?php echo $perfil; ?></li>
										</ul>
									</li>
								</ul>
								<form class="d-flex">
									<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
									<button class="btn btn-outline-success" type="submit">Search</button>
								</form>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="../indexNuevo.php">Home</a></li>
							<li class="breadcrumb-item"><a href="paginaMenuAside.php">Administración</a></li>
							<li class="breadcrumb-item active" aria-current="page">Registrar Alumnos</li>
						</ol>
					</nav>
				</div>
			</div>
			<div class="row " >
				<div class="col">
					<h1>El Instituto</h1>
					<h2>Formulario de registro de alumnos</h2>
					<div class="form-wrapper  w-100">
						<form action="procesarRegistrarAlumnos.php" method="POST" enctype="multipart/form-data">
							<div class="form-item">
								<div class="fichero">
									<label for="fullname">Imagen del alumno:</label>
									<input type="file" name="imagen_alumno" id="" required>
									<span>(menor de 5 Mb)</span>
								</div>
							</div>
							<div class="form-item">
								<label for="dni_alumno">DNI Alumno:</label>
								<input type="text" name="dni_alumno" id="dni_alumno" placeholder="DNI Alumno" required>
							</div>
							<div class="form-item">
								<label for="fullname">Nombre Alumno:</label>
								<input type="text" name="nombre_alumno" id="fullname" placeholder="Nombre Alumno" required>
							</div>
							<div class="form-item">
								<label for="fathersname">Primer Apellido:</label>
								<input type="text" name="primer_apellido_alumno" id="fathersname" placeholder="Primer Apellido" required>
							</div>
							<div class="form-item">
								<label for="mothersname">Segundo Apellido:</label>
								<input type="text" name="segundo_apellido_alumno" id="mothersname" placeholder="Segundo Apellido" required>
							</div>

							<div class="form-item">
								<label for="gender">Genero:</label>
								<div class="genders">
									<p>Hombre</p> <input type="radio" name="genero" id="gender" value="hombre" required>
									<p>Mujer</p> <input type="radio" name="genero" id="gender" value="mujer">
									<p>Otros</p> <input type="radio" name="genero" id="gender" value="otros">
								</div>
							</div>
							<div class="form-item">
								<label for="fecha_nacimiento_alumno">Fecha de Nacimiento</label>
								<input type="date" name="fecha_nacimiento_alumno" id="fecha_nacimiento_alumno" required>
							</div>
							<div class="form-item">
								<label for="email">E-mail:</label>
								<input type="email" name="email_alumno" id="email" placeholder="email@xyz.com" required>
							</div>
							<div class="form-item">
								<label for="pphonenumber">Tel/Movil:</label>
								<input type="tel" name="telefono_alumno" id="pphonenumber" placeholder="XXX XXX XXX" required>
							</div>
							<div class="form-item">
								<label for="level">Nivel:</label>
								<select name="nivel_alumno" id="level">
									<option selected disabled value="">Elegir nivel educativo...</option>
									<?php foreach ($query as $row) { ?>
										<option value="<?php echo $row['nombre_nivel']; ?>"><?php echo $row['nombre_nivel']; ?></option>
									<?php } ?>
								</select>
							</div>
							<hr>
							<h3>Dirección de Contacto</h3>
							<div class="form-item">
								<label for="calle_alumno">Calle:</label>
								<input type="text" name="calle_alumno" id="calle_alumno" placeholder="Calle" required>
							</div>
							<div class="form-item">
								<label for="pcity">Ciudad:</label>
								<input type="text" name="ciudad_alumno" id="pcity" placeholder="Ciudad" required>
							</div>
							<div class="form-item">
								<label for="pzip">Codigo Postal:</label>
								<input type="number" name="cp_alumno" id="pzip" placeholder="Codigo Postal" required>
							</div>
							<div class="form-item">
								<label for="pstate">Pais:</label>
								<input type="text" name="pais_alumno" id="pstate" placeholder="Pais" required>
							</div>
							<hr>
							<button class="btn btn-primary register" type="submit">Registrar</button>
							<a class="btn btn-primary" href="../indexNuevo.php" role="button">Salir</a>
							<a class="btn btn-success ms-4" href="paginaMenuAside.php" role="button">Volver</a>
						</form>
					</div>
				</div>
				<div class="col-12">
					
				</div>
			</div>
		</div>
		<script type="text/javascript" src="../js/registrarALumnos.js"></script>
		<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
	</center>
</body>
</html>