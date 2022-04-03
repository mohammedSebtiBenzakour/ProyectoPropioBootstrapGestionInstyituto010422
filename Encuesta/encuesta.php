<?php 

include_once('ClaseEncuesta.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estiloEncuesta.css">
	<link rel="stylesheet" type="text/css" href="estiloEncuestaResto.css">
	<title>Encuesta</title>
</head>
<body>
	<center>
		<h1 class="encuesta" >Encuesta</h1>
		<h3 class="encuesta">Votar al mejor lenguaje de programación</h3>
		<form action="" method="post">
			<?php 

			$encuesta = new Encuesta();

			$mostrarResultados = false;

			if (isset($_POST['exampleRadios'])) {
				$mostrarResultados = true;
				$encuesta->setOpcionSeleccionada($_POST['exampleRadios']);
				$encuesta->votar();

			}

			//echo "<h3> votos totales : " . $encuesta->getVotosTotales() . "</h3>";
			// echo "<h3> porcentaje votos : " . $encuesta->getPorcentajeDEVotos($encuesta->getOpcionSeleccionada()) . "</h3>";

			?>


			<?php 

			if ($mostrarResultados) {
				$resultados = $encuesta->mostrarResultados();
				echo "<h3 class='encuesta'> votos totales : " . $encuesta->getVotosTotales() . "</h3>";

				foreach ($resultados as $resultado) {
					$porcentaje = $encuesta->getPorcentajeDEVotos($resultado['votos']);

					include('vistaEncuestaResultado.php');

				}
			}else{
				include('vistaEncuestaResultadoVotacion.php');

			}

			?>

		</form>

		<?php 
//ppara ver que se conect bien isin problemas
		$db = new DB();
		$db->connect();

		?>
		<button class="boton"><a href="../indexNuevo.php" class="boton" >Volver</a></button>
		<button class="boton"><a href="encuesta.php" class="boton" >Volver a votar</a></button>
	</center>
</body>
</html>