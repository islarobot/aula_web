<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo get</title>
    </head>
    <!-- cos-->

    <body>

        <?php
    // Agafam les variables del get del navegador
    $texte = isset($_GET["texte"]) ? $_GET["texte"] : "";
    /// -----------------------------------------
    // comprovarem si tenim dades o no ----------
    if ($texte==""){
        $tengo_datos = false; // això ho canviarem
    } else {
        $tengo_datos = true;
    }    
    ?>

        <form action="input.php" method="get">
            <label for="texte">Texte*</label>
            <input id="texte" type="color" name="texte" placeholder="escriu un texte" required
                value="<?php echo $texte?>">

            <input type="submit" value="Enviar">

        </form>
        <hr>

        <?php
    if($tengo_datos==true) {
        echo "Has escrit $texte";
          } else {
            echo "Introdueix les dades<br>";
          }     
     ?>
        <hr>
    </body>

</html>