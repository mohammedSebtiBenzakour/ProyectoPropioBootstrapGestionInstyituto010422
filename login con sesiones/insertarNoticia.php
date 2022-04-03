<?php 


session_start();
require_once('conexion.php');


$nombre_noticia = $_POST['nombre_noticia'];

$texto_noticia = $_POST['texto_noticia'];

// $insertar = "insert into insertar_oferta ('id', 'referencia_oferta', 'nombre_oferta' , 'empresa_oferta' , 'ciudad_oferta' , 'tipo_oferta' , 'fecha_oferta' , 'fecha_actual' 'descripcion_oferta') values(NULL,'$referencia','$nombre','$empresa','$ciudad','$tipo','$fecha', CURRENT_TIMESTAMP ,'$descripcion')";

$insertar = "INSERT INTO `insertar_noticias` (`id`, `nombre_noticia`,  `texto_noticia`, `creado_el`) VALUES (NULL, '$nombre_noticia', '$texto_noticia',  CURRENT_TIMESTAMP)";

$query = mysqli_query($connection, $insertar);

if ($query) {
	echo "<script> alert('guardado correctamente');
	location.href = 'formularioInsertarNoticia.php';</script>";
}else{

	echo "no se pudo guardar los datos";
	echo mysqli_error($connection);
	echo "<script> alert('no se pudo guardar los datos');
	location.href = 'formularioInsertarNoticia.php';</script>";
}


 ?>