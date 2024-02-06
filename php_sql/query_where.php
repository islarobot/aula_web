<?php



$con = new mysqli('localhost', 'root', '', 'employees');


if($_SERVER['REQUEST_METHOD'] == "POST"){
$var = $_POST['fname'];


}else{

$var = "";
}



print(
"
<form action \"?\" method=\"post\">
<label for=\"fname\">Nombre</label>
<input type=text name = \"fname\">
<input type=\"submit\">
</form>
"
);


print("<table border=1>
<tr><td>Nombre</td><td>Apellido</td></tr>

");


$query = "SELECT first_name, last_name FROM employees WHERE first_name ='".$var."'";

echo $query;

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
