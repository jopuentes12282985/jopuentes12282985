<?php
// Conexión a la base de datos (reemplaza los valores con los tuyos)
$host = "localhost";
$usuario = "tu_usuario";
$contrasena = "tu_contrasena";
$base_de_datos = "tu_base_de_datos";

$conexion = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Recibir datos del formulario
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Consultar usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) == 1) {
    echo "Inicio de sesión exitoso";
} else {
    echo "Error: Correo electrónico o contraseña incorrectos";
}

mysqli_close($conexion);
?>
