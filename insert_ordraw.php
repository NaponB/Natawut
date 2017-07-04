<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM orderraw"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);


$sql = "insert into orderraw (ordraw_id, date, emp_name, bus_name) value ('".$_POST['ordraw_id']."', '".$_POST['ord_date']."', '".$_POST['emp_name']."', '".$_POST['bus_name']."')";
mysql_query($sql) or die (mysql_error());

$sql2 = "insert into temp_orderraw (ordraw_id, date, emp_name, bus_name) value ('".$_POST['ordraw_id']."', '".$_POST['ord_date']."', '".$_POST['emp_name']."', '".$_POST['bus_name']."')";
mysql_query($sql2) or die (mysql_error());

?>