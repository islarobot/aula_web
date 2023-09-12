<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo get en textarea</title>
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

        <form action="textarea.php" method="get">
            <label for="texte">Texte*</label>
            <textarea id="texte" name="texte" rows="5" cols="33"><?php echo $texte;?></textarea>

            <input type="submit" value="Enviar">

        </form>
        <hr>

        <?php
    if($tengo_datos==true) {
        echo "Has escrit <p>$texte</p>";
          } else {
            echo "Introdueix les dades<br>";
          }     
     ?>
        <hr>
    </body>

</html>