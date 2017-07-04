<?php
	 @include('conn.php');
	 $uid = $_GET['uid'];
	 if(isset($uid)){
	  $strSQL5 = "SELECT * FROM unit where unit_id = $uid";
      $objQuery5 = mysql_query($strSQL5);
      $objReSult5 = mysql_fetch_array($objQuery5);
      
      
      if(mysql_num_rows($objQuery5) > 0){
      	echo json_encode($objReSult5);
      }else
      	echo 'nothing';
	 }else{
	 	echo 'nothing';
	 }
?>