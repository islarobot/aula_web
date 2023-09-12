<!DOCTYPE html>
<html>

    <head>
        <title>Mantenimient de marques</title>
        <?php include "include/header.php" ?>
        <meta content="noindex, nofollow" name="robots">
        <!--== Include CSS File Here ==-->
    </head>

    <body>

        <?php
include "include/db.php";

$nom="";
$uuid="";
$anyo ="";
if (isset($_GET['id'])){
  $id = $_GET['id'];
  $statement = $pdo->prepare("SELECT * FROM marques where uuid=?");
  $statement->bindParam(1, $id);
  if ($statement->execute()) {

  foreach ($statement->fetchAll() as $row) {
     $nom = $row['nom'];
     $uuid = $row['uuid'];
     $anyo = $row['anyo'];
  }
}
}
?>
        <div class="container">

            <div>
                <p><a href="index.php">Llista de Marques</a></p>
            </div>
            <div class="first">
                <h2> Marques</h2>
                <form action="save.php" id="#form" method="post" name="#form">
                    <label>Nom de la marca :</label>
                    <input id="name" name="nom" placeholder='Nom de la Marca' type='text' value="<?php echo $nom ?> ">
                    <input id="anyo" name="anyo" placeholder='año' type='number' value="<?php echo $anyo ?>">
                    <input type="hidden" id="uuidId" name="uuid" value="<?php echo $uuid ?>">
                    <input id='btn' name="submit" type='submit' value='Guardar'>

                    
                </form>
            </div>
        </div>
        <?php include "include/footer.php" ?>
    </body>

</html>