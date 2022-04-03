<?php 


session_start();
require_once('conexion.php');

$referencia = $_POST['referencia'];
$nombre = $_POST['nombre'];
$empresa = $_POST['empresa'];
$ciudad = $_POST['ciudad'];
$tipo = $_POST['tipo'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];

// $insertar = "insert into insertar_oferta ('id', 'referencia_oferta', 'nombre_oferta' , 'empresa_oferta' , 'ciudad_oferta' , 'tipo_oferta' , 'fecha_oferta' , 'fecha_actual' 'descripcion_oferta') values(NULL,'$referencia','$nombre','$empresa','$ciudad','$tipo','$fecha', CURRENT_TIMESTAMP ,'$descripcion')";

$insertar = "INSERT INTO `insertar_oferta` ( `ciudad_oferta`, `descripcion_oferta`, `empresa_oferta`, `fecha_actual`, `fecha_oferta`, `nombre_oferta`, `referencia_oferta`, `tipo_oferta`) VALUES ('$ciudad', '$descripcion', '$empresa', CURRENT_TIMESTAMP ,'$fecha', '$nombre', '$referencia','$tipo')";

$query = mysqli_query($connection, $insertar);

if ($query) {
	echo "<script> alert('guardado correctamente');
	location.href = 'formularioInsertarOferta.php';</script>";
}else{

	echo "no se pudo guardar los datos";
	echo "<br>" . $nombre;
	echo "<br>" . mysqli_error($connection);
	echo "<script> alert('no se pudo guardar los datos');
	location.href = 'formularioInsertarOferta.php';</script>";
}


 ?>