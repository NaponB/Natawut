<?php
	 @include("conn.php");
	 $hn = $_GET['aid'];
	 if(isset($hn)){
	  $strSQL5 = "SELECT * FROM raw where raw_id = '$hn'";
      $objQuery5 = mysql_query($strSQL5);
      $objReSult5 = mysql_fetch_array($objQuery5);
      
      
      if(mysql_num_rows($objQuery5) > 0){
      	echo json_encode($objReSult5);
      }else
      	echo 'nothing';
      	// echo mysql_num_rows($objQuery5) or die(mysql_error());
	 }else{
	 	echo 'nothing';
	 }
?>