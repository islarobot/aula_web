<!DOCTYPE html>
<!--
  Aquest codi té un error de seguretat
  això no s'ha de fer així, ja que pot comprometre
  la seguretat de l'aplicació.
  Es posa per mostrar db, parametres i redirect
  -->
<html>

    <head>
    <?php include "include/header.php" ?>
        <title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
        <meta content="noindex, nofollow" name="robots">
        <!--== Include CSS File Here ==-->
    </head>

    <body>
    <?php
include "include/db.php";
?>
        <div class="container">
        <?php
        include "include/navbar.php";
        ?>
            <div class="row">
                <div class="col">
                <h2>Gràcies</h2>
                

                <?php
$nom="";
$uuid="";
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
      echo "<p> $nom</p>";
      echo "<p>$anyo</p>";
      echo "<p><a href='edit.php?id=".$uuid."'>Editar</a></p>";
  
}
?>
                <div><a href="index.php">Anar al Llistat</a></div>
            </div><!--col -->

        </div><!--row-->
</div><!-- continer-->
        <?php include "include/footer.php" ?>
    </body>

</html>