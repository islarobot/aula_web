<!DOCTYPE html>
<?php error_reporting(E_ALL);?>
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
        <style></style>
        <!-- fi -->
        <title>Concessionari Balear</title>
    </head>
    <?php
if (!$xml = simplexml_load_file('data/cotxes.xml')) {
    echo "No se ha podido cargar el archivo";
}
?>

    <body>
        <div class="container">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Cotxes</th>
                            <th scope="col">Matricules</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$num = 0;
$marques = 0;

function print_td($valor) {
  echo "<td>$valor</td>";
}

foreach ($xml->marca as $marca) {
    echo '<tr>';
    print_td($marca['nom']);
    print_td($marca['numero']);
    echo '<td>';
    
    foreach ($marca->cotxe as $coche) {
        $assegurat = (string) $coche['assegurat'];
        $pos = strpos($assegurat, "S");
        if ($pos === false) {
            echo "<strong>";
        } else {
            $assegurat = "";
        }
        echo "<p>$coche->estat</p>";
        echo $coche->matricula, ' (', $coche->matriculacio, ')<br/>';
        if ($pos === false) {
            echo "</strong>";
        }
    }
    echo '</td>';
    echo '</tr>';
    $num = $num + intval($marca['numero']);
    $marques++;
}
?>
                    </tbody>
                </table>
                <?php echo "<p>Hi ha {$marques} marques y {$num} cotxes</p>" ?>

            </div>
        </div>
    </body>

</html>