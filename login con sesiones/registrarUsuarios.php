<?php 


session_start();
require_once('conexion.php');
require_once('valorSeguro.php');

$dni = $_POST['dni'];
$dni = valorSeguro($dni);


$valido = dni($dni);

if ($valido) {
	echo "dni correcto";
} else {
	echo "dni Incorrecto";
}


$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$password = $_POST['password'];
$email = $_POST['email'];

$departamento = $_POST['departamento'];
$perfil = $_POST['perfil'];

$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$pais = $_POST['pais'];

$fecha = $_POST['fecha'];
$telefono = $_POST['telefono'];


$insertar = "INSERT INTO `registrar_usuarios` (`dni`, `nombre`, `apellidos`, `usuario`, `clave`, `email`, `departamento`, `direccion` ,  `ciudad` , `pais`, `fecha` , `telefono` , `fecha_registro`, `perfil`) VALUES ('$dni', '$nombre','$apellidos','$usuario','$password','$email', '$departamento', '$direccion', '$ciudad', '$pais' , '$fecha', '$telefono', CURRENT_TIMESTAMP, '$perfil')";




//echo "el usuario " . $fila['usuario'];

	$query = mysqli_query($connection, $insertar);

	if ($query) {
		echo "guardado correctamente";
	//	echo "<script> alert('Registro Guardado correctamente');
	//	location.href = 'formularioRegistrar.php';</script>";
	}else{

		echo "no se pudo guardar los datos";
	//	echo "<script> alert('No se pudo guardar los datos por que  el DNI introducido ya está registrado en la base de datos');
	//	location.href = 'formularioRegistrar.php';</script>";
	}



function dni($dni){
  $letra = substr($dni, -1);
  $numeros = substr($dni, 0, -1);
  $valido;
  if (substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
    $valido=true;
  }else{
    $valido=false;
  }

  return $valido;
}









?>