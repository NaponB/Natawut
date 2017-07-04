<!DOCTYPE html>
<html lang="en">
<head>
	<title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
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
      <a href="index2.php"><img class="home" src="img/home-icon2.png"></a>
      <hr>
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
        <li ><a href="menufood.php" class="a">รายการอาหาร</a></li>
        <li >
        <a data-toggle="collapse" href="#collapse3" class="a">วัตถุดิบ&nbsp;
            <span class="badge">1</span>&nbsp;&nbsp;<span class="caret"></span></a>
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
        <h4><small>ใบความต้องการสั่งซื้อวัตถุดิบ</small></h4>
        <hr>
      </div>
      <div class="col-sm-2"></div>
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="info">
                    <h6 align="right">เลขที่</h6>
                    <h4 class="text-center">ใบความต้องการสั่งซื้อวัตถุดิบ</h4>
                    <h5 class="text-center">ที่อยู่สาขา ตาม login</h5>
                    <h5 class="text-center">วันที่สั่งซื้อ</h5>
                    <p>ชื่อบริษัท</p>
                    <p>ชื่อผู้ติดต่อ</p>
                    <p>ที่อยู่</p>
                    <p>E-mail</p>
                    <p>เบอร์ติดต่อ</p>
                </div>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>ลำดับ</th>
                      <th>รายการ</th>
                      <th>ราคา/หน่วย(บาท)</th>
                      <th>จำนวน</th>
                      <th>หน่วยนับ</th>
                      <th>ราคารวม</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Anna</td>
                      <td>Pitt</td>
                      <td>35</td>
                      <td>New York</td>
                      <td>USA</td>
                    </tr>
                  </tbody>
                  <thead>
                    <tr>
                      <td colspan="5">ราคารวม</td>
                      <td></td>
                    </tr>
                  </thead>
                </table>
                <button type="button" class="btn btn-success">พิมพ์</button>
                <h6 align="right">พิมพ์ครั้งที่ </h6>
            </div>
        </div> 
      </div>
    </div>
  </div>
</div>
</body>
</html>