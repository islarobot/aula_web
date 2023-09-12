<!DOCTYPE html>
<!--
Este ejecicio muestra cómo podemos obtener un xmls simple de una web,
parsearlo como xml y utilizarlo en nuestra aplicación.

En el ejercicio nos conectamos con el servicio de dades obertes de les
illes balears para obtener los concesionarios de Alquiler de Cochbes.
-->

<?php
/* Activamos los flags para que nos muestre los errores.
Este código no debería ir en producción */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>

<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->

    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Taules de multiplicar</title>
  </head>


  <?php
function pr($data)
/* Esta función nos permite visualizar fácilmente el contenido de una
imprimiéndola en pantalla
 */
{
    echo "<pre>";
    var_dump($data); // or var_dump($data);
    echo "</pre>";
}

if(isset($_GET["num"])) {
          $num = $_GET['num'];
          if (empty($num)) {
            $num = 1;
          }
        } else {
          $num = 1;
        }

?>
  <body>

       <?php

for ($x = 1; $x <= 10; $x++) {
  echo "<p>";
  echo "{$x} x {$num} = ".$x*$num;
  echo "</p>";
}

?>
</body>
</html>
