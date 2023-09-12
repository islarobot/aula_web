<?php
include "include/db.php";
if(isset($_POST['submit'])){
    // Fetching variables of the form which travels in URL
      $nom = $_POST['nom'];
      $uuid = $_POST['uuid'];
      $anyo = (int) $_POST['anyo'];
    
      if (empty($uuid)) {
        $uuid= uniqid();
        $stm = $pdo->prepare("INSERT INTO marques(nom, anyo, uuid) VALUES (?, ?, ?)");
      } else {
        $stm = $pdo->prepare("UPDATE marques SET nom=?, anyo=? WHERE uuid=?");
      }
      /* no s'ha de fer mai això */
      //  To redirect form on a particular page
      $stm->bindParam(1, $nom);
      $stm->bindParam(2, $anyo);
      $stm->bindParam(3, $uuid);
      if($stm->execute()) {
            header("Location: thanks.php?id=".$uuid);
      }
    }
?>