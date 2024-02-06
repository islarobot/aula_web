<?php



$con = new mysqli('localhost', 'root', '', 'employees');

print("<table border=1>
<tr><td>Nombre</td><td>Apellido</td></tr>

");


$query = "SELECT first_name, last_name FROM employees LIMIT 10";

   $res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
   if ($res) {
      while ($row = mysqli_fetch_row($res)) {
         print("<tr>");
	 print("<td>".$row[0]."</td>");
         print("<td>".$row[1]."</td>");
	 print("</tr>");
      }
   }


print("</table>");

?>
