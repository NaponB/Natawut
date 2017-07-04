<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM unit"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update customers SET status = '".$_POST['prop']."', note = '".$_POST['note']."' WHERE cus_id = '".$_POST['cus_id']."'";
$result = mysql_query($sql);
if ($result) {
	# code...
	echo $_POST['prop']." ".$_POST['note']." ".$_POST['cus_id'];
}
else {
	echo "<script>";
	echo "alert('ลบข้อมูลสำเร็จ3333');";
	echo "history.back(-1);";
	echo "</script>";
}
?>