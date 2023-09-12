<!DOCTYPE html>
<?php error_reporting(E_ALL);?>
<html lang="es">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous" />
        <!-- El teu css -->
        <style></style>
        <!-- fi -->
        <title>Usuaris</title>
    </head>

    <body>
        <h1>Llista d'usuaris</h1>
        <?php

$usuarios = '<?xml version="1.0" encoding="UTF-8"?>
        <usuarios>
            <usuario id="2828" activo="true">
                <nombre>Monnie</nombre>
                <apellido>Boddie</apellido>
                <direccion>Calle Pedro Mar 12</direccion>
                <ciudad>Mexicali</ciudad>
                <pais>Mexico</pais>
                <contacto>
                    <telefono>44221234</telefono>
                    <url>http://monnie.ejemplo.com</url>
                    <email>monnie@ejemplo.com</email>
                </contacto>
            </usuario>
            <usuario id="888" activo="true">
                <nombre>Ted</nombre>
                <apellido>Gonzalez</apellido>
                <direccion>Calle Luis Angel 22</direccion>
                <ciudad>Buenos Aires</ciudad>
                <pais>Argentina</pais>
                <contacto>
                    <telefono>44224664</telefono>
                    <url>http://ted.ejemplo.com</url>
                    <email>ted@ejemplo.com</email>
                </contacto>
            </usuario>
            <usuario id="883" activo="false">
                <nombre>Rubén</nombre>
                <apellido>Pérez</apellido>
                <direccion>Calle del Valle 48</direccion>
                <ciudad>Manacor</ciudad>
                <pais>España</pais>
                <contacto>
                    <telefono>34 88822837</telefono>
                    <url>http://ruben.ejemplo.com</url>
                    <email>ruben@ejemplo.com</email>
                </contacto>
            </usuario>

        </usuarios>';

        if (!$xml = simplexml_load_string($usuarios)) {
        echo "No he pogut carregar les dades d'usuaris";
        die();
        }
        echo "<ul>";
            foreach ($xml as $usuario) {
            echo "<li>Nombre: {$usuario->nombre} {$usuario->apellido}</li>";
            echo "<ul>";
                $atributs = $usuario->attributes();
                $actiu = $atributs['activo'];
                $id = $atributs['id'];
                echo "<li>Id: $id</li>";
                echo "<li>Actiu: $actiu</li>";
                echo "<li>e-mail: {$usuario->contacto->email}</li>";
                echo "</ul>";
            }
            echo "</ul>";
        ?>
    </body>

</html>