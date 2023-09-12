<?php
if(isset($_POST['submit'])){
  echo "<h1>POST</h1>";
// Fetching variables of the form which travels in URL
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $stm = $db->prepare("INSERT INTO contactes(name, email, contact, address) VALUES (?, ?, ?,?)");
  $stm->bindParam(1, $name);
  $stm->bindParam(2, $email);
  $stm->bindParam(3, $contact);
  $stm->bindParam(4, $address);
  $stm->execute();
  /* no s'ha de fer mai això */
  $last_row_id = $db->lastInsertRowID();
  //  To redirect form on a particular page
  header("Location: thanks.php?id=".$last_row_id);
  }
  else {
    echo "<h1>GET</h1>";
  }
?>
