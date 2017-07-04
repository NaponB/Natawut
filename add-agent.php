<?
@include 'conn.php';
$Page=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
      <a class="navbar-brand" href="#">Home</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="">ข้อมูลพื้นฐาน</a></li>
        <li ><a href="">ข้อมูลหลัก</a></li>
        <li ><a href="">รายการอาหาร</a></li>
        <li ><a href="">วัตถุดิบ</a></li>
        <li ><a href="">โปรโมชั่น</a></li>
        <li ><a href="">การขายอาหาร</a></li>
        <li ><a href="">ออกรายงาน</a></li>
        <li ><a href="">สั่งจอง</a></li>
        <li ><a href="">ออกจากระบบ</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav hidden-xs"><br>
      <a href="index2.php"><img class="home" src="img/home-icon2.png"></a><br><br>
      <ul class="nav nav-pills nav-stacked">
        <li class=""><!--active-->
        <a data-toggle="collapse" href="#collapse1" class="a">ข้อมูลพื้นฐาน&nbsp;&nbsp;&nbsp;
        <span class="caret"></span></a>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item"><a href="namber.php">หน่วยนับ</a></li>
              <li class="list-group-item"><a href="typefood.php">ประเภทอาหาร</a></li>
              <li class="list-group-item"><a href="size.php">ขนาดอาหาร</a></li>
              <li class="list-group-item"><a href="tablefood.php">โต๊ะอาหาร</a></li>
              <li class="list-group-item"><a href="branch.php">สาขา</a></li>
            </ul>
          </div>
        </li>
        <li>
        <a data-toggle="collapse" href="#collapse2" class="a">ข้อมูลหลัก&nbsp;&nbsp;&nbsp;
        <span class="caret"></span></a>
          <div id="collapse2" class="panel-collapse collapse">
              <ul class="list-group">
                <li class="list-group-item"><a href="agent.php">ตัวแทนจำหน่าย</a></li>
                <li class="list-group-item"><a href="customer.php">ลูกค้า</a></li>
              </ul>    
          </div>
        </li>
        <li ><a href="menufood.php" class="a">รายการอาหาร</a></li>
        <li >
        <a data-toggle="collapse" href="#collapse3" class="a">วัตถุดิบ&nbsp;&nbsp;&nbsp;
            <span class="caret"></span></a>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item"><a href="raw.php">วัตถุดิบ</a></li>
              <li class="list-group-item"><a href="orderraw.php">สั่งซื้อวัตถุดิบ</a></li>
              <li class="list-group-item"><a href="inputraw.php">รับเข้าวัตถุดิบ</a></li>
              <li class="list-group-item"><a href="ream_raw.php">เบิกจ่ายวัตถุดิบ</a></li>            
            </ul>    
          </div>
        </li>
        <li ><a href="promoction.php" class="a">โปรโมชั่น</a></li>
        <li ><a href="sell_food.php" class="a">การขายอาหาร</a></li>
        <li ><a href="report.php" class="a">ออกรายงาน</a></li>
        <li ><a href="book_food.php" class="a">สั่งจอง</a></li>
        <li ><a href="" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <h4><small>ข้อมูลตัวแทนจำหน่าย</small></h4>
        <hr>
      </div>
      <div class="col-sm-2"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-sm-3">
            <div class="well">
            <?
              @include('conn.php');
              if (isset($_GET['agent_id'])) {
                $agent_id = $_GET['agent_id'];
              }
              else
              {
                 $new_id = mysql_result(mysql_query("Select Max(substr(agent_id,-3))+1 as MaxID from  agent"),0,"MaxID");
              if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                    $agent_id="A001";
                }else{
                    $agent_id="A".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                }  
              }
              
              ?>
              <label for="">รหัสตัวแทนจำหน่าย</label>
              <input type="text" class="form-control" id="agent_id" value="<?echo "$agent_id";?>" disabled><br>
              <label for="">ชื่อบริษัท</label>
              <input type="text" class="form-control" id="agent_brand">
              <br>
              <label for="">ชื่อ - นามสกุลผู้ติดต่อ</label>
              <div class="form-inline">
                <input type="text" class="form-control" id="agent_fname">
                <input type="text" class="form-control" id="agent_lname">
              </div>
              <br>
              <label for="">ที่อยู่</label>
              <input type="text" class="form-control" id="agent_add">
              <br>
              <label for="">เบอร์ติดต่อ</label>
              <input type="text" class="form-control" id="agent_tel">
              <br>
              <label for="">E-Mail</label>
              <input type="email" class="form-control" id="agent_mail">
              <br>
              <button type="button" class = "btnn1 btn btn-success" onclick="submitData()">เพิ่ม</button>
              <button type="button" class = "btn btn-danger" onclick="window.location.reload()">ยกเลิก</button>
            </div>
          </div>
    </div>
  </div>
</body>
<script>
  function setId(id){
   $('#hnModal').html(id);
  $.ajax({
  type: "GET",
  url: "loadAgent.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);
    $('#fname_modal').html(data.contract_fname);
    $('#lname_modal').html(data.contract_lname);
    $('#address_modal').html(data.bus_add);
    $('#tel_modal').html(data.tel);
    $('#mail_modal').html(data.mail);
    console.log(data);
  }
});
//  // alert(id);
}

function updateId(id){
  $('#agent_id').val(id);
  $.ajax({
  type: "GET",
  url: "loadAgent.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);    
    $('#agent_brand').val(data.bus_name);
    $('#agent_fname').val(data.contract_fname);
    $('#agent_lname').val(data.contract_lname);
    $('#agent_add').val(data.bus_add);
    $('#agent_tel').val(data.tel);
    $('#agent_mail').val(data.mail);
    console.log(data);
  }
});
}

function submitData(){
  var agent_id = $('#agent_id').val();
  var bus_name =$('#agent_brand').val();
  var contract_fname =$('#agent_fname').val();
  var contract_lname =$('#agent_lname').val();
  var bus_add =$('#agent_add').val();
  var mail =$('#agent_mail').val();
  var tel =$('#agent_tel').val();
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
    'con_fname' : contract_fname,
    'con_lname' : contract_lname,
    'con_tel' : tel,
    'con_mail' : mail,
    'bus_add' : bus_add,
  }
})
   //window.location="detailord.php";
  .done(function( msg ) {
      alert(msg);
     //$('#myModal').modal('hide');
  window.location.reload();
  });
  // alert("กำลังทำรายการ");
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
}

function delData(id){
  var agent_id = id;
  if(agent_id === ""){
    return;
  }else{
     //alert(eats);
     if(!confirm("ยืนยันการลบข้อมูล !!"))
     {
        return;
     }
     else {
   $.ajax({
  type: "GET",
  url: "del_agent.php",
  data: { 'agent_id': id}
})
  .done(function( msg ) {
    alert(msg);
     //$('#myModal').modal('hide');
     window.location.reload();
  });
  }
  // window.location.reload();
  // alert("กำลังทำรายการ");
  // location.reload();
  }
  }
</script>
</html>
