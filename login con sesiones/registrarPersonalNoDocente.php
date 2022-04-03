<?php 


session_start();
require_once('conexion.php');

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];

$departamento = $_POST['departamento'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];


$insertar = "INSERT INTO `personal_no_docente` (`dni`, `nombre`, `apellidos`, `usuario`, `clave`, `email`, `departamento`, `direccion` ,  `ciudad` , `pais`, `fecha` , `telefono` , `fecha_registro`) VALUES ('$dni', '$nombre','$apellidos','$usuario','$password','$email', '$departamento', '$direccion', '$ciudad', '$pais' , '$fecha', '$telefono', CURRENT_TIMESTAMP)";




//echo "el usuario " . $fila['usuario'];

	$query = mysqli_query($connection, $insertar);

	if ($query) {
		echo "guardado correctamente";
		echo "<script> alert('Registro Guardado correctamente');
		location.href = 'formularioRegistrarPersonalNoDocente.php';</script>";
	}else{

		echo "no se pudo guardar los datos";
		echo "<script> alert('No se pudo guardar los datos por que  el DNI introducido ya está registrado en la base de datos');
		location.href = 'formularioRegistrarPersonalNoDocente.php';</script>";
	}













?>