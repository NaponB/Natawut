<?
include ('conn.php');

$submit = $_POST['submit'];
$sql2 = "SELECT * FROM unit"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update unit SET unit_name = '".$_POST['unit_name']."' WHERE unit_id = '".$_POST['unit_id']."' ";
mysql_query($sql);
?>