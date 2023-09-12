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
    $xml = new SimpleXMLElement($xml);
    $root = $xml->row;
    /* pr($root); */
}
?>
  <body>
    <div class="container">
    <?php
    if(isset($_GET["codi"])) {
        $localitat = $_GET['codi'];
        } else {
          $localitat = "";
        }
        ?>
    <div>
     <a href="index.php">Resum</a>
     </div>
      <div class="row">
      <div class="col">
       <h2><?php echo "Rent a Car ".$localitat; ?></h2>

      </div>
     <table class="table">
     <thead>
       <tr>
         <th scope="col">Nom</th>
         <?php
          if (empty($localitat)){
            echo "<th scope=\"col\">Municipi</th>";
          }
         ?>
         <th scope="col">Estat</th>
       </tr>
     </thead>
     <tbody>
       <?php
foreach ($root->row as $item) {
    $municipi = $item->municipi;
    if ($localitat === "") {
      echo '<tr>';
      echo '<td>', $item->denominaci_comercial, '</td>';
      echo '<td>', $municipi, '</td>';
      echo '<td>', $item->estat, '</td>';
      echo '</tr>';
    } else {
      if ($municipi == $localitat) {
        echo '<tr>';
        echo '<td>', $item->denominaci_comercial, '</td>';
        echo '<td>', $item->estat, '</td>';
        echo '</tr>';
        }
    }
}
?>
     </tbody>
     </table>
     <div>
     <a href="index.php">Resum</a>
     </div>
     <?php echo "<p>(c) Exercicis de l'aula </p>"; ?>
      </div>
</div>
</body>
</html>
