<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/ocultarTd.css">
	<title>Modificar datos</title>
</head>
<?php 
session_start();
require_once('conexion.php');

$id = $_GET['id'];

echo $id;

$consultar = "SELECT * FROM registrar_alumnos  WHERE dni_alumno = '$id'";
$query = mysqli_query($connection, $consultar);

$consultarNiv = "select * from nivel_instituto";
$queryNiv = mysqli_query($connection, $consultarNiv);
$arrayNiv = mysqli_fetch_array($queryNiv);

?>

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
					<li class="breadcrumb-item"><a href="indexNuevo.php">Home</a></li>
					<li class="breadcrumb-item"><a href="indexNuevo.php">Administración</a></li>
					<li class="breadcrumb-item"><a href="paginaMenuAside.php">Pagina Principal</a></li>
					<li class="breadcrumb-item active" aria-current="page">Consultar listado de Personal No Docente</li>
				</ol>
			</nav>
		</div>
		<h1>MODIFICAR PERSONAL NO DOCENTE</h1>
		
		
		<?php 
		while ($row = mysqli_fetch_assoc($query)) {

			?>

			<div class="container d-flex justify-content-center mb-3">

				<form action="procesar_modificarAlumnos.php" method="POST" class="form-control w-50" enctype="multipart/form-data">

					

					<div class="d-flex justify-content-around mb-3 mt-3">
						<label for="dni_alumno" class="form-label mt-3">Foto alumno: </label>
						<img style="width: 100px;" src="../imagenesAlumnos/<?php echo $row['imagen_alumno']; ?>"  alt="...">
					</div>

					<div class="mb-3 mt-3 d-flex justify-content-center">
							<div class="row w-75">
								<input class="file-input form-control"  name="imagen_alumno" type="file"   id="" >
							</div>
					</div>
						

					<div class="mb-3 mt-3">
						<label for="dni_alumno" class="form-label">DNI:</label>
						<input type="text" value="<?php echo $row['dni_alumno']; ?>" readonly class="form-control" id="dni_alumno" placeholder="DNI" name="dni_alumno" >
					</div>
					<div class="mb-3">
						<label for="nombre_alumno" class="form-label">Nombre:</label>
						<input type="text" value="<?php echo $row['nombre_alumno']; ?>" class="form-control" id="nombre_alumno" placeholder="Nombre" name="nombre_alumno">
					</div>
					<div class="mb-3">
						<label for="primer_apellido_alumno" class="form-label">Primer Apellido:</label>
						<input type="text" value="<?php echo $row['primer_apellido_alumno']; ?>" class="form-control" id="primer_apellido_alumno" placeholder="Apellidos" name="primer_apellido_alumno">
					</div>
					<div class="mb-3">
						<label for="segundo_apellido_alumno" class="form-label">Segundo Apellido:</label>
						<input type="text" value="<?php echo $row['segundo_apellido_alumno']; ?>" class="form-control" id="segundo_apellido_alumno" placeholder="Apellidos" name="segundo_apellido_alumno">
					</div>
					<div class="mb-3">
						<label for="email_alumno" class="form-label">Email:</label>
						<input type="email" value="<?php echo $row['email_alumno']; ?>" class="form-control" id="email_alumno" placeholder="Email" name="email_alumno">
					</div>
					<div class="mb-3">
						<label for="nivel_alumno" class="form-label">Nivel:</label>
						<select class="form-select" name="nivel_alumno" id="nivel_alumno">
							<?php foreach ($queryNiv as $rowNiv) { ?>
								<option value="<?php echo $rowNiv['nombre_nivel']; ?>" <?php echo $row['nivel_alumno'] == $rowNiv['nombre_nivel'] ? 'selected' : ''; ?> ><?php echo $rowNiv['nombre_nivel']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="mb-3">
						<label for="telefono_alumno" class="form-label">Teléfono:</label>
						<input type="text" value="<?php echo $row['telefono_alumno']; ?>" class="form-control" id="telefono_alumno" placeholder="Teléfono" name="telefono_alumno">
					</div>
					
					<div class="container d-flex justify-content-center">
						<button type="submit" name="modificar"  class="btn btn-warning">Modificar</button>
					</div>

				</form>

			</div>
			<?php
		}

		?>
<div class="container d-flex justify-content-center mb-3">
		<div class="row">
			<div class="col-10">
				<a class="btn btn-primary" href="paginaMenuAside.php" role="button">Volver a la pagina principal</a>
			</div>
			
			<div class="col-2">
				<a class="btn btn-primary" href="indexNuevo.php" role="button">Salir</a>
			</div>
			
		</div>
</div>	
	</div>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>