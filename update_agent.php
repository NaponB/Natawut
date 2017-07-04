<?
include ('conn.php');

$submit = $_POST['agent_id'];
$sql2 = "SELECT * FROM agent"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update agent SET bus_name = '".$_POST['bus_name']."', contract_fname = '".$_POST['con_fname']."', contract_lname ='".$_POST['con_lname']."', bus_add ='".$_POST['bus_add']."', tel = '".$_POST['con_tel']."', mail = '".$_POST['con_mail']."' WHERE agent_id = '".$_POST['agent_id']."' ";
mysql_query($sql) or die ("ไม่สามารถแก้ไขข้อมูลได้");
echo "แก้ไขข้อมูลสำเร็จ";
?>