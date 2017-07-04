<?php
	 @include('conn.php');
	 $hn = $_GET['raw_id'];
	 if(isset($hn)){
	  $strSQL5 = "SELECT * FROM raw where raw_id = '".$hn."'";
      $objQuery5 = mysql_query($strSQL5);
      $objReSult5 = mysql_fetch_array($objQuery5);

      $strSQL6 = "SELECT * FROM unit where unit_id = '".$objReSult5['unit_id']."'";
      $objQuery6 = mysql_query($strSQL6);
      $objReSult6 = mysql_fetch_array($objQuery6);
      
      
      if(mysql_num_rows($objQuery5) > 0){
      	echo json_encode($objReSult5);
      	// echo json_encode($objReSult6);
      }else
      	echo 'nothing';
	 }else{
	 	echo 'nothing';
	 }
?>