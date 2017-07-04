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
            <a href="photo.php">รูปภาพ</a>
            <a href="size.php">ขนาดอาหาร</a>
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
      <ul>
        <li><a href="logout.php" target="" class ="button2"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
      </ul>
    </div>
  </div>
  <div class="box-box" >
  </div>
  <div class="box-box-box" id="divToPrint"> 
      <div class="box-bla">
        <br>
        <p align="right">เลขที่ใบสั่งซื้อ&nbsp;&nbsp;<?echo $_GET['ordraw_id'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <br><br>
        <center>
          <h1>ใบสั่งซื้อสินค้า</h1>
          <br>
          <h1>ร้านอาหาร ณฐวุฒิ แหนมเนือง</h1>
          <br><br>
          <h2>วันที่&nbsp;&nbsp;<?echo date("d/m/Y")?></h2>
        </center>
          <br><br>
          <?
             $i = 1;
             $sum = 0;
        @include('conn.php');
          $strSQL9 = "SELECT  * FROM orderraw where ordraw_id = '".$_GET['ordraw_id']."'";
          $objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
          while ($objReSult9 = mysql_fetch_array($objQuery9)) {
            $strSQL8 = "SELECT  * FROM agent where agent_id = '".$objReSult9['bus_name']."'";
          $objQuery8 = mysql_query($strSQL8) or die("Error Query [".$strSQL8."]");
          while ($objReSult8 = mysql_fetch_array($objQuery8)) {
          ?>
          <h3>ชื่อบริษัทตัวแทนจำหน่าย&nbsp;&nbsp;<?echo $objReSult8['bus_name'];?></h3>
          <? }} ?>
          <br><br>
          <table width="90%"  border="1">
            <tr>

              <th>ลำดับที่</th>
              <th>รายการวัตถุดิบ</th>
              <th>จำนวน</th>
              <th>หน่วยนับ</th>
              <th>ราคาต่อหน่วย(บาท)</th>
              <th>ราคารวม</th>
            </tr>
            <tr>
             <?
             $i = 1;
             $sum = 0;
        @include('conn.php');
          $strSQL = "SELECT  * FROM detail_order where ordraw_id = '".$_GET['ordraw_id']."'";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {
              $strSQL2 = "SELECT  * FROM raw where raw_id = '".$objReSult['raw_id']."'";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
             $strSQL3 = "SELECT  * FROM unit where unit_id = '".$objReSult['unit_id']."'";
          $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
          while ($objReSult3 = mysql_fetch_array($objQuery3)) {
      ?>
              <td><?echo $i;?></td>
              <td><?echo $objReSult2['raw_name'];?></td>
              <td style="text-align:right;padding-right:2px;"><?echo $objReSult['amount'];?></td>
              <td><?echo $objReSult3['unit_name'];?></td>
              <td style="text-align:right;padding-right:2px;"><?echo $objReSult['raw_price'];?></td>
              <td style="text-align:right;padding-right:2px;"><?echo $objReSult['amount']*$objReSult['raw_price'];?></td>
            </tr>

            <?
            $total = $objReSult['amount']*$objReSult['raw_price']; 
          $sum = $sum+$total;   
          $i++;   
             }
           }
             } ?>
          </table>
          <br><br>
          <center>
          <h3>ยอดรวมสุทธิ&nbsp;&nbsp;<?echo $sum;?>&nbsp;&nbsp;บาท</h3>
          </center>
          <br><br>
          <h4 align="right">ผู้ออกรายงาน&nbsp;&nbsp;<? echo $_SESSION["user"];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
      </div>    
    <br><br><br>
    
  </div>
  <div class="box-box-box-box" >
  <center><input name="btnPrint" type="button" id="btnPrint" value="Print" onclick="PrintDiv();"></center>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>

<script >
            function PrintDiv() {    
       var divToPrint = document.getElementById('divToPrint');
       var popupWin = window.open('');
       popupWin.document.open();
       popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
      popupWin.document.close();
      window.location;
            }

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
