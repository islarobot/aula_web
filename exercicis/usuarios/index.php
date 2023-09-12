<!DOCTYPE html>
<?php error_reporting(E_ALL);?>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!-- El teu css -->
    <style></style>
    <!-- fi -->
    <title>Usuarios</title>
  </head>
  <?php
if (!$xml = simplexml_load_file('data/usuarios.xml')) {
    echo "No se ha podido cargar el archivo";
    die();
}
?>
  <body>
    <div class="container">
      <div class="row">
     <table class="table">
     <thead>
       <tr>
         <th scope="col">Nombre</th>
         <th scope="col">Telefono</th>
         <th scope="col">web</th>
       </tr>
     </thead>
     <tbody>
       <?php
$num = 0;
foreach ($xml as $usuario) {
    echo '<tr>';
    echo '<td>', $usuario->apellido, ', ', $usuario->nombre, '</td>';
    echo '<td>', $usuario->contacto[0]->telefono, '</td>';
    echo '<td>', $usuario->contacto->residencia->nom, '</td>';
    echo '<td>', $usuario->contacto->residencia->nom["num"], '</td>';
    echo '<td> <a href="', $usuario->contacto->url, '">', $usuario->contacto->url, '</td>';
    echo '</tr>';
    $num += 1;
}
?>
     </tbody>
     </table>
     ko
      </div>
</div>
</body>
</html>
