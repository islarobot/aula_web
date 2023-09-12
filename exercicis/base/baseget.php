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
   
    /// -----------------------------------------
    

    // comprovarem si tenim dades o no ----------

    $tengo_datos = false; // això ho canviarem

    // -------------------------------------------
    
    ?>

        <form action="formget.php" method="get">
            <!-- aqui posarem el que volem provar -->




            <!- ------------------------------------>

                <input type="submit" value="Enviar">
        </form>

        <hr>

        <?php
    // podem mirar si ens han posat nom o dades en general, si és així
    // imprimim la salutació, en cas contrari demanam que es faci.
    
    if($tengo_datos==true) {

        // imprimim els valors
         
          } else {

            echo "Introdueix les dades<br>";
 
          }     
     ?>
        <hr>
    </body>

</html>