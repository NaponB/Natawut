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
      <a href="indexe.html" target=""><i class="fa fa-home" aria-hidden="true"></i></a>
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
      <ul>
        <li><a href="logout.php" target="" class ="button2"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
      </ul>
    </div>
  </div>
  <div class="box-box">
  </div>
  <div class="box-box-box"> 
      <div class="box-emp">
        <br><br>
        <h1>เพิ่มตัวแทนจำหน่าย</h1><br><br>
        <div class = "h"></div><br>
        <div class="boxe">
        <?
          @include('conn.php');
          $new_id =mysql_result(mysql_query("Select Max(substr(agent_id,-3))+1 as MaxID from  agent"),0,"MaxID");
          if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                $agent_id="A001";
            }else{
                $agent_id="A".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
            }
          ?>
          <label for="">รหัสตัวแทนจำหน่าย</label>
            <input type="text" id="agent_id" value="<?echo $agent_id;?>" disabled>
        </div>
        <div class="boxe1">
          <label for="">ชื่อบริษัท</label>
            <input type="text" id="bus_name">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">
          <label for="">ชื่อ-นามสกุล ผู้ติดต่อ</label>
            <input type="text" placeholder="ชื่อ" id="con_fname">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class ="boxe2">
          <input type="text" placeholder="นามสกุล" id="con_lname">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">  
          <label for="">เบอร์ติดต่อ</label>
            <input type="text" id="con_tel">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
         </div>
          <div class="boxe1">   
          <label for="">E-mail</label>
            <input type="email" id="con_mail">
          </div>
          <div class="boxe">  
          <label for="">ที่อยู่</label>
            <input type="text" id="bus_add">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class ="boxe-add">
            <input type="button"  name= "submit" class="button button1" value = "บันทึก" onclick ="submitData()">
          </div>
          <div class ="boxe-reset">
          <input type="button"  name= "submit" class="button button1" value = "ยกเลิก" >
          </div>
        </div>
      </div>      
  <div class="box-box-box-box">
  </div>
</body>
<script>
  function submitData(){
  var agent_id = $('#agent_id').val();
  var bus_name =$('#bus_name').val();
  var con_fname =$('#con_fname').val();
  var con_lname =$('#con_lname').val();
  var con_tel =$('#con_tel').val();
  var con_mail =$('#con_mail').val();
  var bus_add =$('#bus_add').val();
  if(agent_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_agent.php",
  data: { 'agent_id': agent_id,
    'bus_name' : bus_name,
    'con_fname' : con_fname,
    'con_lname' : con_lname,
    'con_tel' : con_tel,
    'con_mail' : con_mail,
    'bus_add' : bus_add
  }
})
  .done(function( msg ) {
    alert(msg);
     // alert( "Send Data : " + msg);
     //$('#myModal').modal('hide');
  window.location = "agent.php";
  });
  }
  alert("กำลังทำรายการ");
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
