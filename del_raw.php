<?
include ('conn.php');

$submit = $_GET['raw_id'];
$sql2 = "SELECT * FROM raw"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "DELETE FROM raw WHERE raw_id = '".$submit."' ";
$result2 = mysql_query($sql) or die ("ไม่สามารถลบข้อมูลได้");
if ($result2) {
	# code...
	echo "ลบข้มูลสำเร็จ";
}
else {
	echo "ไม่สามารถลบข้อมูลได้";
}


?>