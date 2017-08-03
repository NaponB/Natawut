<!DOCTYPE html>
<html lang="en">
<head>
  <title>Natawut</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/box.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jss.js"></script>
  <style>
  </style>
</head>
<body>
<div class="wrapper">
  <div class="header">
      <div class="row">
        <div class="col-md-12">
            <div class="col-md-6"></div>
            <div class="col-md-3"></div>
            <div class="col-md-1"><br><br><a href="login.php">เข้าสู่ระบบ</a></div>
            <div class="col-md-2"><br><br><a href="register.php">สร้างบัญชีของคุณ</a></div>
        </div>
      </div>
  </div>
  <nav class="nav">
    <ul class="">
      <li><a  href="#">โปรโมชั่น</a></li>
      <li><a  href="menu.php">รายการอาหาร</a></li>
      <li><a  href="#">เครื่องดื่ม</a></li>
      <li><a  href="member.php">ข้อมูลส่วนตัว</a></li>
    </ul>
    <ul class="navbar-right">
        <li><a href="#"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
    </ul>
  </nav>
  <div class="container-fluid">
    <div class="row content">
      <div class="con">
      <br><br>
        <div class="panel panel-success">
                                <div class="panel-heading">
                                    <table >
                                        <tr>
                                            <td class="col-md-12">แก้ไขข้อมูล</td>
                                            <td><br><br></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 " align="center">

                                        </div>
                                        <div class=" col-md-9 col-lg-9 "> 
                                            <table class="table">
                                            <thead>
                                              <tr>
                                                <th class="col-md-3">Name:</th>
                                                <td><div class="row">
                                                      <div class="col-xs-8 col-sm-6">
                                                        <input type="text" name="" id=""  class="form-control"  placeholder="ธารารัตน์">
                                                      </div>
                                                      <div class="col-xs-4 col-sm-6">
                                                        <input type="text" name="" id=""  class="form-control"  placeholder="เกิดน้ำใส">
                                                      </div>
                                                    </div>
                                                </td>
                                              </tr>
                                            </thead>
                                            <tbody>
                                              <tr>
                                                <th>Address:</th>
                                                <td><input type="type" class="form-control" placeholder="171/58 ต.ท่าตูม อ.ศรีมหาโพธ์ จ.ปราจีนบุรี 25140"></td>
                                              </tr>
                                              <tr>
                                                <th>Tel:</th>
                                                <td><input type="type" class="form-control" placeholder="0808376787"></td>
                                              </tr>
                                              <tr>
                                                <th>E - mail</th>
                                                <td><input type="type" class="form-control" placeholder="july@example.com"></td>
                                              </tr>
                                            </tbody>
                                          </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <button type="button" class = "btnn1 btn btn-success" onclick="">บันทึก</button>
                                    <button type="button" class = "btn btn-danger" onclick="">ยกเลิก</button>
                                </div> 
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
