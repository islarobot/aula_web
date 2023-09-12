<!DOCTYPE html>
<html>
<head>
<title>Redirect Form To a Particular Page On Submit - Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<link href='css/redirect_form.css' rel='stylesheet' type='text/css'> <!--== Include CSS File Here ==-->
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
$db = new Sqlite3('contactes.db');
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $stm = $db->prepare("SELECT * FROM contactes where id=?");
  $stm->bindParam(1, $id);
  $res = $stm->execute();

  while ($row = $res->fetchArray()) {
      echo "<p>{$row['id']}</p><p> {$row['name']}</p><p> {$row['email']}</p>";
  }
}
?>
<div><a href="data.php">Inici</a></div>
</div>

</div>
</body>
</html>
