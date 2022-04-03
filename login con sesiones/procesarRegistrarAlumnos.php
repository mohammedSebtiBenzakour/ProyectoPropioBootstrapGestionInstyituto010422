<?php 


session_start();
require_once('conexion.php');

// if (!isset(>$_SESSION['administrador'])) {
// 	$administrador = "";
// } else {
// 	$administrador = $_SESSION['administrador'];
// }

$imagen_alumno = $_FILES['imagen_alumno']['name'];
$tipo = $_FILES['imagen_alumno']['type'];
$tamano = $_FILES['imagen_alumno']['size'];

echo "la imagen" . $imagen_alumno . "<br>";

//Si la imgaen existe y tiene un tamaño correcto

if (!empty($imagen_alumno) && ($_FILES['imagen_alumno']['size'] <= 5000000)) {
	//Indico los formatos permitidos para subir al servidor
	if (($_FILES['imagen_alumno']['type'] == "image/gif")
     || ($_FILES['imagen_alumno']['type'] == "image/jpeg")
     || ($_FILES['imagen_alumno']['type'] == "image/jpg")
     || ($_FILES['imagen_alumno']['type'] == "image/png")) {
		// la ruta donde se va a guardar las imagenes que se suban
		$directorio = "../imagenesAlumnos/";
		//Muevo la imagen desde el directorio temporal a nuestra ruta indicada antes
		move_uploaded_file($_FILES['imagen_alumno']['tmp_name'], $directorio.$imagen_alumno);
	}else{
		// si el formato no es el adecuado
		echo "No se puede subir una imagen con ese formato.";
	}
} else {
	// si existe la variable pero se pasa del tamaño permitido
	 if($imagen_alumno == !NULL) echo "La imagen es demasiado grande "; 
}


$dni_alumno = $_POST['dni_alumno'];
$nombre_alumno = $_POST['nombre_alumno'];
$primer_apellido_alumno = $_POST['primer_apellido_alumno'];
$segundo_apellido_alumno = $_POST['segundo_apellido_alumno'];
$genero = $_POST['genero'];
$fecha_nacimiento_alumno = $_POST['fecha_nacimiento_alumno'];
$email_alumno = $_POST['email_alumno'];
$telefono_alumno = $_POST['telefono_alumno'];

$nivel_alumno = $_POST['nivel_alumno'];
$calle_alumno = $_POST['calle_alumno'];
$ciudad_alumno = $_POST['ciudad_alumno'];
$cp_alumno = $_POST['cp_alumno'];
$pais_alumno = $_POST['pais_alumno'];


echo $genero . "<br>";

$insertar = "INSERT INTO `registrar_alumnos` (`imagen_alumno`, `dni_alumno`, `nombre_alumno`, `primer_apellido_alumno`, `segundo_apellido_alumno`, `genero`, `fecha_nacimiento_alumno`, `email_alumno`,  `telefono_alumno`, `nivel_alumno` , `calle_alumno` ,   `ciudad_alumno`, `cp_alumno`, `pais_alumno` , `creado_el`) VALUES ('$imagen_alumno','$dni_alumno','$nombre_alumno','$primer_apellido_alumno','$segundo_apellido_alumno', '$genero', '$fecha_nacimiento_alumno', '$email_alumno' , '$telefono_alumno', '$nivel_alumno' , '$calle_alumno',  '$ciudad_alumno', '$cp_alumno', '$pais_alumno' ,  CURRENT_TIMESTAMP)";


//echo "el usuario " . $fila['usuario'];


	$query = mysqli_query($connection, $insertar);

	if ($query) {

		$_SESSION['dni_alumno'] = $_POST['dni_alumno'] ;

		echo "guardado correctamente";
		echo "<script> alert('Registro Guardado correctamente');
		location.href = '../registrarAlumnos.php';</script>";
	}else{

		echo "no se pudo guardar los datos";
		echo "<script> alert('No se pudo guardar los datos');
		location.href = '../registrarAlumnos.php';</script>";
	}

	












?>