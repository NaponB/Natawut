<?
include ('conn.php');
session_start();
$ext = pathinfo(basename($_FILES['foodPic']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "image2/food/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES['foodPic']['tmp_name'], $upload_path);
if ($success == FALSE) {
	# code...
	echo "error";
}

// $submit = $_POST['submit'];
$sql2 = "SELECT * FROM menu"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "insert into menu (menu_id, Type_id, menu_name, menu_size, menu_price, foodPic, branch) value ('".$_POST['m_id']."', '".$_POST['m_type']."', '".$_POST['m_name']."', '".$_POST['m_size']."', '".$_POST['m_price']."', '".$new_image_name."', '".$_SESSION['emp_branch']."')";
mysql_query($sql);
echo "<script>window.location.href='listfood1.php'</script>";
?>