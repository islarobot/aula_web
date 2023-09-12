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
    $bebida = isset($_GET["bebida"]) ? $_GET["bebida"] : "";
    /// -----------------------------------------
    // comprovarem si tenim dades o no ----------
    if ($bebida==""){
        $tengo_datos = false; // això ho canviarem
    } else {
        $tengo_datos = true;
    }    
    ?>

        <form action="radio.php" method="get">
            <p>Seleccione qué va a beber: </p>
            <p>
                <label for="refresco">Refresco</label>
                <input type="radio" name="bebida" value="refresco" id="refresco"
                    <?php echo ($bebida=="refresco"? "checked": ""); ?>>

            </p>
            <p>
                <label for="cocacola">Agua</label>
                <input type="radio" name="bebida" value="agua" id="agua"
                    <?php echo ($bebida=="agua"? "checked": ""); ?>>
            </p>
            <p>
                <label for="vino">Vino</label>
                <input type="radio" name="bebida" value="vino" id="vino"
                    <?php echo ($bebida=="vino"? "checked": ""); ?>>
            </p>
            <p> <label for="gaseosa">Gaseosa</label>
                <input type="radio" name="bebida" value="gaseosa" id="gaseosa"
                    <?php echo ($bebida=="gaseosa"? "checked": ""); ?>>
            </p>
            <p><input type="submit" value="Enviar"></p>


        </form>
        <hr>

        <?php
    if($tengo_datos==true) {
        echo "Has elegido <strong>$bebida</strong>";
          } else {
            echo "Seleccina tu bebida<br>";
          }     
     ?>
        <hr>
    </body>

</html>