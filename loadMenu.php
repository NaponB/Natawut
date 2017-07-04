<?php
	 @include("conn.php");
	 $hn = $_GET['aid'];
	 if(isset($hn)){
	  $strSQL5 = "SELECT * FROM menu as d1 inner join type_food  as d2 ON (d1.Type_id = d2.Type_id)";
	  $strSQL5.= "inner join size as d3 ON (d1.menu_size = d3.size_id)";
	  $strSQL5 .= "where menu_id = '$hn'";
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