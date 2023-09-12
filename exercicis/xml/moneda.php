<!DOCTYPE html>
<!--
Este ejecicio muestra cómo podemos obtener un xmls simple de una web,
parsearlo como xml y utilizarlo en nuestra aplicación.

En el ejercicio nos conectamos con el servicio de cambio de moneda del banco
central europeo, obtenemos el XML y lo mostramos por pantalla
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
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous" />
        <!-- El teu css -->

        </style>
        <!-- fi -->
        <title>Canvi de Moneda</title>
    </head>


    <?php
function pr($data)
/* Esta función nos permite visualizar fácilmente el contenido de una
imprimiéndola en pantalla
 */
{
    echo "<pre>";
    var_dump($data); 
    echo "</pre>";
}

if (!$xml = file_get_contents("https://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml")) {
    echo "No se ha podido cargar el archivo";
} else {

    $xml = new SimpleXMLElement($xml);
    $root = $xml->Cube->Cube;
    $dia = $root['time'];
    /*pr($xml->Cube->Cube->Cube['currency']);*/
}
?>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2><?php echo "Cambio del dia: {$dia}"; ?></h2>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Moneda</th>
                            <th scope="col">Cambio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

foreach ($root->Cube as $item) {
    $moneda = (string) $item['currency'];
    $canvi = (string) $item['rate'];
    echo '<tr>';
    echo '<td>', $moneda, '</td>';
    echo '<td>', $canvi, '</td>';
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