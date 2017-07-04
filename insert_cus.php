<?
include ('conn.php');
$new_id =mysql_result(mysql_query("Select Max(substr(cus_id,-4))+1 as MaxID from  customers"),0,"MaxID");
          if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                $cus_id="C0001";
            }else{
                $cus_id="C".sprintf("%04d",$new_id);//ถ้าไม่ใช่ค่าว่าง
            }
$submit = $_POST['submit'];
$sql2 = "SELECT * FROM customers"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "insert into customers (cus_id, cus_fname, cus_lname, cus_add, cus_tel, cus_email, cus_pass, authen) value ('".$cus_id."', '".$_POST['cus_fname']."', '".$_POST['cus_lname']."', '".$_POST['cus_add']."', '".$_POST['cus_tel']."', '".$_POST['cus_email']."', '".$_POST['cus_pass']."', '0')";
mysql_query($sql);

?>