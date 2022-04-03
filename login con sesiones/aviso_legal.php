<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="description" content="Gestión de un instituto">
    <meta name="keywords" content="instituto, profesores, alumnos, notas, materias, matriculas, listados">
    <meta name="author" content="Mohammed Sebti Benzakour">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://fonts.googleapis.com/css2?family=Corinthia:wght@700&family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css"  href="../css/estiloMenuAside.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Gestión de un Instítuto</title>
</head>
<body>
<div class="container">
	<div class="row">
			<div class="col ">
				<nav class="navbar navbar-expand-lg navbar-light  bg-light ">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">Menu</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
							<ul class="navbar-nav">
								
								
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
										Juegos Educativos
									</a>
									<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
										<li><a class="dropdown-item" href="../Encuesta/encuesta.php">Encuesta</a></li>
										<li><a class="dropdown-item" href="http://localhost:8080/ElAhorcadoJavaServlet/index.jsp">El ahorcado</a></li>
										<li><a class="dropdown-item" href="http://localhost:8080/p2/index.jsp">Juego de las parejas</a></li>
										<li><a class="dropdown-item" href="http://localhost:8080/EvaluacionExamen2/">Multiplicación de matrices</a></li>
										<li><a class="dropdown-item" href="http://localhost:8080/SopaDeLetras/index.jsp">La sopa de letras</a></li>
										<li><a class="dropdown-item" href="http://localhost:8080/EvaluacionExamen1/">Mostrar temperatura</a></li>
										<li><a class="dropdown-item" href="../calculadora/calculadora.html">Calculadora</a></li>
										<li><a class="dropdown-item" href="../MohammedSebtiBenzakour_sopaLetrasDireccion/sopaLetrasDireccion/sopaLetrasDireccion.html">Sopa de letra aleatoria Entorno cliente</a></li>
										<li><a class="dropdown-item" href="../MohammedSebtiBenzakour_sopaLetrasDireccionIntroducidaManual/sopaLetrasDireccionIntroducidaManual/sopaLetrasDireccionIntroducidaManual.html">Sopa de letra manual Entorno cliente</a></li>
									</ul>
								</li>
							
								<li class="nav-item">
									<a class="nav-link" href="calendario.html">Calendario</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="col pt-2">
				<form class="d-flex">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
					<button class="btn btn-outline-success" type="submit">Search</button>
				</form>
			</div>

		</div>
		<div class="row">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="../indexNuevo.php">Home</a></li>
					<li class="breadcrumb-item"><a href="loginPorPerfiles.php">Login General</a></li>
					<li class="breadcrumb-item active" aria-current="page">Pagina Principal</li>
				</ol>
			</nav>
		</div>
		<div class="row">
			<div class="col-2 d-flex justify-content-start ">
				<img class="shadow p-3 mb-5 bg-body rounded rounded-circle" src="../img/logoInstituto.jpg" alt="Logo del Instituto" width="100px">
			</div>
			<div class="col-8 ">
				<h1>Bienvenido : <?php echo $usuario; ?> </h1>
				<h3>Tu perfil es : <?php echo $perfil; ?></h3>
				<h3></h3>
			</div>
		</div>
</div>

<script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>