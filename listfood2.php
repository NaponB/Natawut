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
    <div class ="box3">
      <ul >
        <li><a href="logout.php" target="" class ="button2"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
      </ul>
    </div>
  </div>
  <div class="box-box"> 
  </div>
  <div class="box-box-box"> 
    <br>
    <br>
    <div class="box-row">
      <br>
      <br>
      <br>
      <form method="post">
      <p>ค้นหาข้อมูลรายการอาหาร สาขาที่ 2</p>
      <ul>
      <li><input type="text" name="txtKeyword" id="txtKeyword" placeholder="ใสรหัสรายการอาหาร" value=""></li>&nbsp;
      <li><input type="submit" name="search" value="ค้นหา"></li>
      </ul>
      </form>
    </div>
    <a class="button button2" href="addlistf1.php" target=""><i class="i fa fa-plus tooltip" aria-hidden="true"></i>&nbsp;เพิ่มข้อมูล</a>
    <table>
      <tr>
        <th>รหัสรายการอาหาร</th>
        <th>ชื่อประเภทอาหาร</th>
        <th>ชื่ออาหาร</th>
        <th>ขนาดอาหาร</th>
        <th>ราคา</th>
        <th>รูป</th>
        <th>ลิงค์</th>
      </tr>
      <tr>
      <?
        @include('conn.php');
        if ($strKeyword != "") {
          # code...
           $strSQL = "SELECT  * FROM menu2 where menu_id = '".$strKeyword."'";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
        }
        else  {
          $strSQL = "SELECT  * FROM menu2";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");    
          
        }
         while ($objReSult = mysql_fetch_array($objQuery)) {
          $strSQL2 = "SELECT  * FROM type_food where Type_id = '".$objReSult['type_id']."'";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");        
            $strSQL3 = "SELECT  * FROM size where size_id = '".$objReSult['menu_size']."'";
          $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
        while ($objReSult2 = mysql_fetch_array($objQuery2)) {
          while ($objReSult3 = mysql_fetch_array($objQuery3)) {
      ?>
        <td><?echo $objReSult['menu_id'];?></td>
        <td><?echo $objReSult2['type_name'];?></td>
        <td><?echo $objReSult['menu_name'];?></td>
        <td><?echo $objReSult3['size_name'];?></td>
        <td><?echo $objReSult['menu_price'];?></td>
        <td><img src ="image2/food2/<?echo $objReSult['foodPic'];?>" width = "50px" height = "50px"></td>
        <td>
          <ul>
            <li><a href="editlistf2.php?m_id=<?echo $objReSult['menu_id'];?>"><i class="fa fa-pencil-square-o  tooltip" aria-hidden="true" style="cursor:pointer"><span class="tooltiptext">แก้ไขข้อมูล</span></i></a></li>&nbsp;&nbsp;&nbsp;
            <li><a href="del_listf2.php?m_id=<?echo $objReSult['menu_id'];?>" onclick="return confirm('ยืนยันการลบข้อมูล ??')"><i class="fa fa-trash-o  tooltip" aria-hidden="true" style="cursor:pointer"><span class="tooltiptext">ลบข้อมูล</span></i></a></li>
          </ul>
        </td>
      </tr>
      <?
      }
      } 
    }
        ?>
    </table>
  </div>
  <div class="box-box-box-box">
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>
<script>
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
