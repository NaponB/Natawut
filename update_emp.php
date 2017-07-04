<?
include ('conn.php');

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM employee"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update employee SET emp_fname = '".$_POST['emp_fname']."', emp_lname ='".$_POST['emp_lname']."', emp_no ='".$_POST['emp_no']."', emp_date = '".$_POST['emp_date']."', emp_sex = '".$_POST['emp_sex']."', emp_add = '".$_POST['emp_add']."', emp_tel = '".$_POST['emp_tel']."', emp_datework = '".$_POST['emp_date']."', emp_branch = '".$_POST['emp_branch']."' WHERE emp_id = '".$_POST['emp_id']."' ";
mysql_query($sql) or die ("ไม่สามารถแก้ไขข้อมูลได้");
echo "แก้ไขสำเร็จ";
?>