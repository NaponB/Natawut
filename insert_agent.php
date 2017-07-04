<?
include ('conn.php');

$submit = $_POST['agent_id'];
$sql2 = "SELECT * FROM agent where agent_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);
$result = mysql_num_rows($objQuery2);

if ($result == 1 ) {
	# code...
	$sql = "update agent SET bus_name = '".$_POST['bus_name']."', contract_fname = '".$_POST['con_fname']."', contract_lname ='".$_POST['con_lname']."', bus_add ='".$_POST['bus_add']."', tel = '".$_POST['con_tel']."', mail = '".$_POST['con_mail']."' WHERE agent_id = '".$_POST['agent_id']."'";
$result = mysql_query($sql) or die(mysql_error());
echo "แก้ไขรายการสำเร็จ";
}
else{
$sql = "insert into agent (agent_id, bus_name, contract_fname, contract_lname, bus_add, tel, mail) value ('".$_POST['agent_id']."', '".$_POST['bus_name']."', '".$_POST['con_fname']."', '".$_POST['con_lname']."', '".$_POST['bus_add']."', '".$_POST['con_tel']."', '".$_POST['con_mail']."')";
mysql_query($sql) or die("ไม่สามารถเพิ่มข้อมูลได้");
echo "เพิ่มข้อมูลสำเร็จ";
}
?>