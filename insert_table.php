<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM table_food where table_id = '".$_POST['table_id']."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result ==1 ) {
	# code...
	$sql = "update table_food SET table_name = '".$_POST['table_name']."', branch = '".$_POST['branch']."', table_note = '".$_POST['table_note']."' WHERE table_id = '".$_POST['table_id']."' ";
$result = mysql_query($sql) or die("ไม่สามรถแก้ไขได้");
echo "แก้ไขรายการสำเร็จ";
}
else {
$sql = "insert into table_food (table_id, table_num, branch, table_note) value ('".$_POST['table_id']."', '".$_POST['table_name']."', '".$_POST['branch']."', '".$_POST['table_note']."')";
$result = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มรายการสำเร็จ";
	}
?>