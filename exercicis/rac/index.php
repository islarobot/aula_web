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
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Rent A Car</title>
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

if (!$xml = file_get_contents("https://catalegdades.caib.cat/api/views/w8ef-kbr8/rows.xml?accessType=DOWNLOAD")) {
    echo "No se ha podido cargar el archivo";
} else {
    /*
    Carregam l'arxiu, el parsejam i cream un nou arrai indexat amb els noms
    de cada localitat. Fem servir el valor per guardar el nombre de vegades
    que apareix cada municipi.

    Fixau-uvos en com comprovam si ja s'ha assignat l'element a l'array.
     */
    $xml = new SimpleXMLElement($xml);
    $root = $xml->row;
    $municipis = array();
    /* pr($root); */
    foreach ($root->row as $item) {
        $key = (String) $item->municipi;
        if (array_key_exists($key, $municipis)) {
            $municipis[$key] += 1;
        } else {
            $municipis[$key] = 1;
        }

    }
    /* ordenam l'array */
    ksort($municipis);
}
?>
  <body>
    <div class="container">
      <div class="row">
      <div class="col">
        <h2><?php echo "Rent a Car"; ?></h2>
        <h3><a href="llista.php">Llistat</a></h3>
      </div>
     <table class="table">
     <thead>
       <tr>
         <th scope="col">Municipi</th>
         <th scope="col">Num</th>
       </tr>
     </thead>
     <tbody>
       <?php
foreach ($municipis as $municipi => $num) {
    echo '<tr>';
    echo "<td><a href='llista.php?codi={$municipi}'>{$municipi}</a></td>";
    echo '<td>', $num, '</td>';
    echo '</tr>';
}
?>
     </tbody>
     </table>
     <?php echo "<p>(c) Exercicis de l'aula </p>"; ?>
      </div>
</div>
</body>
</html>
