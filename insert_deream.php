<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM orderraw"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);


$sql = "INSERT INTO `temp_detail_ream`(`de_ream_id`, `ream_id`, `raw_id`, `amount`, `unit_id`) VALUES ('".$_POST['de_ream']."', '".$_POST['ream_id']."', '".$_POST['raw_id']."', '".$_POST['amount']."', '".$_POST['unit_id']."') ";
$objQuery=mysql_query($sql) or die (mysql_error());
// $num = mysql_num_rows($objQuery);
echo("เพิ่มรายการสำเรา็จ");
// $sql2 = " ";
// mysql_query($sql2) or die (mysql_error());

	# code...
	

?>