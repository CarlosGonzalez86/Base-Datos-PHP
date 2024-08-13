<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="procesar_registro.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="cedula">Cédula:</label><br>
        <input type="text" id="cedula" name="cedula" required><br><br>
        
        <input type="submit" value="Registrar">
    </form>
</body>
</html>


 