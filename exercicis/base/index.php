<?php
/* Exemple de plana web que mostra com poder fer servir un formulari GET
per obtenir informació i manipular-la dins la mateixa plana
*/
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exemple de form GET</title>
    </head>

    <body>
        <h1>Hola món!</h1>

        <?php 
        $nom = isset($_GET['nom']) ? $_GET['nom'] : null;
        if (isset($_GET['v'])){
            $v = (int)$_GET['v'];
            $v++;
        } else {
            $v =0;
        }
        ?>
        <form action="." method="GET">
            Nom: <input type="text" name="nom" value="<?php echo $nom?>"><br>
            <input type="hidden" name="v" value="<?php echo $v;?>">
            <input type="submit" value="saluda">
        </form>
        <?php
        /* comprovam que hi ha els paràmetres i fem la feina */
        if (isset($_GET['nom'])){
            echo "<hr>";
            echo "Com va $nom? <br>";
            echo "Num $v";

        }
        ?>
    </body>

</html>