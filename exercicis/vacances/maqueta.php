<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Clasificación</title>
</head>
<body>
<h1><strong>Clasificación</strong></h1>
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Equipo</th>
      <th scope="col">PJ</th>
      <th scope="col">Puntos</th>
    </tr>
  </thead>
  <tbody>
<?php
    $clasif = array(
        array ('1', 'Real Madrid','14', '31'),
        array ('2', 'Sevilla','14', '30'),
        array ('3', 'FC Barcelona','13', '28'),
        array ('4', '...','...', '...'),
    );
            echo "</tr>";
            foreach ($clasif as $clasificación){
                $num = $clasificación[0];
                $equipos = $clasificación[1];
                $pj = $clasificación[2];
                $puntos = $clasificación[3];
                echo "<tr>";
                echo "<td>$num</td>";
                echo "<td>$equipos </td>";
                echo "<td>$pj</td>";
                echo "<td>$puntos </td>"; 
                echo "</tr>";
            }
           echo'<td  colspan="4" class="table-info text-success"><strong><center>Nota: Resultados en domingo</center></strong></td>';
            echo "</table>";
?>  
    
    </tr>
  </tbody>
</table>
</body>
</html>