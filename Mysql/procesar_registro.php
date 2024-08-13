<?php
$host = "localhost";
$usuario = "root";
$contrasena = "";
$base_de_datos = "dep_seguridad";

// Conectar a la base de datos
$enlace = mysqli_connect($host, $usuario, $contrasena, $base_de_datos);

// Verificar la conexión
if (!$enlace) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$nombre = mysqli_real_escape_string($enlace, $_POST['nombre']);
$cedula = mysqli_real_escape_string($enlace, $_POST['cedula']);

// Insertar los datos en la base de datos
$sql = "INSERT INTO usuarios (nombre, cedula) VALUES ('$nombre', '$cedula')";

if (mysqli_query($enlace, $sql)) {
    echo "Registro exitoso.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

// Cerrar la conexión
mysqli_close($enlace);
?>
