<?
include ('conn.php');

$submit = $_POST['deord_id'];
$sql2 = "SELECT * FROM temp_detail_order"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "UPDATE `temp_detail_order` SET `amount`= '".$_POST['raw_amount']."' WHERE deord_id = '".$submit."' ";
mysql_query($sql) or die (mysql_error());
echo "แก้ไขข้อมูลสำเร็จ";
?>