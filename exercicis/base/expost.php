<!DOCTYPE html>
<html>
    <!-- capçalera-->

    <head>
        <meta charset="UTF-8">
        <title>Ejemplo Post</title>
    </head>
    <!-- cos-->

    <body>

        <?php
     $nom = isset($_POST["nom"]) ? $_POST["nom"] : "";
     $llinatge = isset($_POST["llinatge"]) ? $_POST["llinatge"] : "";
     $edat = isset($_POST["edat"]) ? $_POST["edat"] : 18;
     $cars = isset($_POST["cars"]) ? $_POST["cars"] : "";
     $fav_language = isset($_POST["fav_language"]) ? $_POST["fav_language"] : "";

     if (($nom !="" ) and ($llinatge != "")) {
        $tengo_datos = true;
     } else {
        $tengo_datos = false;
     }
    ?>

        <form action="expost.php" method="POST">
            Nom*: <input type="text" name="nom" value="<?php echo $nom; ?>" required><br>
            Llinatge*: <input type="text" name="llinatge" required value="<?php echo $llinatge; ?>"><br>
            Edat*: <input type="number" name="edat" required value="<?php echo $edat; ?>"><br>
            <label for="cars">Choose a car:</label>
            <select id="cars" name="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="fiat">Fiat</option>
                <option value="audi">Audi</option>
            </select>
            <br>
            <p>Elige un lenguaje</p>
            <input type="radio" id="html" name="fav_language" value="HTML">
            <label for="html">HTML</label><br>
            <input type="radio" id="css" name="fav_language" value="CSS">
            <label for="css">CSS</label><br>
            <input type="radio" id="javascript" name="fav_language" value="JavaScript">
            <label for="javascript">JavaScript</label>
            <br>
            <p>Vehicles que condueixes</p>
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bici">
            <label for="vehicle1"> Tenc una Bici</label><br>
            <input type="checkbox" id="vehicle2" name="vehicle2" value="Cotxe">
            <label for="vehicle2"> Tenc cotxe</label><br>
            <input type="checkbox" id="vehicle3" name="vehicle3" value="Barca">
            <label for="vehicle3"> tenc una barca</label><br>
            <p>Comentaris:</p>
            <textarea id="w3review" name="comentaris" rows="10" cols="60">
    </textarea>
            <input type="submit" value="Saludar">
        </form>
        <?php
     if($tengo_datos==true) {
        echo "<hr>";
        echo "Hola $nom $llinatge <br>";
        echo "Tens $edat anys <br>";
        echo "I t'agrada $cars <br>"; 
        echo "Y el teu llenguatge de programació és $fav_language <br>";
          } else {
            echo "Introdueix nom i llinatges<br>";
 
          }     
     ?>
    </body>

</html>