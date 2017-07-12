<?
include ('conn.php');

$submit = $_POST['promo_id'];
$sql2 = "SELECT * FROM promotion where promo_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result == 1 ) {
	# code...
	$sql = "UPDATE `promotion` SET `promo_name`='".$_POST['promo_name']."', `promo_start`='".$_POST['promo_start']."', `promo_end`='".$_POST['promo_end']."', `promo_amount`='".$_POST['promo_amount']."', `promo_percen`='".$_POST['promo_percen']."' WHERE `promo_id`= '".$_POST['promo_id']."'";
$result = mysql_query($sql) or die(mysql_error());
echo "แก้ไขรายการสำเร็จ";
}
else{
$sql = "INSERT INTO `promotion`(`promo_id`, `promo_name`, `promo_start`, `promo_end`, `promo_amount`, `promo_percen`) VALUES ('".$_POST['promo_id']."', '".$_POST['promo_name']."', '".$_POST['promo_start']."', '".$_POST['promo_end']."', '".$_POST['promo_amount']."', '".$_POST['promo_percen']."')";
mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มข้อมูลสำเร็จ";
}
?>