<!-- <?php session_start();
	  session_destroy();
	  $_SESSION['cid']=null;
?>
<script>
	window.location="index.php";
</script> -->
<?php
session_start();
session_destroy();
header("location:home.php");
?>