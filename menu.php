<?
@include('conn.php');
session_start();?>
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
            <div class="col-md-2"></div>
            <div class="col-md-2"><br><br><a>ยินดีต้อนรับ คุณธารารัตน์</></div>
            <div class="col-md-2"><br><br><a  href="logout.php">ออกจากระบบ</a></div>
        </div>
      </div>
  </div>
  <nav class="nav">
    <ul class="">
      <li><a  href="index.php">หน้าหลัก</a></li>
      <li><a  href="#">โปรโมชั่น</a></li>
      <li><a  href="menu.php">รายการอาหาร</a></li>
      <li><a  href="drink.php">เครื่องดื่ม</a></li>
      <li><a  href="member.php">ข้อมูลส่วนตัว</a></li>
      <li><a  href="contactt_me.php">ติดต่อเรา</a></li>
    </ul>
    <ul class="navbar-right">
        <li><a href="or_menu.php"><i class="fa fa-shopping-cart"></i><span class="badge">3</span></a></li>
    </ul>
  </nav>
  <div class="col-xs-12">
          <div class="col-md-4"></div>
          <div class="col-md-3">
            
          </div> 
        </div>
        <div class="col-xs-12">
          <div class="col-md-1"></div>
          <div class="col-md-10">
            <div class="box-2">
                <div class="btnn2 btn-group btn-group-justified">
                <?                                                                                                 
                                              $i=1;
                                              $k=1;
                                                $strSQL3 = "SELECT * FROM type_food";
                                                $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                                                while ($objReSult3 = mysql_fetch_array($objQuery3)) {                  
                                            ?>
                  <a href="menu.php?type_id=<?echo $objReSult3['Type_id'];?>" class="btnnn btn btn-primary"><?echo $objReSult3['type_name'];?></a>                  
                  <?
                  }
                  ?>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12">
            <div class="col-md-1"></div>            
            <div class="col-md-11">
                <br><br>
                <div class="pricing-table">
                <?
                $y=0;
        $strSQL4 = "SELECT * FROM menu where Type_id = '".$_GET['type_id']."' ";
                                                $objQuery4 = mysql_query($strSQL4) or die("Error Query [".$strSQL4."]");
                                                while ($objReSult4 = mysql_fetch_array($objQuery4)) {
        ?>
                  <div class="pricing-option">
                      <img src="img/1.jpg" alt="" style="width:200px;height:150px;">
                      <br>
                      <hr>
                      <h2><?echo $objReSult4['menu_name'];?></h2>
                      <div class="price">
                          <div class="back">
                            <form class="form-inline">
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon" onclick="minus(count<?echo "$y";?>)">-</div>                                  
                                  <input type="button" class="f form-control" id="count<?echo "$y";?>" value="1">
                                  <div class="input-group-addon" onclick="plus(count<?echo "$y";?>)">+</div>
                                </div>
                              </div>
                              <button type="button" class="btn btn-primary" onclick="add()"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                            </form>
                          </div>
                      </div>
                  </div>
                  <?
                  $y=$y+1;
        }?>  
                  <!-- <div class="pricing-option">
                      <img src="img/1.jpg" alt="" style="width:200px;height:150px;">
                      <br>
                      <hr>
                      <h2>ชื่ออาหาร</h2>
                      <div class="price">
                          <div class="back">
                            <form class="form-inline">
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">-</div>
                                  <input type="text" class="f form-control">
                                  <div class="input-group-addon">+</div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                            </form>
                          </div>
                      </div>
                  </div>
                  <div class="pricing-option">
                      <img src="img/1.jpg" alt="" style="width:200px;height:150px;">
                      <br>
                      <hr>
                      <h2>ชื่ออาหาร</h2>
                      <div class="price">
                          <div class="back">
                            <form class="form-inline">
                              <div class="form-group">
                                <div class="input-group">
                                  <div class="input-group-addon">-</div>
                                  <input type="text" class="f form-control">
                                  <div class="input-group-addon">+</div>
                                </div>
                              </div>
                              <button type="submit" class="btn btn-primary"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                            </form>
                          </div>
                      </div>
                  </div> -->
              </div>                  
              <br>
            </div>
        </div>
                
</div>
</body>
<script>
function plus(id) {
            var count = $(id).val();
            count++;
            id.value = count;
            console.log(id);
        }

        function minus(id) {
            var count = $(id).val();
            if (count > 1) {
                count--;
                id.value = count;
            }
        }
</script>        
</html>
