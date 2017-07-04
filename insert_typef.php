<?
include ('conn.php');

$submit = $_POST['type_id'];
$sql2 = "SELECT * FROM type_food where Type_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result ==1 ) {
	# code...
	$sql = "update type_food SET type_name = '".$_POST['type_name']."' WHERE Type_id = '".$_POST['type_id']."' ";
 	$result2=mysql_query($sql) or die("ไม่สามรถแก้ไขได้");
 	echo "แก้ไขรายการสำเร็จ";
}
else {
	$sql = "insert into type_food (Type_id, type_name) value ('".$_POST['type_id']."', '".$_POST['type_name']."')";
	$result2=mysql_query($sql) or die("ไม่สามรถเพิ่มข้อมูลได้ได้");	
	echo "เพิ่มรายการสำเร็จ";

}



?>