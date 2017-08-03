<?@include('conn.php')?>
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
<style>

</style>
<body>
<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                      
      </button>
      <a class="navbar-brand" href="index2.php">Home</a>
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
        <li class="active"><a href="sell_food.php" class="a">การขายอาหาร</a></li>
        <li ><a href="report.php" class="a">ออกรายงาน</a></li>
        <li ><a href="book_food.php" class="a">สั่งจอง</a></li>
        <li ><a href="logout.php" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small><a href="sell_food.php">การขายอาหาร</a>&nbsp;&nbsp; <img class="next" src="img/next.png"></span> &nbsp;&nbsp;คิดเงินค่าอาหาร</small></h4>
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
      <div class="col-sm-2"></div>
          <div class="col-sm-7">
            <div class="well">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>ลำดับ</th>
                    <th>รายการอาหาร</th>
                    <th>จำนวน</th>
                    <th>ราคา/หน่วย</th>
                    <th>ราคารวม</th>
                    <th>การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                <?
                                $a = 1;
                                $total = 0;
                                    $strSQL = "SELECT * FROM de_sell";
                                    $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                                    while ($objReSult = mysql_fetch_array($objQuery)) {
                                      $strSQL2 = "SELECT * FROM menu where menu_id = '".$objReSult['menu_id']."' ";
                                    $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                                    while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                   ?>
                  <tr>
                    <td><?echo $a;?></td>
                    <td><?echo $objReSult2['menu_name'];?></td>
                    <td><?echo $objReSult['price'];?></td>
                    <td><?echo $objReSult['amount'];?></td>
                    <td><?echo $objReSult['price'] * $objReSult['amount'];?></td>
                    <td>
                      <button type="button" class="btn btn-default">แก้ไข</button>
                      <button type="button" class="btn btn-default">ลบ</button>
                    </td>
                  </tr>
                  <?
                  $total = $total + ($objReSult['price'] * $objReSult['amount']);
                  } 
                }
                  ?>
                </tbody>
                <thead>
                    <tr>
                      <td colspan="5">ราคารวม <?echo $total;?></td>
                      <td></td>
                    </tr>
                  </thead>
              </table>
          </div>
        </div> 
        <div class="col-sm-3">
          <div class="well">
            <h3>คำนวนเงินค่าอาหาร</h3><br>
            <label for="">รับเงิน</label>
            <input type="text" class="form-control" id="pay">
            <br>
            <label for="">ค่าอาหาร</label>
            <input type="text" class="form-control" id="price" value="<?echo $total;?>" disabled>
            <br>
            <label for="">เงินทอน</label>
            <input type="text" class="form-control" id="change" disabled>
            <br>
            <input type="button" class="" id="think" value="คำนวณ" onclick="cal()">
            <a href="bill_food.php" type="button" class="btnn2 btn btn-success">พิมพ์ใบเสร็จรับเงิน</a> 
          </div>
        </div>
  </div>
</div>
</body>
<script>

function cal() 
{
  var sum = $('#pay').val();
  var price = $('#price').val();
  var total = sum - price;
  $('#change').val(total);
  }
</script>
</html>