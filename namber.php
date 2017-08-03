<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="nK">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
  </style>
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
      <i href="#" class="a"><img class="home" src="img/user.png">&nbsp;&nbsp; ผู้ใช้ระบบ : Thararat</i>
      <hr>
      <ul class="nav nav-pills nav-stacked">
        <li ><a href="index2.php" class="a">หน้าหลัก</a></li>
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
        <li >
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
        <a data-toggle="collapse" href="#collapse3" class="a">วัตถุดิบ&nbsp;
            <span class="badge">1</span>&nbsp;&nbsp;<span class="caret"></span></a>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item"><a href="raw.php">วัตถุดิบ</a></li>
              <li class="list-group-item"><a href="orderraw.php">สั่งซื้อวัตถุดิบ</a></li>
              <li class="list-group-item"><a href="inputraw.php">รับเข้าวัตถุดิบ</a></li>
              <li class="list-group-item"><a href="reamraw.php">เบิกจ่ายวัตถุดิบ</a></li>            
            </ul>    
          </div>
        </li>
        <li ><a href="promoction.php" class="a">โปรโมชั่น</a></li>
        <li ><a href="sell_food.php" class="a">การขายอาหาร</a></li>
        <li ><a href="report.php" class="a">ออกรายงาน</a></li>
        <li ><a href="book_food.php" class="a">สั่งจอง</a></li>
        <li ><a href="logout.php" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small>ข้อมูลหน่วยนับ</small></h4>
        </div>
        <div class="col-md-4">
          <form class="" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-primary" type="submit"><img class="plus" src="img/searcher.png"></button>
                </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <hr>
      </div>
      <div class="col-sm-2"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="well">
            <?
              @include('conn.php');
              $new_id =mysql_result(mysql_query("Select Max(substr(unit_id,-2))+1 as MaxID from  unit"),0,"MaxID");
              if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                    $unit_id="U01";
                }else{
                    $unit_id="U".sprintf("%02d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                }
          ?>
              <label for="">รหัสหน่วยนับ</label>
              <input type="text" class="form-control" id="unit_id" value="<?echo $unit_id;?>" disabled>
              <br>
              <label for="">ชื่อหน่วยนับ &nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
              <input type="email" class="form-control" id="unit_name" >
              <br>
              <button type="button" class = "btnn btn btn-success" onclick="submitData()">เพิ่ม</button>
              <button type="button" class = "btn btn-danger" onclick="window.location.reload()">ยกเลิก</button>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="well">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>รหัสหน่วยนับ</th>
                    <th>ชื่อหน่วยนับ</th>
                    <th>การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <?
                @include('conn.php');
                  $strSQL = "SELECT  * FROM unit order by unit_id asc";
                  $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                  while ($objReSult = mysql_fetch_array($objQuery)) {
              ?>
                  <tr>
                     <td><?echo $objReSult['unit_id'];?></td>
                     <td><?echo $objReSult['unit_name'];?></td>
                     <td>          
                      <button type="button" class="btn btn-default" data-toggle="tooltip"  title="แก้ไขข้อมูล" onclick="updateId(<? echo "'".$objReSult["unit_id"]."'";?>)"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                      <button type="button" class="btn btn-danger" data-toggle="tooltip"  title="ลบข้อมูล" onclick="delData(<? echo "'".$objReSult["unit_id"]."'";?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                     </td>
                  </tr>
                  <?
                  }
                  ?>
                </tbody>
              </table>
              <nav aria-label="Page navigation">
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
<script>
  function submitData(){
  var unit_id = $('#unit_id').val();
  var unit_name =$('#unit_name').val();
  if(unit_id === "" || unit_name === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_unit.php",
  data: { 'unit_id': unit_id,
    'unit_name' : unit_name
  }
  
})
   //window.location="detailord.php";
  .done(function( msg ) {
      alert( "Send Data : " + msg);
     //$('#myModal').modal('hide');
  window.location.reload();
  });
  // alert("กำลังทำรายการ");
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
}

function updateId(id){
  $('#unit_id').val(id);
  $.ajax({
  type: "GET",
  url: "loadUnit.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);    
    $('#unit_id').val(data.unit_id);
    $('#unit_name').val(data.unit_name);
    console.log(data);
  }
});
}

function delData(id){
  var unit_id = id;
  if(unit_id === ""){
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
  url: "del_unit.php",
  data: { 'unit_id': id}
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
<!--<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>-->
</html>
