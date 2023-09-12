<!DOCTYPE html>
<html>

    <head>
        <title>Mantenimient de marques</title>
        <meta content="noindex, nofollow" name="robots">
        <?php include "include/header.php" ?>
        <!--== Include CSS File Here ==-->
    </head>

    <body>

        <?php
include "include/db.php";
?>
<div class="container">
        <h2>Segur que vols borrar</h2>
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
    }
}
  echo "<p>$nom</p>";
  echo '<form action="confirm_delete.php" method="POST" >';
  echo "<input type='hidden' id='uuidId' name='uuid' value='$uuid'>";
  echo "<input id='btn' name='submit' type='submit' value='Borrar'>";
  echo "<H1><a href='index.php'>NO</a></H1>";
  echo "</form>";
}

?>
</div>
<?php include "include/footer.php" ?>
    </body>

</html>