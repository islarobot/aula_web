<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo get</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <head>
            <!-- cos-->

        <body>
            <div class="container">
                <div class="row">
                    <?php
    // Agafam les variables del get del navegador
    // normalment posarem com a nom de la variable el paràmetre que 
    // ve del get, però ho podeu canviar. 
    // En el codi agafam els valors amb `$GET`, si hi són els utilitzam
    // i si no posam un valor per defecte per tenir sempre la variable
    // inicialitzada, és a dir, amb un valor inicial, i que PHP no es queixi
    // de que la variable no està definida.

   
     $nom = isset($_GET["nom"]) ? $_GET["nom"] : "";
     $llinatge = isset($_GET["llinatge"]) ? $_GET["llinatge"] : "";
     $edat = isset($_GET["edat"]) ? $_GET["edat"] : 18;
     $cars = isset($_GET["cars"]) ? $_GET["cars"] : "";
    

     // aisí si no s'ens passa l'edat el valor que agafam per defecte
     // és 18.

    // podem definir una variable que ens indiqui si tenim o no totes les
    // dades que necessitam, comprovant els continguts de les variables.
    // nosaltres ho fem amb $tengo_datos

    if (($nom !="" ) and ($llinatge != "")) {
        $tengo_datos = true;
     } else {
        $tengo_datos = false;
     }
    

    // definim el formulari. En el nostre cas enviam la informacio
    // a la mateixa plana, que hem anomenat formget.php 
    // fixau-vos com establir el valor dels inputs per a que agafin 
    // el valor de les variables que hem definit un poc més adalt. 

    ?>
                    <div class="col-1">
                        <p>hola caracola</p>
                    </div>
                    <div class="col-8">

                        <form action=" formget.php" method="get">

                            <div class="row">
                                <div class="col">
                                    Nom*: <input type="text" name="nom" value="<?php echo $nom; ?>" required><br>
                                    Llinatge*: <input type="text" name="llinatge" required
                                        value="<?php echo $llinatge; ?>">



                                </div>
                                <div class="col">
                                    <div class="row">
                                        Edat*: <input type="number" name="edat" required value="<?php echo $edat; ?>">
                                    </div>
                                    <div class="row">
                                        <label for="cars">Choose a car:</label>
                                        <select id="cars" name="cars">
                                            <option value="volvo">Volvo</option>
                                            <option value="saab">Saab</option>
                                            <option value="fiat">Fiat</option>
                                            <option value="audi">Audi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <input type="submit" value="Enviar" class="btn btn-primary">

                            </div>
                        </form>
                    </div>
                    <hr>

                    <?php
    // podem mirar si ens han posat nom o dades en general, si és així
    // imprimim la salutació, en cas contrari demanam que es faci.
    
    if($tengo_datos==true) {

        echo "Hola $nom $llinatge <br>";
        echo "Tens $edat anys <br>";
        echo "I t'agrada $cars <br>"; 
          } else {
            echo "Introdueix nom i llinatges<br>";
 
          }     
     ?>
                    <hr>
                </div>
            </div>
            <!--contaiiner -->
            < </body>

</html>

</html>