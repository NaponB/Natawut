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
        <a data-toggle="collapse" href="#collapse3" class="a">วัตถุดิบ&nbsp;&nbsp;&nbsp;
            <span class="caret"></span></a>
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
        <li ><a href="" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small><a href="inputraw.php">ข้อมูลการรับเข้าวัตถุดิบ</a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp; <a href="add_input.php"> เพิ่มข้อมูลการรับเข้าวัตถุดิบ </a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp; รายการรับเข้าวัตถุดิบ</small></h4>
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
      <div class="col-sm-10">
        <div class="row">
          <div class="col-sm-3"></div>
          <div class="col-xs-3">
            <label for="">รหัสสั่งซื้อวัตถุดิบ</label>
            <input type="text" class="form-control" value="<?echo $_GET['ordraw_id'];?>" disabled>
          </div>
           <div class="col-xs-3">
            <label for="">วันที่สั่งซื้อวัตถุดิบ</label>
             <?
          @include('conn.php');
          $strSQL = "SELECT *, DATE_FORMAT(date,'%d-%m-%Y') as date FROM orderraw where ordraw_id = '".$_GET['ordraw_id']."'";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {
          ?>
            <input type="text" class="form-control" id="" value="<?echo $objReSult['date'];?>" disabled>                     
           <? 
         } 
           ?>
           </div>
        </div><br>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
            <div class="well">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ที่</th>
                    <th>วัตถุดิบ</th>
                    <th>จำนวน</th>
                    <th>หน่วยนับ</th>
                    <td>การจัดการ</td>                    
                  </tr>
                </thead>
                <tbody>
                  <?
                  $sum = 0;
                  $i = 1;
                      @include('conn.php');
                      $strSQL2 = "SELECT * FROM temp_detail_order where ordraw_id = '".$_GET['ordraw_id']."'";
                      $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                      while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                      $strSQL4 = "SELECT * FROM unit where unit_id = '".$objReSult2['unit_id']."'";
                      $objQuery4 = mysql_query($strSQL4) or die("Error Query [".$strSQL4."]");
                      while ($objReSult4 = mysql_fetch_array($objQuery4)) {
                      $strSQL3 = "SELECT * FROM raw where raw_id = '".$objReSult2['raw_id']."' ";
                      $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                      while ($objReSult3 = mysql_fetch_array($objQuery3)) {                      
                  ?>
                  <tr>
                    <td><?echo $i;?></td>
                    <td><?echo $objReSult3['raw_name'];?></td>
                    <td><?echo $objReSult3['raw_price'];?></td>
                    <td><?echo $objReSult2['amount'];?></td>
                    <td><?echo $objReSult4['unit_name'];?></td>                   
                    <td>
                      <button type="button" class="btn btn-info" data-toggle="modal" onclick="updateId(<? echo "'".$objReSult2["deord_id"]."'";?>)" data-target="#myModal">แก้ไข</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">แก้ไข</h4>
                                </div>
                                <div class="modal-body">
                                  <label for="">รหัสรายละเอียดการสั่งซื้อวัตถุดิบ</label>
                                  <input type="text" class="form-control" id="deord_id" value="" disabled>
                                  <br>
                                  <label for="">รหัสการสั่งซื้อวัตถุดิบ</label>
                                  <input type="text" class="form-control" id="ordraw_id" value="" disabled >
                                  <br>
                                  <label for="">ชื่อวัตถุดิบ</label>
                                   <select class="form-control" id="raw">
                                    <option>กรุณาเลือก</option>
                                    <?
                                     $strSQL9 = "SELECT  * FROM raw ";
                                     $objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
                                     while ($objReSult9 = mysql_fetch_array($objQuery9)) {
                                    ?>
                                <option value="<?echo $objReSult9["raw_id"]?>"><?echo $objReSult9["raw_name"];?></option>
                                <?
                                  }
                                ?>
                                  </select>
                                  <br>
                                  <label for="">จำนวน</label>
                                  <input type="text" id="amount" class="form-control">
                                  <br>
                                  <label for="">หน่วยนับ</label>
                                  <select class="form-control" id="unit">
                                    <option value=""></option>
                                   <?
                                     $strSQL8 = "SELECT  * FROM unit ";
                                     $objQuery8 = mysql_query($strSQL8) or die("Error Query [".$strSQL8."]");
                                     while ($objReSult8 = mysql_fetch_array($objQuery8)) {
                                    ?>
                                <option value="<?echo $objReSult8["unit_id"]?>"><?echo $objReSult8["unit_name"];?></option>
                                <?
                                  }
                                ?>
                                  </select>
                                  <br>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="updateData()">แก้ไข</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      <button type="button" class="btn btn-default">ลบ</button>
                    </td>
                  </tr>
                  <? }
            $i = $i+1; 
          }
          // $total = $objReSult2['amount']*$objReSult2['price']; 
          // $sum = $sum+$total;
            }
                  ?>                
                </tbody>
              </table><br><br>
                <button type="button" class="btn btn-default" onclick="submitData(<? echo "'".$_GET['ordraw_id']."'";?>)">ยืนยันการรับเข้า</button>
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
  function submitData(id){
  // var ordraw_id = $('#ordraw_id').val();
  // var deord_id =$('#deord_id').val();
  // var raw_price =$('#price').val();
  // var raw_amount =$('#amount').val();
  // var raw_name =$('#raw').val();
  // var unit_id =$('#unit_id').val();
  if(id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_rawstore.php",
  data: { 'ordraw_id': id
    // 'deord_id' : deord_id,
    // 'raw_amount' : raw_amount,
    // 'raw_price' : raw_price,
    // 'raw_name' : raw_name,
    // 'unit_id' : unit_id
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

function updateId(id){
  $('#deord_id').val(id);
  $.ajax({
  type: "GET",
  url: "loadDeord.php",
  data: { 'did': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);    
    $('#ordraw_id').val(data.ordraw_id);
    $('#raw').val(data.raw_id);
    $('#amount').val(data.amount);
    $('#unit').val(data.unit_id);
    console.log(data);
  }
});
}

function updateData(){
  var ordraw_id = $('#ordraw_id').val();
  var deord_id =$('#deord_id').val();
  var raw_price =$('#price').val();
  var raw_amount =$('#amount').val();
  var raw_name =$('#raw').val();
  var unit_id =$('#unit').val();
  if(deord_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "update_temp.php",
  data: { 'ordraw_id': deord_id,
    'deord_id' : deord_id,
    'raw_amount' : raw_amount,
    'raw_price' : raw_price,
    'raw_name' : raw_name,
    'unit_id' : unit_id
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

</script>
</html>