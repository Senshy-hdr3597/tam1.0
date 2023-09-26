<?php
require 'conexion.php';

if(isset($_POST['registro'])) {

$usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['contraseña'];
$correo = $_POST['correo'];

$sql = "INSERT INTO datos_de_usuario (id, nombre_usuario, contraseña, correo) VALUES (null, '$usuario', '$contraseña', '$correo')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		?>
		 <h3>¡Se insertaron los datos correctamente!</h3>
		 <?php
	} else {
		?>
		 <h3>¡No se puede insertar la informacion!</h3>
		 <?php
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>