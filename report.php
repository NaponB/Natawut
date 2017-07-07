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
      <a class="navbar-brand" href="#">home2</a>
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
        <li ><a href="logout.php" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small>ออกรายงาน</small></h4>
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
      <div class="col-sm-3"></div>
      <div class="row">
        <div class="col-md-3">
          <label>เลือกรายงานที่ต้องการ</label>
          <select class="form-control">
            <option>กรุณาเลือก</option>
            <option>รายงานสรุปยอดขาย</option>
            <option>รายงานสรุปรายรับ - รายจ่ายของร้าน</option>
            <option>รายงานสรุปการสั่งซื้อวัตถุดิบ</option>
            <option>รายงานสรุปรายการอาหารที่ขายดี</option>
          </select>
        </div>
        <div class="col-md-4">
          <label>เลือกช่วงเวลาที่ต้องการ</label><br>
          <div class="form-group col-lg-5">
            <input type="text" name="" id=""  class="form-control"  value=""> 
          </div> 
          <div class="form-group col-lg-1">
            ถึง
          </div> 
          <div class="form-group col-lg-5">
            <input type="text" name="" id=""  class="form-control" " value="">
          </div>
        </div>
        <div class="col-md-1">
          <button class="btn-3 btn btn-primary" type="submit">ดูรายงาน</button>
        </div>
      </div><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <hr>
      </div>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <h3 align="center">รายงานสรุปยอดขายตั้งแต่วันที่&nbsp;&nbsp;&nbsp; ถึงวันที่&nbsp;&nbsp;&nbsp;</h3><br>
        <div class="well well-sm">
          <table class="table table-striped">
            <thead align="center"> 
              <tr>
                <th>ที่</th>
                <th>วันที่</th>
                <th>รายการขาย</th>
                <th>จำนวน</th>
                <th>หน่วยนับ</th>
                <th>ยอดขาย(บาท)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        </div>
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        <h3 align="center">รายงานสรุปรายรับ - รายจ่ายของร้านตั้งแต่วันที่&nbsp;&nbsp;&nbsp; ถึงวันที่&nbsp;&nbsp;&nbsp;</h3><br>
        <div class="well well-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ที่</th>
                <th>วันที่</th>
                <th>รายการ</th>
                <th>รายรับ</th>
                <th>รายจ่าย</th>
                <th>เงินคงเหลือ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        </div>
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        <h3 align="center">รายงานสรุปการสั่งซื้อวัตถุดิบตั้งแต่วันที่&nbsp;&nbsp;&nbsp; ถึงวันที่&nbsp;&nbsp;&nbsp;</h3><br>
        <div class="well well-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ที่</th>
                <th>วันที่</th>
                <th>รายการสั่งซื้อ</th>
                <th>ราคา/หน่วย</th>
                <th>จำนวน</th>
                <th>หน่วยนับ</th>
                <th>ราคารวม</th>
                <th>ยอดซื้อสุทธิ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        </div>
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        <h3 align="center">รายงานสรุปรายการอาหารที่ขายดีตั้งแต่วันที่&nbsp;&nbsp;&nbsp; ถึงวันที่&nbsp;&nbsp;&nbsp;</h3><br>
        <div class="well well-sm">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ที่</th>
                <th>วันที่</th>
                <th>รายการอาหาร</th>
                <th>จำนวน</th>
                <th>หน่วยนับ</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
                <td>Doe</td>
              </tr>
            </tbody>
          </table>
        </div>
        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
      </div>
    </div>
  </div>
</div>
</body>
</html>
