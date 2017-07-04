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
    <div class="col-sm-2 sidenav hidden-xs">
      <h2>Home</h2>
      <ul class="nav nav-pills nav-stacked"><br>
        <li class="active "><a data-toggle="collapse" href="#collapse1">ข้อมูลพื้นฐาน</a>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">หน่วยนับ</li>
              <li class="list-group-item">ประเภทอาหาร</li>
              <li class="list-group-item">ขนาดอาหาร</li>
              <li class="list-group-item">โต๊ะอาหาร</li>
              <li class="list-group-item">สาขา</li>
            </ul>    
          </div>
        </li>
        <li ><a data-toggle="collapse" href="#collapse2">ข้อมูลหลัก</a>
          <div id="collapse2" class="panel-collapse collapse">
              <ul class="list-group">
                <li class="list-group-item">ตัวแทนจำหน่าย</li>
                <li class="list-group-item">ลูกค้า</li>
              </ul>    
            </div>
        </li>
        <li ><a href="">รายการอาหาร</a></li>
        <li ><a data-toggle="collapse" href="#collapse3">วัตถุดิบ</a>
          <div id="collapse3" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="list-group-item">สั่งซื้อวัตถุดิบ</li>
              <li class="list-group-item">รับเข้าวัตถุดิบ</li>
              <li class="list-group-item">เบิกจ่ายวัตถุดิบ</li>            
            </ul>    
          </div>
        </li>
        <li ><a href="">โปรโมชั่น</a></li>
        <li ><a href="">การขายอาหาร</a></li>
        <li ><a href="">ออกรายงาน</a></li>
        <li ><a href="">สั่งจอง</a></li>
        <li ><a href="">ออกจากระบบ</a></li>
      </ul>
    </div><br>
      <div class="col-sm-10">
        <h4><small>ใบรับเข้าวัตถุดิบ</small></h4>
        <hr>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <div class="box">
                <div class="info">
                    <h6 align="right">เลขที่</h6>
                    <h4 class="text-center">ใบรับเข้าวัตถุดิบ</h4>
                    <h5 class="text-center">ที่อยู่สาขา ตาม login</h5>
                    <h5 class="text-center">วันที่รับเข้าวัตถุดิบ</h5>
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