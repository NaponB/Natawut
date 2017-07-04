<?
include ('conn.php');

// $submit = $_POST['submit'];
$strSQL9 = "SELECT * FROM temp_detail_order where ordraw_id = '".$_POST['ordraw_id']."' ";
$objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
while ($objReSult9 = mysql_fetch_array($objQuery9)) {

$sql2 = "SELECT * FROM rawstore1 where raw_id = '".$objReSult9['raw_id']."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);
}

if ($result == 0) {

	# code...
$strSQL9 = "SELECT * FROM temp_detail_order where ordraw_id = '".$_POST['ordraw_id']."' ";
$objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
while ($objReSult9 = mysql_fetch_array($objQuery9)) {

	$new_id =mysql_result(mysql_query("Select Max(substr(rs_id,-3))+1 as MaxID from rawstore1"),0,"MaxID");
                  if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                        $rs_id="RS001";
                    }else{
                        $rs_id="RS".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                    }
$sql = "insert into rawstore1 (rs_id, raw_id, rs_amount) value ('".$rs_id."', '".$objReSult9['raw_id']."', '".$objReSult9['amount']."' )"; 
// '".$rs_id."' SELECT raw_name, amount FROM temp_detail_order as d1";
// $sql .= "inner join raw as d2 ON (d1.raw_id = d2.raw_id)";
// $sql .= "where ordraw_id = '".$_POST['ordraw_id']."'";
$result = mysql_query($sql) or die(mysql_error());
}
echo "เพิ่มรายการสำเร็จ";
}

else {
		# code...
$strSQL8 = "SELECT * FROM rawstore1";
$objQuery8 = mysql_query($strSQL8) or die("Error Query [".$strSQL8."]");
while ($objReSult8 = mysql_fetch_array($objQuery8)) {

$strSQL9 = "SELECT * FROM temp_detail_order where ordraw_id = '".$_POST['ordraw_id']."' ";
$objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
while ($objReSult9 = mysql_fetch_array($objQuery9)) {

	$new_id =mysql_result(mysql_query("Select Max(substr(rs_id,-3))+1 as MaxID from rawstore1"),0,"MaxID");
                  if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                        $rs_id="RS001";
                    }else{
                        $rs_id="RS".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                    }
                    $sum = $objReSult9['amount'] + $objReSult8['rs_amount'];
$sql = "update rawstore1 SET rs_amount = '".$sum."' where raw_id = '".$objReSult9['raw_id']."'"; 
// '".$rs_id."' SELECT raw_name, amount FROM temp_detail_order as d1";
// $sql .= "inner join raw as d2 ON (d1.raw_id = d2.raw_id)";
// $sql .= "where ordraw_id = '".$_POST['ordraw_id']."'";
$result = mysql_query($sql) or die(mysql_error());
}
}
echo "ทำรายการเสร็จสิ้น";
}

	
?>