<?
include ('conn.php');

$submit = $_POST['cus_id'];
$sql2 = "SELECT * FROM customers"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update customers SET cus_pass = '".$_POST['new_pass']."'WHERE cus_id = '".$_POST['cus_id']."' ";
mysql_query($sql) or die ("ไม่สามารถแก้ไขข้อมูลได้");
echo "แก้ไขข้อมูลสำเร็จ";
?>