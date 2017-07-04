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

  <script>
    function Test(ordraw_id)
{
  // var oo = ordraw_id.split("|")[0];
  if (ordraw_id.split("|")[0]== " ") {
      ordraw_date.value = "ff";
  }
  ordraw_date.value = ordraw_id.split("|")[1];
}
  </script>
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
    </div><br>
    <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small><a href="inputraw.php">ข้อมูลการรับเข้าวัตถุดิบ</a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp;เพิ่มข้อมูลการรับเข้าวัตถุดิบ</small></h4>
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
      <br><br>
        <div class="col-sm-2"></div>
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-5">
                <div class="well">
                <?
                  @include('conn.php');
                  $new_id =mysql_result(mysql_query("Select Max(substr(input_id,-4))+1 as MaxID from input_table"),0,"MaxID");
                  if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                        $input_id="IN0001";
                    }else{
                        $input_id="IN".sprintf("%04d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                    }
                  ?>
                  <label for="">รหัสการรับเข้าวัตถุดิบ</label>
                  <input type="text" class="form-control" id="input_id" disabled value="<?echo $input_id;?>">
                  <br>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">รหัสการสั่งซื้อวัตถุดิ</label>
                      <select class="form-control" id="ordraw_id" onchange="Test(this.value)">
                        <option value="<?echo "";?>|<?echo "";?>">กรุณาเลือก</option>
                        <?
                           $strSQL2 = "SELECT  *, DATE_FORMAT(date,'%d/%m/%Y') as date FROM orderraw";
                           $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                           while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                           ?>
                              <option value="<?echo $objReSult2["ordraw_id"];?>|<?php echo $objReSult2["date"];?>"><?echo $objReSult2["ordraw_id"];?></option>
                              <?
                            }
                              ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label for="">วันที่สั่งซื้อ</label>
                      <!-- <select class="form-control" id="ordraw_id">
                          <option>กรุณาเลือก</option>
                    
                      </select>  -->
                      <input type="text" class="form-control" id="ordraw_date" value="" disabled>  
                    </div>
                  </div>
                  <br><br>
                  <label for="">ชื่อพนักงาน</label>
                  <input type="text" class="form-control" id="emp_name" >
                  <br>
                  <label for="">วันที่รับเข้า</label>
                  <input type="date" class="form-control" id="input_date" value="<?php echo date('Y-m-d'); ?>" min = "<?php echo date('Y-m-d'); ?>">
                  <br>
                  <label for="">สาขา</label>
                  <select class="form-control" id="branch">
                    <option>กรุณาเลือก</option>
                    <?
                     $strSQL2 = "SELECT  * FROM branch";
                     $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                     while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                    ?>
                <option value="<?echo $objReSult2["branch_id"]?>"><?echo $objReSult2["branch_add"];?></option>
                <?
              }
                ?>
                  </select>
                  <br>
                  <button type="button" class = "btn btn-success" onclick="submitData()">เพิ่ม</button>
                  <a class="btn btn-primary" href="det_input.php" role="button">ถัดไป</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-10">
          <br><br><br>
          </div>
        </div>
   
</div>
</body>

<script>
  function submitData(){
  var input_id = $('#input_id').val();
  var ordraw_id = $('#ordraw_id').val();
  var emp_name = $('#emp_name').val();
  var input_date = $('#input_date').val();
  var branch = $('#branch').val();
  if(input_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_input.php",
  data: { 'input_id': input_id,
    'ordraw_id' : ordraw_id,
    'emp_name' : emp_name,
    'input_date' : input_date,
    'branch' : branch
  }
  
})
   //window.location="detailord.php";
  .done(function( msg ) {
      alert(msg);
     //$('#myModal').modal('hide');
  window.location = "det_input.php?ordraw_id="+ordraw_id.split("|")[0];
  });
  // alert("กำลังทำรายการ");
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
}
</script>
</html>
