<?
include ('conn.php');

$submit = $_GET['img_id'];
$sql2 = "SELECT * FROM tbl_img where img_id = '".$submit."'"; 
$objQuery2 = mysql_query($sql2);
$objReSult2 = mysql_fetch_array($objQuery2);

@unlink('image2/'.$objReSult2['img_file']);

$sql = "DELETE FROM tbl_img WHERE img_id = '".$submit."'";
mysql_query($sql);

echo "<script>  window.location='javascript:history.back(1)';</script>";
?>