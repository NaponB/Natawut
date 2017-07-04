<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM branch where branch_id = '".$_POST['branch_id']."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result ==1 ) {
	# code...
	$sql = "update branch SET branch_add = '".$_POST['branch_add']."' WHERE branch_id = '".$_POST['branch_id']."' ";
$result = mysql_query($sql) or die("ไม่สามรถแก้ไขได้");
echo "แก้ไขรายการสำเร็จ";
}
else {
$sql = "insert into branch (branch_id, branch_add) value ('".$_POST['branch_id']."', '".$_POST['branch_add']."')";
$result = mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มรายการสำเร็จ";
	}
?>