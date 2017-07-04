<?
include ('conn.php');

$submit = $_POST['submit'];
$sql2 = "SELECT * FROM raw"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update raw SET raw_name = '".$_POST['raw_name']."',  unit_id = '".$_POST['unit_id']."',  bus_name = '".$_POST['bus_name']."',  raw_price = '".$_POST['raw_price']."' WHERE raw_id = '".$_POST['raw_id']."' ";
mysql_query($sql);

?>