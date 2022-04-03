<?php 

require_once("conexion.php");

session_start();

$perfil = $_POST['perfil'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];



// $consulta = "select usuario, count(*) as contar from registrar_usuarios where usuario = '$usuario' and clave = '$clave'";

$consulta= "select u.usuario , u.clave, u.perfil, count(*) as contar from registrar_usuarios u INNER join perfiles p on u.perfil = '$perfil' where u.usuario = '$usuario' and u.clave='$clave'";

$query = mysqli_query($connection , $consulta);

$array = mysqli_fetch_array($query);

echo $array['contar'] . " - " . $array['usuario'] . " - " . $array["perfil"];

if ($array['contar'] > 0) {

		//echo "<h1>acceso denegado</h1>";
		//echo "usuario : " . $usuario .  "  and contraseña " . $clave ;

	if ($perfil == $array['perfil'] && $usuario == $array['usuario'] && $clave = $array['clave'] && ($perfil == 'administrador' || $perfil == 'jefatura' || $perfil == 'profesor') ) {
		//	echo "correcto";
		$_SESSION['usuario'] = $usuario;
		$_SESSION['perfil'] = $perfil;
		// header("location: paginaPrincipal.php");
		header("location: paginaMenuAside.php");
	}else{
		$error = "No eres administrador";
		echo "No eres administrador";
		$_SESSION['usuario'] = $usuario;
		$_SESSION['perfil'] = $perfil;
		$_SESSION['error'] = $error;
		header("location: paginaSegundaria.php");
	}
		//header("location: paginaPrincipal.php");
}else{
		//header("location: PanelDeControl.php");
	$error = "datos incorrectos";
		//echo "usuario : " . $usuario .  "  and contraseña " . $clave ;

	$_SESSION['error'] = $error;

		header("location: loginPorPerfiles.php");
}



?>