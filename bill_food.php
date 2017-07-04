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
          <h4><small><a href="sell_food.php">การขายอาหาร</a>&nbsp;&nbsp; <img class="next" src="img/next.png"></span> <a href="cal_food.php">คิดเงินค่าอาหาร</a> &nbsp;&nbsp;<img class="next" src="img/next.png"></span>&nbsp;&nbsp;ใบเสร็จค่าอาหาร</small></h4>
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
         <!-- <button type="button" class="btn btn-success">พิมพ์</button>-->
      <div class="col-sm-5"></div>
      <div class="col-sm-4">
        <div class="row">
          <div class="col-xs-6 col-sm-6 col-md-6">
            <address>
                <strong>Natawut Namneung</strong>
                <br>
                2135 Sunset Blvd
                <br>
                Los Angeles, CA 90026
                <br>
                <abbr title="Phone">Tel:</abbr> (213) 484-6829
            </address>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-6 text-right">
            <p><em>Date: 19/06/60 &nbsp;&nbsp; เวลา</em></p>
            <p><em>พนักงาน: 34522677W</em></p>
          </div>
        </div>
        <div class="row">
          <div class="text-center">
              <h1>Receipt</h1>
                </div>
                </span>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Menu</th>
                            <th class="text-center">Size</th>
                            <th>#</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-md-8"><em>ราดหน้าหมู</em></h4></td>
                            <td class="col-md-1 text-center"><em>(เล็ก)</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 2 </td>
                            <td class="col-md-1 text-center">30</td>
                            <td class="col-md-1 text-center">60</td>
                        </tr>
                        <tr>
                            <td class="col-md-9"><em>ราดหน้าหมู</em></h4></td>
                            <td class="col-md-1 text-center"><em>(เล็ก)</em></h4></td>
                            <td class="col-md-1" style="text-align: center"> 1 </td>
                            <td class="col-md-1 text-center">30</td>
                            <td class="col-md-1 text-center">30</td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td class="text-right"><p><strong>Total: </strong></p></td>
                            <td> </td>
                            <td class="text-center"><p><strong>90</strong></p></td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td class="text-right"><p><strong>Cash/Change: </strong></p></td>
                            <td></td>
                            <td class="text-right"><p><strong>100</strong></p></td>
                            <td class="text-center"><p><strong>10</strong></p></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-success btn-lg btn-block">
                    พิมพ์</span>
                </button></td>
            </div>
      </div>
  </div>
</div>
</body>
</html>