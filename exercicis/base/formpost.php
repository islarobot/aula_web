<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo POST</title>
    </head>
    <!-- cos-->

    <body>

        <?php
    // Agafam les variables del get del navegador
    // normalment posarem com a nom de la variable el paràmetre que 
    // ve del get, però ho podeu canviar. 
    // En el codi agafam els valors amb `$POST`, si hi són els utilitzam
    // i si no posam un valor per defecte per tenir sempre la variable
    // inicialitzada, és a dir, amb un valor inicial, i que PHP no es queixi
    // de que la variable no està definida.

   
     $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
     $llinatge = isset($_POST["llinatge"]) ? $_POST["llinatge"] : "";
     $edat = isset($_POST["edat"]) ? $_POST["edat"] : 18;
     $cars = isset($_POST["cars"]) ? $_POST["cars"] : "";
    

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

        <form action="formpost.php" method="post">
            Nom*: <input type="text" name="nom" value="<?php echo $nom; ?>" required><br>
            Llinatge*: <input type="text" name="llinatge" required value="<?php echo $llinatge; ?>"><br>
            Edat*: <input type="number" name="edat" required value="<?php echo $edat; ?>"><br>
            <label for="cars">Tria un cotxe:</label>
            <select id="cars" name="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>

            <input type="submit" value="Enviar">
        </form>

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
    </body>

</html>