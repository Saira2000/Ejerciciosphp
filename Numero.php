<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario para pedir numero por pantalla</title>
    <style>
        
        ul {
            display: inline-block;
            margin: 0;
            padding: 0;
        }
        ul li {
            display: inline;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <p>Formulario de numeros</p>
    <fieldset>
    <form action="" method="get">
        <label for="numero">Ingrese un número:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit" value="Enviar">
    </form>

    <?php
    //Comprobar si se ha enviado por GET como pide la tarea

        if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        echo "<h3>Análisis del número: $numero</h3>";
        
        // Conversión del número
        echo "<p>Representación en:</p>";
        echo "<ul>";
        echo "<li>Binario: " . decbin($numero) . "</li>";
        echo "<li>Octal: " . decoct($numero) . "</li>";
        echo "<li>Hexadecimal: " . dechex($numero) . "</li>";
        echo "</ul>";

        // Cálculo de divisores
        echo "<p>Divisores:</p>";
        echo "<ul>";
        for ($i = 1; $i <= $numero; $i++) {
            if ($numero % $i == 0) {
                echo "<li>$i</li>";
            }
        }
        echo "</ul>";
    }
    ?>
    </fieldset>
</body>
</html>