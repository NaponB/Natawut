<?
include ('conn.php');

$submit = $_POST['input_id'];
$sql2 = "SELECT * FROM input_table where input_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

	# code...
$sql = "insert into input_table (input_id, ordraw_id, emp_name, input_date, branch_id) value ('".$_POST['input_id']."', '".$_POST['ordraw_id']."', '".$_POST['emp_name']."', '".$_POST['input_date']."', '".$_POST['branch']."')";
mysql_query($sql) or die(mysql_error());
echo "เพิ่มข้อมูลสำเร็จ";
?>