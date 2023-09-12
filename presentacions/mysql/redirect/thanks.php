<!DOCTYPE html>
<html>

    <head>
        <title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
        <meta content="noindex, nofollow" name="robots">
        <link href='css/redirect_form.css' rel='stylesheet' type='text/css'>
        <!--== Include CSS File Here ==-->
    </head>

    <body>
        <?php
/* Activamos los flags para que nos muestre los errores.
Este código no debería ir en producción */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
        <div class="main">
            <div class="first">
                <h2>Gràcies</h2>
                <?php

$pdo = new PDO('mysql:host=localhost;dbname=escola;charset=utf8', 'root', '');

if(isset($_GET['id'])){
  $id = $_GET['id'];
  $sql="SELECT * FROM contactes where id=:id";
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue(':id', $id);
  $stmt->execute();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>{$row['id']}</p><p> {$row['name']}</p><p> {$row['email']}</p>";
  }

}
?>
                <div><a href="index.php">Inici</a></div>
            </div>

        </div>
    </body>

</html>