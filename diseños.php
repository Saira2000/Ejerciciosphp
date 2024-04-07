<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de diseño</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<fieldset>
    <form action="controles-formularios-2-14-2.php" method="get">
    <p>Escriba los datos siguientes:</p>

    <table>
      <tr>
        <td>
          <label>
            <strong>Nombre:</strong><br>
            <input type="text" name="nombre" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <label>
            <strong>Apellidos:</strong><br>
            <input type="text" name="apellidos" size="20" maxlength="20">
          </label>
        </td>
        <td>
          <strong>Edad:</strong><br>
          <select name="edad">
            <option>...</option>
            <option value="1">Menos de 20 años</option>
            <option value="2">Entre 20 y 39 años</option>
            <option value="3">Entre 40 y 59 años</option>
            <option value="4">60 años o más</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>
          <label>
            <strong>Peso:</strong><br>
            <input type="number" name="peso" min="1" max="250"> kg
          </label>
        </td>
        <td>
          <strong>Sexo:</strong><br>
          <label><input type="radio" name="genero" value="hombre">Hombre</label>
          <label><input type="radio" name="genero" value="mujer">Mujer</label>
        </td>
        <td>
          <strong>Estado Civil:</strong><br>
          <label><input type="radio" name="estadoCivil" value="soltero">Soltero</label>
          <label><input type="radio" name="estadoCivil" value="casado">Casado</label>
          <label><input type="radio" name="estadoCivil" value="otro">Otro</label>
        </td>
      </tr>
    </table>

    <table style="border-spacing: 5px;">
      <tr>
        <td rowspan="2" class="borde"><strong>Aficiones:</strong></td>
        <td><label><input type="checkbox" name="cine">Cine</label></td>
        <td><label><input type="checkbox" name="literatura">Literatura</label></td>
        <td><label><input type="checkbox" name="tebeos">Tebeos</label></td>
      </tr>
      <tr>
        <td><label><input type="checkbox" name="deporte">Deporte</label></td>
        <td><label><input type="checkbox" name="musica">Música</label></td>
        <td><label><input type="checkbox" name="television">Televisión</label></td>
      </tr>
    </table>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <?php
// Verificar si se envió el formulario
if (isset($_GET['nombre'])) {
  // Obtener datos del formulario
  $nombre = $_GET['nombre'];
  $apellidos = $_GET['apellidos'];
  $edad = $_GET['edad'];
  $peso = $_GET['peso'];
  $genero = $_GET['genero'];
  $estadoCivil = $_GET['estadoCivil'];
  $aficiones = array(); // Arreglo vacío para almacenar aficiones seleccionadas

  // Revisar si alguna casilla de verificación está marcada y agregarla al arreglo
  if (isset($_GET['cine'])) {
    $aficiones[] = "Cine";
  }
  if (isset($_GET['literatura'])) {
    $aficiones[] = "Literatura";
  }
  // ... (repetir para otras casillas de verificación)

  // Preparar mensaje de salida
  $mensaje = "<h2>Datos del formulario</h2>";
  $mensaje .= "<p>Nombre: $nombre</p>";
  $mensaje .= "<p>Apellidos: $apellidos</p>";
  $mensaje .= "<p>Edad: ";

  // Convertir selección de edad a texto basado en el valor
  switch ($edad) {
    case 1:
      $mensaje .= "Menos de 20 años";
      break;
    case 2:
      $mensaje .= "Entre 20 y 39 años";
      break;
    case 3:
      $mensaje .= "Entre 40 y 59 años";
      break;
    case 4:
      $mensaje .= "60 años o más";
      break;
  }

  $mensaje .= "</p>";
  $mensaje .= "<p>Peso: $peso kg</p>";
  $mensaje .= "<p>Sexo: $genero</p>";
  $mensaje .= "<p>Estado Civil: $estadoCivil</p>";
  $mensaje .= "<p>Aficiones: ";

  // Mostrar aficiones seleccionadas
  if (empty($aficiones)) {
    $mensaje .= "Ninguna seleccionada";
  } else {
    $mensaje .= implode(", ", $aficiones); // Unir elementos
  }

  $mensaje .= "</p>";

  // Mostrar el mensaje.
  echo $mensaje;
} else {
  // Si el formulario no se ha enviado, mostrar un mensaje
  echo "<p>El formulario no se ha enviado.</p>";
}
?>
</fieldset>
</body>
</html>