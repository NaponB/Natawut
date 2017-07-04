<?
include ('conn.php');

$ext = pathinfo(basename($_FILES['fileUpload']['name']), PATHINFO_EXTENSION);
$new_image_name = 'img_'.uniqid().".".$ext;
$image_path = "image2/";
$upload_path = $image_path.$new_image_name;
$success = move_uploaded_file($_FILES['fileUpload']['tmp_name'], $upload_path);
if ($success == FALSE) {
	# code...
	echo "error";
}

$sql2 = "SELECT * FROM tbl_img"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

$sql = "insert into tbl_img (img_id, img_name, img_file) value ('".$_POST['fileID']."', '".$_POST['fileName']."', '".$new_image_name."')";
mysql_query($sql);

echo "<script>window.location.href='photo.php'</script>";
?>