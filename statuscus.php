<?
include ('conn.php');
session_start();
if ($_SESSION['emp_branch'] == 1) {
  # code...
  require('notification.php');

}
else {
  require('notification2.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="css/mama.css">
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://use.fontawesome.com/2503fe505d.js"></script>

</head>
<body>
<?php

//ini_set('display_errors', 1);
//error_reporting(~0);
$strKeyword = null;
if(isset($_POST["txtKeyword"]))
{
$strKeyword = $_POST["txtKeyword"];
}
?>

  <div class="box">
    <div class ="box1">
      <a href="indexe.php" target=""><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <div class ="box2">
      <ul>
        <li class="dropdown">
          <a href="" class="dropbtn">ข้อมูลพื้นฐาน&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
          <div class="dropdown-content">
            <a href="namber.php">หน่วยนับ</a>
            <a href="typefood.php">ประเภทอาหาร</a>
            <a href="size.php">ขนาดอาหาร</a>
            <a href="branch.php">สาขา</a>
            <a href="tablefood.php">โต๊ะอาหาร</a>
          </div>
        </li>&nbsp;&nbsp;
        <li class="dropdown">
          <a href="">ข้อมูลหลัก&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
          <div class="dropdown-content">
            <a href="agent.php">ตัวแทนจำหน่าย</a>
            <a href="customer.php">ลูกค้า</a>
          </div>
        </li>&nbsp;&nbsp;
        <li class="dropdown">
          <a href="">รายการอาหาร&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
          <div class="dropdown-content">
            <a href="listfood1.php">สาขาที่ 1</a>
            <a href="listfood2.php">สาขาที่ 2</a>
          </div>
        </li>&nbsp;&nbsp;
        <li class="dropdown">
          <a href="">วัตถุดิบ&nbsp;<i class="fa fa-sort-desc" aria-hidden="true"></i></a>
          <div class="dropdown-content">
           <a href="raw.php">วัตถุดิบ</a>
            <a href="orderraw.php">สั่งซื้อวัตถุดิบ</a>
            <a href="#">รับเข้าวัตถุดิบ</a>
            <a href="#">เบิกจ่ายวัตถุดิบ</a>
          </div>
        </li>&nbsp;&nbsp;
        <li><a href="">โปรโมชั่น</a></li>&nbsp;&nbsp;
        <li><a href="">การขายอาหาร</a></li>&nbsp;&nbsp;
        <li><a href="">ออกรายงาน</a></li>&nbsp;&nbsp;
        <li><a href="">สั่งจองอาหาร</a></li>&nbsp;&nbsp;
      </ul>
    </div>
    <div class="box4">
      <br>
      <p><a onclick="shownotification()">แจ้งเตือน(<?echo $_SESSION['news'];?>)<span class="caret"></span></a></p>
      <p><? echo $_SESSION["user"];?></p>
    </div>
    <!--<div class="box5">
      <br>
      <p><? echo $_SESSION["user"];?></p>
    </div>-->
    <div class ="box3">
      <ul >
        <li><a href="logout.php" target="" class ="button2"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
      </ul>
    </div>
  </div>
  <div class="box-box"> 
  </div>
  <div class="box-box-box"> 
    <label for="">เปลี่ยนสถานะ</label><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="radio" i>ใช่งานปกติ&nbsp;&nbsp;
      <input type="radio" >แบน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br><br><br>
    <label for="">หมายเหตุ</label>&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="text">&nbsp;&nbsp;
      
  </div>
  <div class="box-box-box-box">
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>
<script >
  function shownotification(){
    // var data1 = new Array();
    var data1 = <?php echo json_encode($_SESSION['rawop']); ?>;
    var data2 =  "";
    var i;
    if (data1.length < 1 ) {
      alert("วัตถุดิบเพียงพอ");
    }
    else {
     for (i = 0; i < data1.length; i++) {
        data2 = data2 + data1[i]+'ใกล้จะหมด'+'\n';
       }
       alert(data2);
      }
      <?$_SESSION['news'] ="0";?>
  }
</script>
</html>