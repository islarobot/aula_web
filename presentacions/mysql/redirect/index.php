 <!DOCTYPE html>
<html>
    <!--
Aquest programa fa servir una base de dades mysql/mariadb.
El nom de la base de dades ha de ser: escola
taula: contactes amb (name, email, contact, address)
-->

    <head>
        <title>Exemple de redirect after post</title>
        <meta content="noindex, nofollow" name="robots">
        <link href='css/redirect_form.css' rel='stylesheet' type='text/css'>
        <!--== Include CSS File Here ==-->
    </head>

    <body>
        <?php
/* Activam els flas per a que ens mostri els errors */
ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>


        <div class="main">
            <div class="first">
                <h2>Guarda les dades i redirecciona</h2>
                <form action="index.php" id="#form" method="post" name="#form">
                    <label>Nom :</label>
                    <input id="name" name="name" placeholder='El teu nom' required type='text'>
                    <label>Email :</label>
                    <input id="email" name="email" placeholder='Adreça de correu vàlida' required type='email'>
                    <label>Contacte :</label>
                    <input id="contact" name="contact" placeholder='Contacte' required type='text'>
                    <label>Adreça postal:</label>
                    <input id="address" name="address" placeholder='Adreça' required type='text' value="">
                    <input id='btn' name="submit" type='submit' value='Guardar'>

                </form>
            </div>
        </div>

        <?php
if(isset($_POST['submit'])){

  $pdo = new PDO('mysql:host=localhost;dbname=escola;charset=utf8', 'root', '');

  // Obtenim les variables
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];

  // Preparam la sentència SQL
  // el prepare evita injecció d'sql
  
  $stm = $pdo->prepare("INSERT INTO contactes(name, email, contact, address) VALUES (?, ?, ?,?)");
  $stm->bindParam(1, $name);
  $stm->bindParam(2, $email);
  $stm->bindParam(3, $contact);
  $stm->bindParam(4, $address);
  $stm->execute();

  
  /* això no és bona pràctica */
  $last_row_id = $pdo->lastInsertId();
  //  To redirect form on a particular page
  header("Location: thanks.php?id=".$last_row_id);
  }
  else {
    // Aqui hi pot anar el codi extra quan fem un get
    echo "<div class='main'>";
    echo "<h1>Cridada per GET</h1>";
    echo "</div>";
  }
?>
    </body>

</html>