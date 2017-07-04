<?php
	 @include('conn.php');
	 $hn = $_GET['deord_id'];
	 if(isset($hn)){
	  $strSQL = "SELECT * FROM detail_order as d1 inner join raw as d2 on (d1.raw_id = d2.raw_id) WHERE deord_id = '".$hn."'";
      $objQuery = mysql_query($strSQL);
      $objReSult = mysql_fetch_array($objQuery);
      

      if(mysql_num_rows($objQuery) > 0){
      	echo json_encode($objReSult) ;
            // echo json_encode($objReSult2);
      }else
      	echo 'nothing';
	 }else{
	 	echo 'nothing';
	 }
?>