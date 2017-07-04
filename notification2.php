<?php
	 @include('conn.php');
	 //session_start();
	 $_SESSION['rawop'] = null;
	  $strSQL5 = "SELECT * FROM rawstore2 where rs_amount < rs_op";
      $objQuery5 = mysql_query($strSQL5);
      $badge_number = mysql_num_rows($objQuery5);
      		 while ($objReSult5 = mysql_fetch_array($objQuery5)) {
      $_SESSION['rawop'][] = $objReSult5['rs_name'];
  }
  if ($badge_number > 0) {
  	# code...
  	// echo "$badge_number";
  	$_SESSION['news'] = $badge_number;
  }
      // for ($i=0; $i < count($_SESSION['rawop']); $i++) { 
      // 	# code...
      // 	// $_SESSION['rawop'][$i] = mysql_fetch_array($objQuery5);
      // 	echo $_SESSION['rawop'][$i]."<BR>";
      // }


 //    $sql2 = "SELECT * FROM rawstore1 where rs_amount <= rs_op";
	// $dbquery2=mysql_query("set names utf8");
	// $dbquery2 = mysql_query($sql2);
	// $data2 = mysql_fetch_array($dbquery2);


	// $_SESSION('rawop')[] = (string)$data2;

	// for ($i=0; $i < count($_SESSION['rawop']); $i++) { 
 //      	# code...
 //      	// $_SESSION['rawop'][$i] = mysql_fetch_array($objQuery5);
 //      	echo $_SESSION['rawop'][$i]."<BR>";
 //      }

?>