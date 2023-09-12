<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Caixa de super</title>
        <style>
        body {
            margin: 40px 100px;
            color: white;
            background-color: #378F05;
        }

        h1 {
            text-align: center;
            font-family: 'Times New Roman';
            font-size: 90px;
            font-weight: bold;
        }

        hr {
            border: 2px solid white;
        }

        .caja {
            border: 3px solid white;
            background-color: #005B15;
            margin: 0px;
            padding: 98px;
        }

        span {
            text-align: center;
            font-weight: bold;
            font-size: 40px;
        }

        h3 {
            padding-top: 10px;
        }

        .total {
            font-weight: bold;
            text-align: end;
        }

        .form-control {
            width: 200px;
            margin-bottom: 5px;
        }

        @media (max-width:1000px) {
            h1 {
                font-size: 60px;
            }

            .row {
                font-size: 15px;
            }

            span {
                text-align: center;
                font-weight: bold;
                font-size: 20px;
            }

            input {
                width: 10px;
            }

            .caja {
                padding: 70px;
            }
        }
        </style>
    </head>

    <?php

    $billetes = array('b200' => 200, 
        'b100' => 100, 
        'b50' => 50,
        'b20' => 20,
        'b10' => 10,
        'b5' => 5,
        'm1' => 1,
        'm50c' => 0.50,
        'm20c' => 0.20,
        'm10c' => 0.10,
        'm5c' => 0.02,
        'm2c' => 0.02,

    );
?>

    <body>
        <div class="caja">
            <h1>MERCADONA</h1>
            <hr>
            <br>
            <form method="post" action="super.php">
                <div class="row">
                    <div class="col">
                        <span>Billetes</span>
                        <br>
                        <?php foreach ($billetes as $nombre=>$importe) {
                        ?>


                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label">He pagado</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" class="form-control" value="0" name="<?php echo $nombre; ?>"
                                    min="0">
                            </div>
                            <div class="col-auto">
                                <label for="inputPassword6" class="col-form-label"> billetes de <?php echo $importe; ?>€
                                </label>
                            </div>
                        </div>

                        <?php
                        } // foreach
                        ?>

                        <br>
                        <button type="submit" class="btn btn-primary" name="sumar">Sumar</button>
                    </div>
            </form>
        </div>
        <br>
        <div class="total">
            <h3>Arqueo de caja</h3>
            <table class="table">
                <tr>
                    <td>Monenda</td>
                    <td>Cantidad</td>
                    <td>Subtotal</td>
                </tr>
                <?php 
            $total = 0;
            foreach ($billetes as $nombre=>$importe) {
                if ($_POST[$nombre] !=0 ) {
                    echo "<tr>";
                 $subtotal = $_POST[$nombre]*$importe;
                 echo "<td>".substr($nombre,1)."</td>";
                 echo "<td>".$_POST[$nombre]."</td>";
                 echo "<td>".$subtotal."€</td>";
                $total = $total + $subtotal;
                echo "</tr>";
                }        
            } 
            echo "</table>";
            
        echo "<h3>Total: ".$total."€ </h3>";      
       
        ?>
        </div>
    </body>

</html>