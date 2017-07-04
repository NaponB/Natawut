<?
session_start();
include"conn.php";
$sql1 = "select * from customers where cus_email='".$_POST['mail']."' and cus_pass='".$_POST['pass']."' ";
$dbquery1=mysql_query("set names utf8");
$dbquery1 = mysql_query($sql1);
$data1 = mysql_fetch_array($dbquery1);
$rows1 = mysql_num_rows($dbquery1);
 
$sql2 = "select * from employee where emp_fname='".$_POST['mail']."' and emp_no ='".$_POST['pass']."' ";
$dbquery2=mysql_query("set names utf8");
$dbquery2 = mysql_query($sql2);
$data2 = mysql_fetch_array($dbquery2);
$rows2 = mysql_num_rows($dbquery2);

// $sql3 = "select * from student where stu_id='".$_POST['mail']."' and password='".$_POST['pass']."' ";

// $dbquery3=mysql_query("set names utf8");

// $dbquery3 = mysql_query($sql3);

// $data3 = mysql_fetch_array($dbquery3);

// $rows3 = mysql_num_rows($dbquery3);

if($rows1==1){

echo"เข้าระบบได้สำเร็จ ";

$_SESSION['user']=$data1['cus_fname'];//กำหนดแสดงส่วนที่ต้องการเช่น ชื่อ ตอนล็อกอิน
$_SESSION['cus_id']=$data1['cus_id'];
$_SESSION['authen']=$data1['authen'];

 

echo"<meta http-equiv='refresh' content='1;url=home2.php' >";//แยกหน้าUSER

}

else if($rows2==1){

echo"เข้าระบบได้สำเร็จ ";

$_SESSION['user']=$data2['emp_fname'];
$_SESSION['emp_branch']= $data2['emp_branch'];
$_SESSION['authen']=$data2['authen'];

echo"<meta http-equiv='refresh' content='1;url=indexe.php' >";//แยกหน้าUSER
}
else if($_POST['mail']=="admin" && $_POST['pass']=="admin"){
echo"เข้าระบบได้สำเร็จ ";
$_SESSION['user']="Admin";
$_SESSION['authen']="3";
 
echo"<meta http-equiv='refresh' content='1;url=index.php' >";
}
else {
echo"ไม่สามารถเข้าระบบได้ โปรดตรวจสอบ Login และ  Password ";
echo"<meta http-equiv='refresh' content='3;url=login.php' >";
}
?>