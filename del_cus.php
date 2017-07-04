<?
include ('conn.php');

$submit = $_GET['cus_id'];
$sql2 = "SELECT * FROM customers"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "DELETE FROM customers WHERE cus_id = '".$submit."' ";
mysql_query($sql);

echo "<script>  window.location='javascript:history.back(1)';</script>";
?>