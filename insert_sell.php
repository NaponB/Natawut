<?
include ('conn.php');

$submit = $_POST['input_id'];
$sql2 = "SELECT * FROM input_table where input_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

	# code...
$sql = "INSERT INTO  sell_order ( sell_id , emp_name, branch, table_id, sell_date) VALUES ('".$_POST['sell_id']."', '".$_POST['emp_name']."', '".$_POST['branch']."', '".$_POST['table_id']."', '".$_POST['sell_date']."')";
mysql_query($sql) or die(mysql_error());
echo "เพิ่มข้อมูลสำเร็จ";
?>