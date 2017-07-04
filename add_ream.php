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
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height:786px;}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
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
        <h4><small>เบิกจ่ายวัตถุดิบ</small></h4>
        <hr>
      </div>
      <br><br>
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-5">
                <div class="well">
                  <label for="">รหัสการเบิกจ่ายวัตถุดิบ</label>
                  <input type="email" class="form-control" id="email" disabled>
                  <br>
                  <label for="">พนักงาน</label>
                  <input type="email" class="form-control" id="email" disabled>
                  <br>
                  <label for="">สาขา</label>
                  <input type="email" class="form-control" id="email" >
                  <br>
                  <label for="">วัน-เวลาในการเบิกจ่าย</label>
                  <input type="email" class="form-control" id="email" >
                  <br>
                  <button type="button" class = "btn btn-success" onclick="submitData()">เพิ่ม</button>
                  <a class="btn btn-primary" href="det_ream_raw.php" role="button">ถัดไป</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-10">
          <br><br><br>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
</html>
