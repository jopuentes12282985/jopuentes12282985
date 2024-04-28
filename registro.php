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
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Insertar datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, correo, contrasena) VALUES ('$nombre', '$correo', '$contrasena')";

if (mysqli_query($conexion, $sql)) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conexion);
}

mysqli_close($conexion);
?>
