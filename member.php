<?session_start();
@include('conn.php');?>
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
  <!-- <script src="js/jss.js"></script> -->
  <style>
  </style>
</head>
<body>
<div class="wrapper">
  <div class="header">
      <div class="row">
        <div class="col-md-12">
            <div class="col-md-6"></div>
            <div class="col-md-2"></div>
            <div class="col-md-2"><br><br><a>ยินดีต้อนรับ คุณธารารัตน์</a></div>
            <div class="col-md-2"><br><br><a  href="logout.php">ออกจากระบบ</a></div>
        </div>
      </div>
  </div>
  <nav class="nav">
    <ul class="">
      <li><a  href="#">โปรโมชั่น</a></li>
      <li><a  href="menu.php">รายการอาหาร</a></li>
      <li><a  href="#">เครื่องดื่ม</a></li>
      <li><a  href="member.php">ข้อมูลส่วนตัว</a></li>
      <li></li>
    </ul>
    <ul class="navbar-right">
        <li><a href="#"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
    </ul>
  </nav>
      
      <div class="con">
        <br><br>
        <div class="panel panel-default">
          <div class="panel-heading">
            <table >
              <tr>
                <td class="col-md-12">ข้อมูลทั่วไป</td>
                  <td><a href="edit_member.php"><button type="button" class="btn btn-primary" data-toggle="tooltip"  title="แก้ไขข้อมูล" onclick=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a></td>
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
                  <?
                  $strSQL = "SELECT  * FROM customers where cus_id = '".$_SESSION['cus_id']."' ";
                  $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                  while ($objReSult = mysql_fetch_assoc($objQuery)) {
                    ?>
                    <tr>
                      <th class="col-md-3">Name:</th>
                        <td><?echo $objReSult['cus_fname'];?> &nbsp;&nbsp;&nbsp; <?echo $objReSult['cus_lname'];?></td>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>Address:</th>
                      <td><?echo $objReSult['cus_add'];?></td>
                    </tr>
                    <tr>
                      <th>Tel:</th>
                      <td><?echo $objReSult['cus_tel'];?></td>                        
                    </tr>
                    <tr>
                      <th>E - mail</th>
                      <td><?echo $objReSult['cus_email'];?></td>
                    </tr>
                    <input type="hidden" id="old_pass" name="old_pass" value="<?echo $objReSult['cus_pass'];?>">
                    <? }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <hr>
            <div class="panel-group">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h4 class="panel-title" style="text-align: center;">
                    <a data-toggle="collapse" href="#collapse1" >เปลี่ยนรหัสผ่าน</a>
                  </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                  <div class="form-group">
                    <label class="col-sm-3 control-label" style="color: black;">Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" placeholder="Password" id="pass">
                    </div>
                  </div><br><br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" style="color: black;">New Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" placeholder="New Password" id="new_pass">
                    </div>
                  </div><br><br>
                  <div class="form-group">
                    <label class="col-sm-3 control-label" style="color: black;">Confirm Password</label>
                    <div class="col-sm-9">
                      <input type="password" class="form-control" placeholder="Confirm Password" id="con_pass">
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <button type="button" class = "btnn1 btn btn-success" onclick="changePass(<?echo "'".$_SESSION['cus_id']."'";?>)">บันทึก</button>
                  <button type="button" class = "btn btn-danger" onclick="">ยกเลิก</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 box-1">
  </div>
   
</div>
</body>
<script>
  function changePass(id) {
    var old_pass = $('#old_pass').val();
    var pass = $('#pass').val();
    var new_pass = $('#new_pass').val();
    var con_pass = $('#con_pass').val();
    if (old_pass != pass) {
      alert("รหัสไม่ถูกต้อง !!");
    }
    else
      if (new_pass != con_pass) {
        alert("กรุณาตรวจสอบรหัสผ่านใหม่ !!");
      }
      else {
         $.ajax({
                    type: "POST",
                    url: "change_pass.php",
                    data: {
                        'new_pass': new_pass,
                        'cus_id' : id
                    }
                })
                .done(function(msg) {
                    // alert( "Send Data : " + msg);
                    //$('#myModal').modal('hide');
                    alert(msg);
                window.location.reload();
                });
      }
  }
</script>
</html>
