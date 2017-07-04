<?
@include('conn.php');


$sql = "INSERT INTO `detail_ream`(`de_ream_id`, `ream_id`, `raw_id`, `amount`, `unit_id`) SELECT * FROM temp_detail_ream where ream_id = '".$_POST['ream_id']."' ";
$objQuery=mysql_query($sql) or die (mysql_error());
// $num = mysql_num_rows($objQuery);
echo("เพิ่มรายการสำเรา็จ");


 $strSQL5 = "SELECT  * FROM temp_detail_ream where ream_id = '".$_POST['ream_id']."'";
            $objQuery5 = mysql_query($strSQL5) or die("Error Query [".$strSQL5."]");
            while ($objReSult5 = mysql_fetch_array($objQuery5)) {
$sql3 = "SELECT * FROM rawstore1 where raw_id = '".$objReSult5['raw_id']."' ";
$objQuery3 = mysql_query($sql3);
 while ($objReSult3 = mysql_fetch_array($objQuery3)) {
 	$num = $objReSult3['rs_amount'] - $objReSult5['amount'];
	$sql4 = "UPDATE `rawstore1` SET rs_amount = '".$num."' WHERE `raw_id` = '".$objReSult5['raw_id']."' ";
	mysql_query($sql4) or die (mysql_error());
}
}

?>