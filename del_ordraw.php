<?
include ('conn.php');

$submit = $_GET['ordraw_id'];
$sql2 = "SELECT * FROM orderraw"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "DELETE FROM orderraw WHERE ordraw_id = '".$submit."' ";
mysql_query($sql);

echo "<script>  window.location='orderraw.php';</script>";
?>