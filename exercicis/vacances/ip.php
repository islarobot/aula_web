<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Localización de IP</title>
        <style>
        body {
            margin: 10px;
        }
        </style>
    </head>

    <body>
        <div class="container">
            <h1><strong>Localización IP Pública</strong></h1>
            <form method="get" action="ip.php">
                <strong>IP Pública:</strong> <input class="searchbox" type="text" name="ip"
                    <?php if (isset($_GET['ip'])) echo "value='".urldecode($_GET['ip'])."'"?>>
                <button type="submit" class="btn btn-primary">Buscar</button>
            </form>
            <?php ;
    if (isset($_GET['ip'])) {
        $ip = $_GET ['ip'];
        $content = file_get_contents("http://api.geoiplookup.net/?query=".$ip."");
    } else {
        $content = file_get_contents("http://api.geoiplookup.net/");
    }
    if ($content){
        $xml = simplexml_load_string($content);  
        foreach ($xml as $info) {
            $result = $info->result;
            $ip = $result->ip;
            echo "<strong>IP: </strong>" .$ip." <br>";
            echo "<strong>País: </strong>" .$result->countryname."<br>";
            echo "<strong>Proveidor: </strong>" .$result->isp."<br>";
        }    
    }   
    else {
        echo "<span>".$ip."</span> </br>";
        echo "<strong>La dirección IP es privada o esta mal puesto</strong>";
    }
    ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
    </body>

</html>