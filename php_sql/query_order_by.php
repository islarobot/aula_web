<?php

$sin_post = 0;	

print(
"
<script>

var order_name = 'ASC';
var order_surname = 'DESC';

function forder(n){

switch (n) {

case 'name':

if(order_name == 'ASC') {  order1 = 'DESC';}else{ order1 = 'ASC';}

document.getElementById(\"orderid\").value = order1;
document.getElementById(\"campo_orderid\").value = n;

document.getElementById(\"submitForm\").submit();


break;

case 'surname':

break;


}

}
</script>
"
);


$con = new mysqli('localhost', 'root', '', 'employees');


if($_SERVER['REQUEST_METHOD'] == "POST"){

if( isset($_POST['order']) && !empty($_POST['order']))
{$order_s = $_POST['order'];
$order_n = $_POST['campo_order'];
}
else{
$order_s = "XX";
$order_n = "XX";
}


if( isset($_POST['fsurname']) && !empty($_POST['fsurname']))
{$surname = $_POST['fsurname'];}
else{
$surname = "XX";
}


if( isset($_POST['fname']) && !empty($_POST['fname']))
{$name = $_POST['fname'];}
else{
$name = "XX";
}





}else{

$sin_post = 1;	
	
}

echo $order_s;

print(
"
<form action \"?\" method=\"post\" id=\"submitForm\">
<label for=\"fname\">Nombre</label>

<input type=text name = \"fname\">
<label for=\"fsurname\">Apellido</label>
<input type=text name = \"fsurname\">
<input type=text name = \"order\" id = \"orderid\">
<input type=text name = \"campo_order\" id = \"campo_orderid\">
<input type=\"submit\">
</form>
"
);


print("<table border=1>
<tr><td>

<a href=\"javascript:forder('name')\">Nombre</a>


</td>


<td>
 

<a href=\"javascript:forder('surname')\">Apellido</a>


</td></tr>

");

$limit = "";

if($sin_post == 1){

$where = " LIMIT 11";

$order_select = "";

}elseif($name == 'XX' && $surname == 'XX'){
	
	$where = "";
	$limit = " LIMIT 10";

}elseif($name == 'XX'){   

$where = "WHERE last_name = '".$surname."'" ;

}elseif($surname == 'XX'){
	
$where = "WHERE first_name = '".$name."'" ;
	
	

	
}else{
	
$where = "WHERE first_name ='".$name."' AND last_name = '".$surname."'" ;	
	
}

if($order_n == "XX"){ 

$order_select = "";

}else{

if($order_n = 'name'){

if($order_s = 'ASC'){

$order_select = "ORDER BY first_name ASC";	
}else{
	
$order_select = "ORDER BY first_name DESC";	

	
}
}
}


$query = "SELECT first_name, last_name FROM employees ".$where." ".$limit;


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
