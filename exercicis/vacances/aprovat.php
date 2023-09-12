<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>He aprovat?</title>
        <style>
        body {
            font-size: large;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        h1 {
            text-align: center;
            font-weight: bold;
        }

        .caja {
            width: 800px;
            background-color: grey;
            margin: 10px;
            padding: 15px;
            padding-top: -8px;
        }

        .section {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #petit {
            background-color: burlywood;
            color: black;
            width: 150px;
            margin: -16px;
        }

        #gran {
            padding-left: 30px;
        }

        .iz {
            float: left;
            width: 300px;
        }

        .der {
            float: right;
            width: 300px;
        }

        .nota {
            display: inline-table;
            width: 10px;
        }

        #nota {
            width: 120px;
        }

        p {
            font-weight: bold;
            display: flex;
            justify-content: flex-end;
        }

        li {
            padding: 12px;
            background-color: #E9ECEF;
            list-style: none;
            float: left;
            padding: auto;
        }

        a {
            color: black;
            text-decoration: none;
        }
        </style>
    </head>

    <body>
        <div>
            <ul>
                <li><a href="./aprovat.php" class="link-primary">Inici</a></li>
                <li><a href="#" class="link-secondary">/</a></li>
                <li><a href="#" class="link-primary">Alumne</a></li>
                <li><a href="#" class="link-secondary">/</a></li>
                <li><a href="#" class="link-secondary">Nota</a></li>
            </ul>
        </div>
        <br>
        <br>
        <div class="caja">
            <form method="get" action="aprovat.php">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-1" id="petit">
                            <span>Completa el formulari de la <strong>dreta</strong> i pitja sobre el botó d'enviar quan
                                hagis acabat</span>
                        </div>
                        <div class="col" id="gran">
                            <h1>Fitxa d'Alumne</h1>
                            <div class="section iz">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" placeholder="Nom" aria-label="First name"
                                    name="nom" id="nom" <?php if (isset($_GET['nom'])) echo "value=".$_GET['nom'];?>>
                            </div>
                            <div class="section der">
                                <label for="llinatges">Llinatges</label>
                                <input type="text" class="form-control" placeholder="Llinatges" aria-label="Last name"
                                    name="llinatges" id="llinatges"
                                    <?php if (isset($_GET['llinatges'])) echo "value=".$_GET['llinatges'];?>>
                            </div>
                            <br>
                            <div class="section nota">
                                <span for="nota">Nota</span>
                                <input type="number" min=0 max=10 class="form-control" placeholder="Nota" name="nota"
                                    id="nota" <?php if (isset($_GET['nota'])) echo "value=".$_GET['nota'];?>>
                            </div>
                            <div class="control">
                                <button type="submit" class="btn btn-primary">Avaluar</button>
                            </div>


            </form>
            <?php
                    if (isset($_GET['nota'])) {
                        $nota = $_GET ["nota"];
                        $nom = $_GET ["nom"];
                        $llina = $_GET ["llinatges"];
                        echo "<hr>";
                        echo "<p>Alumne/a: $nom  $llina </p>";
                        echo "<p>Nota: $nota</p><br>";
                        if ($nota<5){
                            echo "<p>SUSPÈS</p>";
                        }
                        elseif ($nota<7){
                            echo "<p>APROVAT</p>";
                        }
                        elseif ($nota<9){
                            echo "<p>NOTABLE</p>";
                        }elseif ($nota<10){
                            echo "<p>EXCEL·LENT</p>";
                        }
                        elseif ($nota<11){
                            echo "<p>ENHORABONA</p>";
                        }
                        else {
                            echo "<p>ERROR</p>";
                        }
                }
                ?>
        </div>
        </div>
        </div>
        </div>
    </body>

</html>