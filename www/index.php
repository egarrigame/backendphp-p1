<!DOCTYPE html>
<html>
<head>
    <title>Mi primer PHP con Docker</title>
</head>
<body>
    <h1>¡HOLA MUNDO!</h1>
    <?php
    echo "<p>Versión PHP: " . phpversion() . "</p>";
    echo "<p>Fecha: " . date('d/m/Y H:i:s') . "</p>";
    
    $conexion = @new mysqli("db", "root", "root", "mi_proyecto", 3306);
    if ($conexion->connect_error) {
        echo "<p style='color:red'>Error MySQL: " . $conexion->connect_error . "</p>";
    } else {
        echo "<p style='color:green'>¡Conectado a MySQL!</p>";
        $conexion->close();
    }
    ?>
</body>
</html>