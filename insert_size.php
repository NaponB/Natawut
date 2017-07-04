<?
include ('conn.php');

$submit = $_POST['size_id'];
$sql2 = "SELECT * FROM size where size_id = '".$_POST['size_id']."' "; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result ==1 ) {
$sql = "update size SET size_name = '".$_POST['size_name']."' WHERE size_id = '".$_POST['size_id']."' ";
mysql_query($sql) or die("ไม่สามรถแก้ไขได้");
 	echo "แก้ไขรายการสำเร็จ";

}

else {
$sql = "insert into size (size_id, size_name) value ('".$_POST['size_id']."', '".$_POST['size_name']."')";
mysql_query($sql) or die("ไม่สามรถแก้ไขได้");
 	echo "เพิ่มรายการสำเร็จ";
}
?>