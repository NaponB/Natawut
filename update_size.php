<?
include ('conn.php');

$submit = $_POST['submit'];
$sql2 = "SELECT * FROM size"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update size SET size_name = '".$_POST['size_name']."' WHERE size_id = '".$_POST['size_id']."' ";
mysql_query($sql);
?>