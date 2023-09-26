<?php
require 'conexion.php';


if(isset($_POST['login'])) {

$usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];


$sql = "SELECT * FROM datos_de_usuario WHERE nombre_usuario = '$usuario' and contraseña = '$contraseña'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
	} else {
		echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>
