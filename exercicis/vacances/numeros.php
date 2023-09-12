<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Comparacions</title>

    </head>

    <body>
        <?php
if (isset($_GET['num1'])) {
    $num1 = $_GET['num1'];} else { $num1 = 0;}
    if (isset($_GET['num2'])) {
        $num2 = $_GET['num2'];} else { $num2= 0;}
    ?>

        <div class="container">
            <div class="row">
                <h1>Són iguals?</h1>
                <form method="get" action="numeros.php">
                    Num1: <input type="number" name="num1" value="<?php echo $num1 ?>" title="Només números">
                    Num2: <input type="number" name="num2" value="<?php echo $num2 ?>" title="Només números">
                    <input type="submit" value="Comparar">
                </form>
            </div>
            <div>

                <?php

echo "num1 = " . $num1 . " , num2 = " . $num2 . " ->";
if ($num1 < $num2) {
    echo "El primer es menor que el segon";
} elseif ($num1 > $num2) {
    echo "El primer es major que el segon";
} elseif ($num1 == $num2) {
    echo "Són iguals";
} elseif ($num1 = "" && $num2 = "") {
    echo "No s'ha trobat un número";
} else {
    echo "Sols puc comparar números";
}
?>
            </div>
        </div>
    </body>

</html>