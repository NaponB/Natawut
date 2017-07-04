<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natawut</title>
    <link rel="stylesheet" href="assets/css/combined.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/combined.js"></script>
</head>
<body>
    <header class="nk-header">
        <!--START: Navbar-->
        <nav class="nk-navbar nk-navbar-top nk-navbar-sticky nk-navbar-transparent box-sha">
            <div class="container">
                <div class="nk-nav-table">
                    <a href="" class="nk-nav-logo">
                        <img src="assets/images/logo-light.svg" alt="" width="85" class="nk-nav-logo-onscroll">
                        <img src="assets/images/logo.svg" alt="" width="85">
                    </a>
                    <ul class="nk-nav nk-nav-right hidden-md-down" data-nav-mobile="#nk-nav-mobile">
                        <li>
                            <a href="food_member.php">รายการอาหาร</a>
                        </li>
                        <li>
                            <a href="member.php">ข้อมูส่วนตัว</a>
                        </li>
                        <li>
                            <a href="logout.php">ออกจากระบบ</a>
                        </li>
                    </ul>
                    <ul class="nk-nav nk-nav-right nk-nav-icons">
                        <li class="single-icon hidden-lg-up">
                            <a href="#" class="nk-navbar-full-toggle">
                                <span class="nk-icon-burger">
                                    <span class="nk-t-1"></span>
                                    <span class="nk-t-2"></span>
                                    <span class="nk-t-3"></span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END: Navbar -->
    </header>
    <div class="nk-main">
        <!-- START: About Our Agency -->
        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="nk-gap-4 mt-9"></div>
                        <div class="nk-gap-4 mt-9"></div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <table >
                                    <tr>
                                        <td class="col-md-12">ข้อมูลทั่วไป</td>
                                        <td><a href="edit_member.php"><button type="button" class="btn btn-primary" data-toggle="tooltip"  title="แก้ไขข้อมูล" onclick=""><img class="plus" src="img/edit.png"></button></a></td>
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
                                            <td>ธารารัตน์ &nbsp;&nbsp;&nbsp; เกิดน้ำใส</td>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th>Address:</th>
                                            <td>171/58 ต.ท่าตูม อ.ศรีมหาโพธ์ จ.ปราจีนบุรี 25140</td>
                                          </tr>
                                          <tr>
                                            <th>Tel:</th>
                                            <td>0808376787</td>
                                          </tr>
                                          <tr>
                                            <th>E - mail</th>
                                            <td>july@example.com</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    </div>
                                </div>
                                <hr>
                                <div class="panel-group">
                                  <div class="panel panel-info">
                                    <div class="panel-heading">
                                      <h4 class="panel-title" style="text-align: center;">
                                        <a data-toggle="collapse" href="#collapse1" >เปลืี่ยรหัสผ่าน</a>
                                      </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                      <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="color: black;">Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" placeholder="Password">
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="color: black;">New Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" placeholder="New Password">
                                                </div>
                                            </div><br><br>
                                            <div class="form-group">
                                                <label class="col-sm-3 control-label" style="color: black;">Confirm Password</label>
                                                <div class="col-sm-9">
                                                  <input type="password" class="form-control" placeholder="Confirm Password">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- END: About Our Agency --> 
    </div>
</body>
</html>