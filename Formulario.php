<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>

    <?php
    // Verificar si se han enviado los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los datos del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Verificar el usuario y la contraseña
        if ($usuario == "admin" && $contrasena == "admin") {
            echo "<p>Inició de sesión correcto. ¡Hola $usuario!</p>";
        } elseif ($usuario == "admin") {
            echo "<p>Error: Contraseña incorrecta.</p>";
        } else {
            echo "<p>Error: El usuario '$usuario' no existe.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
