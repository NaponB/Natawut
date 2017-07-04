<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM unit where unit_id = '".$_POST['unit_id']."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result == 1 ) {
	# code...
	$sql = "update unit SET unit_name = '".$_POST['unit_name']."' WHERE unit_id = '".$_POST['unit_id']."' ";
$result = mysql_query($sql) or die(mysql_error());
echo "แก้ไขรายการสำเร็จ";
}
else {
$sql = "insert into unit (unit_id, unit_name) value ('".$_POST['unit_id']."', '".$_POST['unit_name']."')";
$result = mysql_query($sql) or die(mysql_error());
echo "เพิ่มรายการสำเร็จ";
	}
?>