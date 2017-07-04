<?
include ('conn.php');

if($_FILES['foodPic'] != "") {
$ext = pathinfo(basename($_FILES['foodPic']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "image2/food2/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES['foodPic']['tmp_name'], $upload_path);
if ($success == FALSE) {
	# code...
	$sql2 = "SELECT * FROM menu"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update menu2 SET type_id = '".$_POST['m_typef']."', menu_name = '".$_POST['m_name']."', menu_size ='".$_POST['m_size']."', menu_price ='".$_POST['m_price']."' WHERE menu_id = '".$_POST['m_id']."' ";
mysql_query($sql);
	
}
else {
//$submit = $_POST['submit'];
$sql2 = "SELECT * FROM menu"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "update menu2 SET type_id = '".$_POST['m_typef']."', menu_name = '".$_POST['m_name']."', menu_size ='".$_POST['m_size']."', menu_price ='".$_POST['m_price']."',  foodPic ='".$new_image_name."' WHERE menu_id = '".$_POST['m_id']."' ";
mysql_query($sql);
}}
echo "<script>window.location.href='listfood2.php'</script>";

?>