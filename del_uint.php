<?
include ('conn.php');

$submit = $_GET['unit_id'];
$sql2 = "SELECT * FROM unit"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);


$sql = "DELETE FROM unit WHERE unit_id = '".$submit."' ";
$result2 = mysql_query($sql) or die ("ไม่สามารถลบข้อมูลได้");
if ($result2) {
	# code...
	echo "ลบข้มูลสำเร็จ";
}
else {
	echo "ไม่สามารถลบข้อมูลได้";
}


// echo "<script >window.location = 'namber.php';</script>";
?>