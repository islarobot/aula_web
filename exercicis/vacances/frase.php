<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Frase</title>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Frase</h1>
                    <p>Compta el nombre de volcals vàlides d'una frase</p>
                    <form method="get" action="frase.php">
                        <span>Frase: </span><input type="text" placeholder="Introduce la frase" name="frase"
                            <?php if (isset($_GET['frase'])) echo "value='".urldecode($_GET['frase'])."'"?>>
                        <button type="submit" class="btn btn-primary">Contar</button>
                    </form>
                    <?php 
    $frase = strtoupper($_GET["frase"]);
    $longitud = strlen($frase);
    $vocals = array('A','À','E', 'È', 'É','I','Í','Ï','O','Ò','Ó','U','Ú','Ü');
    $counter = 0;
    for ($i = 0; $i < $longitud;$i++){
        if (in_array($frase[$i], $vocals)) {
            $counter++;
        }
    }
    $porcentaje = round($counter*100/$longitud);
    if ($frase){    
        echo "<br>";
        echo "A <strong>". $frase ."</strong>  hi ha ".$counter." vocals amb un total de " .$longitud." lletres que és un ".$porcentaje."%";
    }
    else{
        echo "Pon la frase";
    }
    ?>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>