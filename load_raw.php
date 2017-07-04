<?php
	 @include('conn.php');
	 $hn = $_GET['deord_id'];
	 if(isset($hn)){
	  $strSQL = "SELECT * FROM detail_order WHERE deord_id = '".$hn."'";
      $objQuery = mysql_query($strSQL);
      $objReSult = mysql_fetch_array($objQuery);
      
      $strSQL2 = "SELECT * FROM raw WHERE raw_id = '".$objReSult['raw_id']."'";
      $objQuery2 = mysql_query($strSQL2);
      $objReSult2 = mysql_fetch_array($objQuery2);

      if(mysql_num_rows($objQuery) > 0){
      	echo json_encode($objReSult) ;
            // echo json_encode($objReSult2);
      }else
      	echo 'nothing';
	 }else{
	 	echo 'nothing';
	 }
?>