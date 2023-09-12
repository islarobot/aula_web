<?php
include "include/db.php";
if(isset($_POST['submit'])){
    $stm = $pdo->prepare("DELETE FROM marques where  uuid=?");
    $uuid=$_POST['uuid'];
    $stm->bindParam(1, $uuid);
    if($stm->execute()) {
      header("Location: index.php");
  } else {
    echo "<h2>Hi ha un error borrant la marca</h2>";
  }
  }
  ?>