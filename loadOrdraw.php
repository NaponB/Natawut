<?php
	 @include("conn.php");
	 $hn = $_GET['aid'];
	 if(isset($hn)){
	  $strSQL5 = "SELECT * FROM orderraw as d1 inner join agent  as d2 ON (d1.bus_name = d2.agent_id)";
	  $strSQL5 .= "where ordraw_id = '$hn'";
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