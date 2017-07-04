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
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="index1.php">Home</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="employee.php">พนักงาน</a></li>
      <li><a href="repost_admin.php">ออกรายงาน</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
      <div class="col-sm-12">
        <h4><small>ข้อมูลพนักงาน</small></h4>
        <hr>
      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <a href="add-employee.php"><button type="button" class="btn btn-success">เพิ่มข้อมูลพนักงาน</button></a>
      <div class="container">
        <div class="col-sm-12">
          <div class="well">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>รหัสพนักงาน</th>
                  <th>ชื่อ</th>
                  <th>เบอร์โทรศัพท์</th>
                  <th>สาขาที่ทำงาน</th>
                  <th>การจัดการ</th>
                </tr>
              </thead>
              <tbody>
                  <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>Doe</td>
                    <td>
                      <a href="add-employee.php"><button type="button" class="btn btn-default">แก้ไข</button></a>
                      <button type="button" class="btn btn-default">ลบ</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">รายละเอียด</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ชื่อ</h4>
                                </div>
                                <div class="modal-body">
                                  <p>เลขบัตรประชาชน/เลข passport </p>
                                  <p>วันเกิด</p>
                                  <p>เพศ</p>
                                  <p>ที่อยู่</p>
                                  <p>วันที่เข้าทำงาน</p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal2">Account</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">SER Username/Password</h4>
                                </div>
                                <div class="modal-body">
                                    <label for="">Username</label>
                                    <input type="email" class="form-control" id="email">
                                    <br>
                                    <label for="">Password</label>
                                    <input type="email" class="form-control" id="email">
                                    <br>
                                    <label for="">Confrirm Password</label>
                                    <input type="email" class="form-control" id="email">
                                    <br>
                                    <button type="button" class = "btn btn-success" onclick="submitData()">เพิ่ม</button>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>
                  </tr>
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
</body>
</html>
