<?php



$con = new mysqli('localhost', 'root', '', 'employees');

print("<table border=1>
<tr><td>Departamento</td><td>Empleados</td></tr>

");

$num_empleados = 0;

$query = "SELECT d.dept_name, count(de.emp_no) FROM departments d JOIN dept_emp de
ON d.dept_no = de.dept_no where de.to_date = '9999-01-01'
GROUP by dept_name

";

   $res = mysqli_query($con, $query, MYSQLI_USE_RESULT);
   if ($res) {
      while ($row = mysqli_fetch_row($res)) {
         print("<tr>");
	 print("<td>".$row[0]."</td>");
         print("<td>".$row[1]."</td>");
	 $num_empleados = $num_empleados + $row[1];
	 //print("<td>".$row[2]."</td>");
	 print("</tr>");
      }
   }

print("<tr><td></td><td>".$num_empleados."</td>");
print("</table>");

?>
