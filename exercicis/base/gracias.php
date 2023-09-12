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
     $telefono = isset($_GET["telefono"]) ? $_GET["telefono"] : "";
     $importe = isset($_GET["importe"]) ? $_GET["importe"] : 1;
     
        if (($telefono !="") and ($importe!="") ) {
        $tengo_datos = true;
     } else {
        $tengo_datos = false;
     }
    
    ?>
        <h1>Visssum</h1>
        <p>Dinero enviado</p>
        <?php
     if($tengo_datos==true) {
        echo "<hr>";
        echo "Hola, he enviado $importe al tel $telefono <br>";
          }  
     ?>
    </body>

</html>