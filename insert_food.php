<?php
@include('conn.php');
if(move_uploaded_file($_FILES["m_file"]["tmp_name"], "img/".$_FILES["m_file"]["name"]))
{
echo "<script>alert('Upload file successfully!');</script>";
// echo "<script>  window.location='javascript:history.back(1)';</script>";
echo "<script>location.href='menufood.php'</script>";
//*** Insert Record ***//
$strSQL = "INSERT INTO menu (menu_id, Type_id, menu_name, menu_size, menu_price, foodPic, branch) ";
$strSQL .=" VALUES ('".$_POST['m_id']."', '".$_POST['m_type']."', '".$_POST['m_name']."', '".$_POST['m_size']."', '".$_POST['m_price']."', '".$_FILES["m_file"]["name"]."', '".$_POST["m_branch"]."')";
$objQuery = mysql_query($strSQL);
}
else {
	echo $_FILES["m_file"]["tmp_name"];
	echo "<script>alert('Error! Cannot upload data');</script>";
	echo "<script>  window.location='javascript:history.back(1)';</script>";
}
?>