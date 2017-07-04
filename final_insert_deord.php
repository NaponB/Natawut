<?
include ('conn.php');


$sql = "insert into detail_order (deord_id, ordraw_id, raw_id, raw_price, amount, unit_id) SELECT * FROM temp_detail_order where ordraw_id = '".$_POST['ordraw_id']."' " ;
mysql_query($sql) or die("ไม่สามรถยืนยันได้");

echo "ยืนยันเสร็จสิ้น";
?>