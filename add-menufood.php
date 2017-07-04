<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li class="active"><a href="menufood.php" class="a">รายการอาหาร</a></li>
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
        <h4><small>ข้อมูลรายการอาหาร</small></h4>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-3"></div>
          <form name="frmMain" method="post" action="insert_food.php" enctype="multipart/form-data">
          <iframe id="iframe_target" name="iframe_target" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
          <div class="col-sm-2"></div>
          <div class="col-sm-3">      
            <div class="well">
              <?
                @include('conn.php');
                $new_id =mysql_result(mysql_query("Select Max(substr(menu_id,-3))+1 as MaxID from  menu"),0,"MaxID");
                if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                      $menu_id="M001";
                  }else{
                      $menu_id="M".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                  }
              ?>
              <label for="">รหัสรายการอาหาร</label>
              <input type="text" class="form-control" id="m_id" value="<?echo "$menu_id";?>" name = "m_id" readonly>
              <br>
              <label for="">ชื่อประเภทอาหาร</label>
              <select type="text" id="m_type" name="m_type" class="form-control">
                   <?
                    @include('conn.php');
                      $strSQL2 = "SELECT  * FROM type_food";
                      $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                      while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                  ?>
                    <option value="<?echo $objReSult2['Type_id'];?>"><?echo $objReSult2['type_name'];?></option>
                <? } ?>
                </select>
                <br>
                <label for="">ชื่ออาหาร</label>
                <input type="text" class="form-control" id="m_name" name="m_name">
                <br>
                <label for="">ขนาดอาหาร</label>
                <select type="text" id="m_size" name="m_size" class="form-control">
              <?
                @include('conn.php');
                  $strSQL3 = "SELECT  * FROM size";
                  $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                  while ($objReSult3 = mysql_fetch_array($objQuery3)) {
              ?>
                    <option value="<?echo $objReSult3['size_id'];?>"><?echo $objReSult3['size_name'];?></option>
            <? } ?>
            </select>
              <br>
              <label for="">ราคา</label>
              <input type="text" class="form-control" id="m_price" name="m_price">
              <br>
              <label for="">รูป</label>
              <input type="file" class="form-control" id="m_file" name="m_file">
              <br>
              <label for="">สาขา</label>
              <input type="text" class="form-control" id="m_branch" name="m_branch">
              <br>
              <input type="submit" class = "btn btn-success" name="submit" value="เพิ่ม" />
              <button type="button" class = "btn btn-danger" onclick="window.location.reload()">ยกเลิก</button>
            </div>
            </form>
        </div>
    </div>
  </div>
</body>
<script>

  function submitData(){
  var m_id = $('#m_id').val();
  var m_name =$('#m_name').val();
  var m_type =$('#m_type').val();
  var m_size =$('#m_size').val();
  var m_file =$('#m_file').val();
  var m_price =$('#m_price').val();
  var m_branch =$('#m_branch').val();
  if(m_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_food.php",
  data: { 'm_id': m_id,
    'm_name' : m_name,
    'm_type' : m_type,
    'm_size' : m_size,
    'm_price' : m_price,
    'm_branch' : m_branch
  }
})
  .done(function( msg ) {
     // alert(msg + m_file);
     //$('#myModal').modal('hide');
  window.location.reload();
  });

  $.ajax({
  type: "FILES",
  url: "insert_food.php",
  data: { 'm_file' : m_file
    }
})
  .done(function( msg ) {
     alert(msg);
     //$('#myModal').modal('hide');
  window.location.reload();
  });

  }
  // alert(idFood + ' ' + hn + ' ' + detail);
}

  function setId(id){
   $('#hnModal').html(id);
  $.ajax({
  type: "GET",
  url: "loadMenu.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);
    $('#m_type2').html(data.type_name);
    $('#m_size2').html(data.size_name);
    $('#m_price2').html(data.menu_price);
    $('#m_pic').html("<img src=img/"+data.foodPic+" width=50px height=50px>");
    $('#m_branch2').html(data.branch);
    console.log(data);
  }
});
//  // alert(id);
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
  url: "del_menu.php",
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

  function updateId(id){
  // $('#agent_id').val(id);
  $.ajax({
  type: "GET",
  url: "loadMenu.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);    
    $('#m_id').val(data.menu_id);
    $('#m_name').val(data.menu_name);
    $('#m_type').val(data.Type_id);
    $('#m_size').val(data.menu_size);
    $('#m_price').val(data.menu_price);
    $('#m_branch').val(data.branch);
    console.log(data);
  }
});
}

</script>
</html>
