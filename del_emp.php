<?
include ('conn.php');

$submit = $_GET['emp_id'];
$sql2 = "SELECT * FROM employee"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "DELETE FROM employee WHERE emp_id = '".$submit."' ";
mysql_query($sql);

echo "<script language='javascript'>history.go(-1);</script>";
?>