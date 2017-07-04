<?
include ('conn.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="css/style1.css">
    <script src="https://use.fontawesome.com/2503fe505d.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class ="box">
    <div class = "boxe1">
      <div class ="boxx1">
        <br><br>
        <p>ผู้ใช้งาน&nbsp;&nbsp;<?echo $_SESSION['user']?></p>
      </div>
      <div class ="boxx2">
       <a href="logout.php" ><i class="fa fa-sign-out" aria-hidden="true"></i></a>
      </div>
    </div>
    <div class = "boxe2">
      <img src="image/the2.png">
    </div> 
    <div class = "boxe3">
      <img src="image/nata2.png">
    </div> 
    <div class = "boxe4">
    <a href="">
      <div class = "boxe4-box1">
        <img src="image/tag.png">
        <br>
        <p>โปรโมชั่น</p>
      </div>
      </a>
      <a href="food2.php">
      <div class = "boxe4-box2">
        <img src="image/food.png">
        <br>
        <p>เมนูอาหาร</p>
      </div> 
      </a>
      <a href="drinks2.php">
      <div class = "boxe4-box3">
        <img src="image/cup.png">
        <br>
        <p>เครื่องดื่ม</p>
      </div> 
      </a>
      <a href="drinks2.php">
      <div class = "boxe4-box4">
        <img src="image/look.png">
        <br>
        <p>ข้อมูลส่วนตัว</p>
      </div>
      <a href="drinks2.php">
      <div class = "boxe4-box5">
        <img src="image/list.png">
        <br>
        <p>รายการสั่งจองอาหาร</p>
      </div>
      </a>
      <a href="drinks2.php">
      <div class = "boxe4-box6">
        <img src="image/location.png">
        <br>
        <p>Location</p>
      </div>
      </a>
    </div> 
  </div>
  <div class ="box-box">
    </div>
        <br><br>
        <div class="box-emp1">
        <br><br>
        <h1>แก้ไขข้อมูลส่วนตัว</h1><br><br>
        <div class = "h"></div><br>
        <div class="boxe">
          <label for="">ชื่อ</label>
          <input type="text" id="oldpw" name="oldpw">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">
          <label for="">ที่อยู่</label>
            <input type="text" id="newpw" name="newpw">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">
          <label for="">เบอร์โทรศัพท์</label>
            <input type="text"  id="repw" name="repw">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">
          <label for="">E-mail</label>
            <input type="text"  id="repw" name="repw">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
          <div class ="boxe-add">
            <input type="button"  name= "submit" class="button button1" onclick="changepassw()" value = "บันทึก">
          </div>
          <div class ="boxe-reset">
          <input type="button"  name= "calcle" class="button button1" value = "ยกเลิก" >
          </div>
        </div>
  </div>
  <br><br>
  <div class ="box-box-box">
    <br><br>
    <ul>
      <li>
        <i class="fa fa-facebook-square"></i> ณฐวุฒิ แหนมเนือง
      </li>&nbsp;&nbsp;&nbsp;&nbsp;
      <li>
        <i class="fa fa-phone"></i> 08-1357-9367(สาขาที่ 1) , 08-7143-4474(สาขาที่ 2)
      </li>
    </ul>
  </div>
</body>

<script>

function changepassw(){
  var oldpw =$('#oldpw').val();
  var newpw =$('#newpw').val();
  var repw =$('#repw').val();
   $.ajax({
  type: "POST",
  url: "change_pw.php",
  data: { 'oldpw': oldpw,
          'newpw': newpw,
          'repw': repw
  }
  })
  .done(function( msg ) {
     // alert( "Send Data : " + msg);
     //$('#myModal').modal('hide');
  
  window.location.reload();
  });
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
</script>

</html>
