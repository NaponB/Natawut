<?
include ('conn.php');
$date = $_POST['emp_date'];
//$date = str_replace('/', '-', $date);
// $date = date('Y-m-d', strtotime($date));
//$date = $_POST['emp_date'];
//$submit = $_POST['submit'];
$sql2 = "SELECT * FROM employee"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "INSERT into employee (emp_id, emp_fname, emp_lname, emp_no, emp_date, emp_sex, emp_add, emp_tel, emp_datework, emp_branch, authen) value ('".$_POST['emp_id']."', '".$_POST['emp_fname']."', '".$_POST['emp_lname']."', '".$_POST['emp_no']."', '".$date."', '".$_POST['emp_sex']."', '".$_POST['emp_add']."', '".$_POST['emp_tel']."', '".$_POST['emp_work']."', '".$_POST['emp_branch']."', '1')";
mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มข้อมูลสำเร็จ";

?>