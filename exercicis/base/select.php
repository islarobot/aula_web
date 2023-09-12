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
        $tengo_datos = false; 
    } else {
        $tengo_datos = true;
    }    
    ?>

        <form action="select.php" method="get">
            <label for="bebida">¿Qué vas a beber?:</label>

            <select name="bebida" id="bebida">
                <option value="">--selecciona tu bebida--</option>
                <option value="vino" <?php echo ($bebida=="vino"? "selected": ""); ?>>Vino</option>
                <option value="refresco" <?php echo ($bebida=="refresco"? "selected": ""); ?>>Refresco</option>
                <option value="gaseosa" <?php echo ($bebida=="gaseosa"? "selected": ""); ?>>Gaseosa</option>
                <option value="agua" <?php echo ($bebida=="agua"? "selected": ""); ?>>Agua</option>
            </select>

            <p><input type="submit" value="Enviar"></p>


        </form>
        <hr>

        <?php
    if($tengo_datos==true) {
        echo "Has elegido: $bebida<br>";
        
          } else {
            echo "Selecciona tus bebidas<br>";
          }     
     ?>
        <hr>
    </body>

</html>