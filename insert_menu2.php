<?
include ('conn.php');

$ext = pathinfo(basename($_FILES['foodPic']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "image2/food2/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES['foodPic']['tmp_name'], $upload_path);
if ($success == FALSE) {
	# code...
	echo "error";
}

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM menu2"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "insert into menu2 (menu_id, type_id, menu_name, menu_size, menu_price, foodPic) value ('".$_POST['m_id']."', '".$_POST['m_type']."', '".$_POST['m_name']."', '".$_POST['m_size']."', '".$_POST['m_price']."', '".$new_image_name."')";
mysql_query($sql);
echo "<script>window.location.href='listfood2.php'</script>";
?>