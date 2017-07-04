<?
include ('conn.php');

$submit = $_POST['submit'];
$sql2 = "SELECT * FROM type_food"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update type_food SET type_name = '".$_POST['type_name']."' WHERE Type_id = '".$_POST['type_id']."' ";
mysql_query($sql);
?>