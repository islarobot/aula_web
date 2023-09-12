<!DOCTYPE html>
<html>

<head>
    <?php include "include/header.php" ?>
    <!-- Required meta tags -->

    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Manteniment de Marques</title>
</head>


<body>

    <?php
    include "include/db.php";

    $nom = "";
    $uuid = "";
    $anyo = "";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $statement = "SELECT * FROM marques where uuid='$id'";
        
        echo "<!--\n";
        echo "sql = $statement\n";
        foreach ($pdo->query($statement) as $row) {
            $nom = $row['nom'];
            $uuid = $row['uuid'];
            $anyo = $row['anyo'];
            
            echo "$nom, $uuid; $anyo \n";
            
        }
        echo "-->\n";
    }
    ?>
    <div class="container">
        <?php
        include "include/navbar.php";
        ?>
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