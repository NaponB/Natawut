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
    <div class ="box4">
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
       <div class="box-emp">
        <br><br>
        <?
        @include('conn.php');
          $strSQL = "SELECT  * FROM raw where raw_id = '".$_GET['raw_id']."'";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {
      ?>
        <h1>วัตถุดิบ</h1><br><br>
        <div class = "h"></div><br>
        <div class="boxe">
          <label for="">รหัสวัตถุดิบ</label>
            <input type="text" id="raw_id" value="<?echo $_GET['raw_id'];?>">
        </div>
        <div class="boxe1">
          <label for="">ชื่อวัตถุดิบ</label>
            <input type="text" id="raw_name" value="<?echo $objReSult['raw_name'];?>">
        </div>
        <div class="boxe">
          <label for="">หน่วยนับ</label>
          <select type="text" id="unit_id" value="<?echo $objReSult['unit_id'];?>">
          <?
       @include('conn.php');
          $strSQL4 = "SELECT  * FROM unit where unit_id = '".$objReSult['unit_id']."'";
          $objQuery4 = mysql_query($strSQL4) or die("Error Query [".$strSQL4."]");
          $objReSult4 = mysql_fetch_array($objQuery4)  
          ?>
              <option value="<?echo $objReSult4['unit_id'];?>"><?echo $objReSult4['unit_name'];?></option>
          <?
        @include('conn.php');
          $strSQL2 = "SELECT * FROM unit where unit_id not like '".$objReSult['unit_id']."'";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
      ?>              
                    <option value="<?echo $objReSult2['unit_id'];?>"><?echo $objReSult2['unit_name'];?></option>
              <? } ?>
          </select>  
        </div> 
        <div class="boxe1">
          <label for="">ชื่อบิษัท</label>
          <select type="text" id="bus_name" value="<?echo $objReSult['unit_id'];?>">
          <?
        @include('conn.php');
          $strSQL3 = "SELECT  * FROM agent where agent_id = '".$objReSult['bus_name']."'";
          $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
          $objReSult3 = mysql_fetch_array($objQuery3)  
          ?>
              <option value="<?echo $objReSult3['agent_id'];?>"><?echo $objReSult3['bus_name'];?></option>
          <?
        @include('conn.php');
          $strSQL5 = "SELECT * FROM agent where agent_id not like '".$objReSult['bus_name']."'";
          $objQuery5 = mysql_query($strSQL5) or die("Error Query [".$strSQL5."]");
          while ($objReSult5 = mysql_fetch_array($objQuery5)) {
      ?>              
                    <option value="<?echo $objReSult5['agent_id'];?>"><?echo $objReSult5['bus_name'];?></option>
              <? } ?>
          </select>  
        </div>  
        <div class="boxe">
          <label for="">ราคา/หน่วย(บาท)</label>
            <input type="text" id="raw_price" value="<?echo $objReSult['raw_price'];?>">
        </div> 
        <div class ="boxe-add">
            <input type="button"  name= "submit" class="button button1" value = "บันทึก" onclick="updateData()">
        </div>
        <div class ="boxe-reset">
          <input type="button"  name= "submit" class="button button1" value = "ยกเลิก" >
        </div>
      </div>   
  </div>
  <? } ?>
  <div class="box-box-box-box">
  </div>
</body>

<script>
  function updateData(){
  var raw_id = $('#raw_id').val();
  var raw_name =$('#raw_name').val();
  var unit_id =$('#unit_id').val();
  var raw_name =$('#raw_name').val();
  var bus_name =$('#bus_name').val();
  var raw_price =$('#raw_price').val();

  if(raw_id === "" || raw_name === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "update_raw.php",
  data: { 'raw_id': raw_id,
    'raw_name' : raw_name,
    'unit_id' : unit_id,
    'bus_name' : bus_name,
    'raw_price' : raw_price
  }
})
  .done(function( msg ) {
     // alert( "Send Data : " + msg);
     //$('#myModal').modal('hide');
  window.location.href = "raw.php";
  });
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
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
