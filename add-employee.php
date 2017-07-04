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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index1.php">Home</a></li>
      <li><a href="emloyee.php">พนักงาน</a></li>
      <li><a href="#">ออกรายงาน</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
      <div class="col-sm-12">
        <h4><small>ข้อมูลพนักงาน</small></h4>
        <hr>
      </div>
      <div class="container">
        <div class="row">
        <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="well">
              <label for="">รหัสพนักงาน</label>
              <input type="email" class="form-control" id="email" disabled>
              <br>
              <label for="">เลขบัตรประชาชน/เลข passport </label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">ชื่อ</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">นามสกุล</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">วันเกิด</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">เพศ</label>
              <input type="radio" id="emp_sex" name="emp_sex" value="ชาย" checked="checked">ชาย&nbsp;&nbsp;
              <input type="radio" id="emp_sex" name="emp_sex" value="หญิง">หญิง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <br>
              <br>
              <label for="">ที่อยู่</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">วันที่เข้าทำงาน</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">เบอร์โทรศัพท์</label>
              <input type="email" class="form-control" id="email" >
              <br>
              <label for="">สาขาที่ทำงาน</label>
                <select class="form-control">
                  <option>กรุณาเลือก</option>
                  <option>1</option>
                  <option>2</option>
                </select>
              <br>
              <button type="button" class = "btn btn-success" onclick="submitData()">เพิ่ม</button>
            </div>
          </div>
        </div>
    </div>
  </div>
</body>
</html>
