<?
include ('conn.php');

// $submit = $_POST['submit'];
// $sql2 = "SELECT * FROM orderraw"; 
// $objQuery2 = mysql_query($sql2);
// $objReSult2 = mysql_fetch_array($objQuery2);
for ($i=0 ; $i < $_POST['round'] ; $i++ ) { 
	# code...
	$test = $_POST['vals'];
	$test2 = $_POST['amount'];
	$test3 = $_POST['sum'];
      $new_id =mysql_result(mysql_query("Select Max(substr(de_sell_id,-4))+1 as MaxID from de_sell"),0,"MaxID");
                      if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                            $de_sell_id="DS0001";
                        }else{
                            $de_sell_id="DS".sprintf("%04d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                        }

$submit = $_POST['submit'];
$sql2 = "SELECT * FROM menu where menu_id = '".$test[$i]."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$sql = "INSERT INTO de_sell (de_sell_id, sell_id, menu_id, price, amount) VALUES ('".$de_sell_id."', '".$_POST['sell_id']."', '".$test[$i]."', '".$test3[$i]."', '".$test2[$i]."')";
$objQuery=mysql_query($sql) or die (mysql_error());
// $num = mysql_num_rows($objQuery);
echo("เพิ่มรายการสำเรา็จ");
// $sql2 = " ";
// mysql_query($sql2) or die (mysql_error());

	# code...
	
}
?>