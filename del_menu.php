<?
include ('conn.php');

$submit = $_GET['agent_id'];
$sql2 = "SELECT * FROM menu where menu_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

@unlink('img/'.$objReSult2['foodPic']);

$sql = "DELETE FROM menu WHERE menu_id = '".$submit."' ";
$result2 = mysql_query($sql) or die ("ไม่สามารถลบข้อมูลได้");
if ($result2) {
	# code...
	echo "ลบข้มูลสำเร็จ";
}
else {
	echo "ไม่สามารถลบข้อมูลได้";
}


?>