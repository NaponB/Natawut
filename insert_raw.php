<?
include ('conn.php');

$submit = $_POST['raw_id'];
$sql2 = "SELECT * FROM raw where raw_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result == 1 ) {
	# code...
	$sql = "update raw SET raw_name = '".$_POST['raw_name']."', unit_id = '".$_POST['unit_id']."', bus_name ='".$_POST['bus_name']."', raw_price ='".$_POST['raw_price']."' WHERE raw_id = '".$_POST['raw_id']."'";
$result = mysql_query($sql) or die(mysql_error());
echo "แก้ไขรายการสำเร็จ";
}
else{
$sql = "insert into raw (raw_id, raw_name, unit_id, bus_name, raw_price ) value ('".$_POST['raw_id']."', '".$_POST['raw_name']."', '".$_POST['unit_id']."', '".$_POST['bus_name']."', '".$_POST['raw_price']."')";
mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มข้อมูลสำเร็จ";
}
?>