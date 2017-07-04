<?php
include ('conn.php');
session_start();
	$oldpassword 	= trim($_POST["oldpw"]);
	$password 		= trim($_POST["newpw"]);
	$repassword 	= trim($_POST["repw"]);
	

	$sql = "SELECT cus_fname from customers where cus_id='".$_SESSION['cus_id']."' and cus_pass='".$oldpassword."'";
	$result = mysql_query($sql);
	$num = mysql_num_rows($result);
	
	if ($num==0)
		die("<script>
				alert('Old password incorrect');
				history.back();
			 </script>");

	// 2.2 password = repassword
	if ($password != $repassword)
		die("<script>
				alert('Password is not same');
				history.back();
			 </script>");

// 6. save data
	$password = $password;

	$sql = "UPDATE customers set cus_pass='".$password."' where cus_id='".$_SESSION['cus_id']."'";

	$result = mysql_query($sql) or die("Err : $sql");
	
	echo "<script>
			alert('Update Password');
			window.location='login.php';
		  </script>";

?>
