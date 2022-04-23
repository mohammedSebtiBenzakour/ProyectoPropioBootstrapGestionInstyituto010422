<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>Consultar datos</title>
</head>
<?php 
require_once('conexion.php');

$consultar = "select * from personal_no_docente";
$query = mysqli_query($connection, $consultar);
$array = mysqli_fetch_array($query);

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
						<li class="breadcrumb-item"><a href="loginPorPerfiles.php">Login para Profesores</a></li>
						<li class="breadcrumb-item"><a href="paginaMenuAside.php">Pagina Principal</a></li>
						<li class="breadcrumb-item active" aria-current="page">Consultar listado de Profesores Registrados</li>
					</ol>
				</nav>
			</div>
		<h1>LISTADO DE PERSONAL NO DECENTE</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">DNI</th>
					<th scope="col">Nombre</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Email</th>
					<th scope="col">Teléfono</th>
					<th scope="col">Departamento</th>
					<th scope="col">Modificar</th>
					<th scope="col">Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($query as $row) {
					?>
					<tr>
						<td ><?php echo $row['dni']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['apellidos']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<td><?php echo $row['departamento']; ?></td>
						<td><a class="btn btn-warning" href="modificarPersonalNoDocente.php?id=<?php echo $row['dni']; ?>">modificar</a> </td>
						<td><a class="btn btn-danger" href="eliminarPersonalNoDocente.php?id=<?php echo $row['dni']; ?>">eliminar</a></td>
					</tr>

					<?php
				}

				?>

			</tbody>
		</table>
		<div class="row">
			<div class="col-4">
				<a class="btn btn-primary" href="formularioRegistrarPersonalNoDocente.php" role="button">Volver a formulario de registro</a>
			</div>
			<div class="col-4">
				<a class="btn btn-primary" href="paginaMenuAside.php" role="button">Volver a pagina principal</a>
			</div>
			<div class="col-4">
				<a class="btn btn-primary" href="indexNuevo.php" role="button">Salir</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>