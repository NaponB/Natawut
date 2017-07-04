<?
include ('conn.php');

$submit = $_POST['ream_id'];
$sql2 = "SELECT * FROM ream_raw where ream_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

	# code...
$sql = "insert into ream_raw (ream_id, emp_name, branch, ream_date) value ('".$_POST['ream_id']."', '".$_POST['emp_name']."', '".$_POST['branch']."', '".$_POST['ream_date']."')";
mysql_query($sql) or die(mysql_error());
echo "เพิ่มข้อมูลสำเร็จ";
?>