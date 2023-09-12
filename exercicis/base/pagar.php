<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>BIZU</title>
    </head>
    <!-- cos-->

    <body>

        <?php
     $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
     $importe = isset($_POST["importe"]) ? $_POST["importe"] : 1;
     if ($telefono !="" ) {
        $tengo_datos = true;
     } else {
        $tengo_datos = false;
     }
    ?>
        <h1>Visssum</h1>
        <p>Envia dinero a un móvil</p>
        <form action="pagar.php" method="POST">
            telefono*: <input type="text" name="telefono" value="<?php echo $telefono; ?>" required><br>

            importe (en euros)*: <input type="number" name="importe" required value="<?php echo $importe; ?>"><br>

            <input type="submit" value="Enviar">
        </form>
        <?php
     if($tengo_datos==true) {
        // si todo va bien vamos a las gracias
        header("Location: " . "gracias.php?telefono=$telefono&importe=$importe");
          }  
     ?>
    </body>

</html>