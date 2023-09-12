<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Cargando</title>
        <style>
        body {
            padding-left: 5px;
        }

        .form {
            padding: 5x;
        }

        .spinner-border {
            display: flex;
            align-items: center;
            margin-left: 200px;
        }
        </style>
    </head>

    <body>
        <div class="container">
            <?php
if (isset($_GET['num'])) {
    $num = $_GET['num'];} else { $num = 0;}
    ?>
            <h2>Status</h2>
            <form class="form" method="get" action="status.php">
                <input type="number" name="num" value="<?php echo "$num";?>" min="0" max="100">
                <input type="submit" value="Enviar">

            </form>
            <?php 
 
    echo '<br>';
    if ($num<100){
        echo '<div class="progress" style="height:20px; width:500px" >';
        echo '<div class="progress-bar" style="width:'.$num.'%;height:20px">'.$num.'%</div>';
        echo '</div>';  
    }
    elseif ($num == 100){
        echo '<div class="progress" style="height:20px; width:500px" >';
        echo '<div class="progress-bar" style="width:'.$num.'%;height:20px">'.$num.'%</div>';
        echo '</div>';  
        echo 'Carga completa';
    }
    elseif ($num <100){
        echo 'ERROR';
    }
    elseif ($num >-1){
        echo 'ERROR';
    }
    else
    ?>
        </div>
    </body>

</html>