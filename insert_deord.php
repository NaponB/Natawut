<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM detail_order where deord_id = '".$_POST['deord_id']."' "; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);


if ($result ==1 ) {
// $sql = "update detail_order SET ordraw_id = '".$_POST['ordraw_id']."', raw_id = '".$_POST['raw_name']."', raw_price = '".$_POST['raw_price']."', amount = '".$_POST['raw_amount']."', unit_id = '".$_POST['unit_id']."'  WHERE deord_id = '".$_POST['deord_id']."' ";
// mysql_query($sql) or die("ไม่สามรถแก้ไขได้");

$sql2 = "update temp_detail_order SET ordraw_id = '".$_POST['ordraw_id']."', raw_id = '".$_POST['raw_name']."', raw_price = '".$_POST['raw_price']."', amount = '".$_POST['raw_amount']."', unit_id = '".$_POST['unit_id']."'  WHERE deord_id = '".$_POST['deord_id']."' ";
mysql_query($sql2) or die("ไม่สามรถแก้ไขได้");
echo "แก้ไขสำเร็จ";
}
else {
// $sql = "insert into detail_order (deord_id, ordraw_id, raw_id, raw_price, amount, unit_id) value ('".$_POST['deord_id']."', '".$_POST['ordraw_id']."', '".$_POST['raw_name']."', '".$_POST['raw_price']."', '".$_POST['raw_amount']."', '".$_POST['unit_id']."')";
// mysql_query($sql) or die("ไม่สามรถแก้ไขได้");

$sql2 = "insert into temp_detail_order (deord_id, ordraw_id, raw_id, raw_price, amount, unit_id) value ('".$_POST['deord_id']."', '".$_POST['ordraw_id']."', '".$_POST['raw_name']."', '".$_POST['raw_price']."', '".$_POST['raw_amount']."', '".$_POST['unit_id']."')";
mysql_query($sql2) or die("ไม่สามรถแก้ไขได้"); 
echo "เพิ่มข้อมูลสำเร็จ";
}
?>