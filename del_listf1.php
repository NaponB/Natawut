<?
include ('conn.php');

$submit = $_GET['m_id'];
$sql2 = "SELECT * FROM menu WHERE menu_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

@unlink('image2/food/'.$objReSult2['foodPic']);

$sql = "DELETE FROM menu WHERE menu_id = '".$submit."' ";
mysql_query($sql);

echo "<script language='javascript'>history.go(-1);</script>";
?>