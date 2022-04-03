<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>Consultar datos</title>
</head>
<?php 
require_once('consultasOfertas.php');

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
						<li class="breadcrumb-item"><a href="../indexNuevo.html">Home</a></li>
						<li class="breadcrumb-item"><a href="../indexNuevo.html">Introducir Ofertas de trabajo</a></li>
						<li class="breadcrumb-item"><a href="formularioInsertarOferta.php">Formulario para registrar Ofertas</a></li>
						<li class="breadcrumb-item active" aria-current="page">Consultar listado de Ofertas de trabajo</li>
					</ol>
				</nav>
			</div>
		<h1>Formulario para listar Ofertas de trabajo</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Referencia de la oferta</th>
					<th scope="col">Nombre de la oferta</th>
					<th scope="col">Empresa de la oferta</th>
					<th scope="col">Ciudad de la oferta</th>
					<th scope="col">Tipo de la oferta</th>
					<th scope="col">Fecha de la oferta</th>
					<th scope="col">Descripción de la oferta</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				foreach ($query as $row) {
					?>
					<tr>
						<th scope="row"><?php echo $row['id']; ?></th>
						<td><?php echo $row['referencia_oferta']; ?></td>
						<td><?php echo $row['nombre_oferta']; ?></td>
						<td><?php echo $row['empresa_oferta']; ?></td>
						<td><?php echo $row['ciudad_oferta']; ?></td>
						<td><?php echo $row['tipo_oferta']; ?></td>
						<td><?php echo $row['fecha_oferta']; ?></td>
						<td><?php echo $row['descripcion_oferta']; ?></td>
					</tr>

					<?php
				}

				?>

			</tbody>
		</table>
		<div class="row">
			<div class="col-6">
				<a class="btn btn-primary" href="formularioInsertarOferta.php" role="button">Volver a formulario de registro</a>
			</div>
			<div class="col-6">
				<a class="btn btn-primary" href="formularioInsertarOferta.php" role="button">Salir</a>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>