<?php
	 @include('conn.php');
	 $hn = $_POST['branch_id'];
	 if(isset($hn)){
	  $strSQL = "SELECT * FROM branch WHERE branch_id = '".$hn."'";
      $objQuery = mysql_query($strSQL);
      $objReSult = mysql_fetch_array($objQuery);
      

      if(mysql_num_rows($objQuery) > 0){
      	echo json_encode($objReSult);
      }else
      	echo 'nothing';
	 }else{
	 	echo 'nothing';
	 }
?>