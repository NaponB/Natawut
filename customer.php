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
        <li class="active">
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
        <div class="col-md-8">
          <h4><small>ข้อมูลลูกค้า</small></h4>
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
          <div class="well">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>รหัสลูกค้า</th>
                  <th>ชื่อลูกค้า</th>
                  <th>E-Mail</th>
                  <th>ที่อยู่</th>
                  <th>เบอร์ติดต่อ</th>
                  <th>สถานะ</th>
                  <th>หมายเหตุ</th>
                  <th>การจัดการ</th>
                </tr>
              </thead>
              <tbody>
                 <?
                    @include('conn.php');
                      $strSQL = "SELECT  * FROM customers";
                      $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                      while ($objReSult = mysql_fetch_array($objQuery)) {
                  ?>
                <tr>
                  <td><?echo $objReSult['cus_id'];?></td>
                  <td><?echo $objReSult['cus_fname']." ".$objReSult['cus_lname'];?></td>
                  <td><?echo $objReSult['cus_email'];?></td>
                  <td><?echo $objReSult['cus_add'];?></td>
                  <td><?echo $objReSult['cus_tel'];?></td>
                  <td><?if($objReSult['status'] == "1") {echo "ใช้งานปกติ";}else {echo "ระงับการใช้งาน";}?></td>
                  <td><?echo $objReSult['note'];?></td>
                  <td>
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เปลี่ยนสถานะ</button>
                      <!-- Modal -->
                      <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                          <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">ชื่อลูกค้า</h4>
                            </div>
                            <div class="modal-body">
                              <div class="radio">
                                <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="prop" value="2"> บล็อค
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="inlineRadioOptions" id="prop" value="1"> ปกติ
                                </label>
                              </div>
                                <label for="">หมายเหตุ</label>
                                <input type="text" id="note" class="form-control" aria-describedby="helpBlock">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal" onclick = "updateBlock(<?echo "'".$objReSult["cus_id"]."'";?>)">OK</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
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
  function updateBlock(id){
    var prop =$('#prop:checked').val();
    var note =$('#note').val();
    $.ajax({ 
  type: "POST",
  url: "update_customer.php",
  data: { 'prop': prop,
    'note' : note,
    'cus_id' : id},  
  success: function (msg) {
     // location.reload();
     window.location.reload();
    console.log(msg);
  }
})
  }
</script>
</html>
