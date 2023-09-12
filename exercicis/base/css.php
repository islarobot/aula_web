<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo css</title>
        <!-- CSS only -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <!-- cos-->

    <body>
        <div class="container-fluid">
            <h1 style="color:brown;">Ejemplo con selectores</h1>

            <?php
    // Agafam les variables del get del navegador
   
    /// --------c---------------------------------
    

    // comprovarem si tenim dades o no ----------

    $tengo_datos = false; // això ho canviarem

    // -------------------------------------------
    
    ?>

            <form action=" formget.php" method="get">
                <!-- aqui posarem el que volem provar -->




                <!- ------------------------------------>

                    <input type="submit" class="btn btn-primary  btn-sm"" value=" Enviar">
            </form>

            <hr>

            <?php
    // podem mirar si ens han posat nom o dades en general, si és així
    // imprimim la salutació, en cas contrari demanam que es faci.
    
    if($tengo_datos==true) {

        // imprimim els valors
         
          } else {

            echo "<p>Introdueix les dades</p>";
 
          }     
     ?>
            <hr>


            <p id="primer">Pellentesque habitant morbi <span class="test"> tristique senectus et netus et malesuada
                    fames ac</span> turpis egestas.</p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>Pellentesque habitant morbi tristique senectus et <span id="primer" class="grande">hola</span>netus
                et
                malesuada fames ac
                <a href="https://aulabalear.org">Aula balear</a> turpis
                egestas.
            </p>
            <p>Pellentesque <span class=" test">habitant</span> morbi tristique senectus et netus et malesuada fames
                ac
                turpis
                egestas.
            </p>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <p>Pellentesque habitant <span class="test grande">morbi</span> tristique senectus et netus et malesuada
                fames
                ac
                turpis
                egestas.</p>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

</html>