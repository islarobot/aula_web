<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de radio button</title>
    </head>
    <!-- cos-->

    <body>

        <?php
    // Agafam les variables del get del navegador
    $refresco = isset($_GET["refresco"]) ? $_GET["refresco"] : "";
    $agua = isset($_GET["agua"]) ? $_GET["agua"] : "";
    $vino = isset($_GET["vino"]) ? $_GET["vino"] : "";
    $gaseosa = isset($_GET["gaseosa"]) ? $_GET["gaseosa"] : "";
    /// -----------------------------------------
    // comprovarem si tenim dades o no ----------
    if (($refresco=="") and ($agua=="") and ($vino=="") and ($gaseosa=="")){
        $tengo_datos = false; // això ho canviarem
    } else {
        $tengo_datos = true;
    }    
    ?>

        <form action="check.php" method="get">
            <p>Seleccione qué va a beber: </p>
            <p>
                <label for="refresco">Refresco</label>
                <input type="checkbox" name="refresco" value="refresco" id="refresco"
                    <?php echo ($refresco=="refresco"? "checked": ""); ?>>

            </p>
            <p>
                <label for="cocacola">Agua</label>
                <input type="checkbox" name="agua" value="agua" id="agua" <?php echo ($agua=="agua"? "checked": ""); ?>>
            </p>
            <p>
                <label for="vino">Vino</label>
                <input type="checkbox" name="vino" value="vino" id="vino" <?php echo ($vino=="vino"? "checked": ""); ?>>
            </p>
            <p> <label for="gaseosa">Gaseosa</label>
                <input type="checkbox" name="gaseosa" value="gaseosa" id="gaseosa"
                    <?php echo ($gaseosa=="gaseosa"? "checked": ""); ?>>
            </p>
            <p><input type="submit" value="Enviar"></p>


        </form>
        <hr>

        <?php
    if($tengo_datos==true) {
        echo "Has elegido: <br>";
        echo "<ul>";
        if ($refresco=="refresco") { 
            echo "<li>$refresco</li>";
        }
        if ($agua=="agua") { 
            echo "<li>$agua</li>";
        }
        if ($vino=="vino") { 
            echo "<li>$vino</li>";
        }
        if ($gaseosa=="gaseosa") { 
            echo "<li>$gaseosa</li>";
        }
        echo "</ul>";
          } else {
            echo "Selecciona tus bebidas<br>";
          }     
     ?>
        <hr>
    </body>

</html>