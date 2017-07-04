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
  <style>
    
  </style>
</head>
<body>
<?
  @include ('conn.php');
            $strSQL = "SELECT *, DATE_FORMAT(date,'%d-%m-%Y') as date FROM orderraw";
            $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
            $Num_Rows = mysql_num_rows($objQuery);
            $Per_Page = 5;   // Per Page
if(!isset($_GET["Page"]))
{
$Page=1;
}
else {
  $Page=$_GET['Page'];
}
 
$Prev_Page = $Page-1;
$Next_Page = $Page+1;

$Page_Start = (($Per_Page*$Page)-$Per_Page);
if($Num_Rows<=$Per_Page)
{
$Num_Pages =1;
}
else if(($Num_Rows % $Per_Page)==0)
{
$Num_Pages =($Num_Rows/$Per_Page) ;
}
else
{
$Num_Pages =($Num_Rows/$Per_Page)+1;
$Num_Pages = (int)$Num_Pages;
}
?>
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
        <li ><a href="sell_food.php" class="a">การขายอาหาร</a></li>
        <li ><a href="report.php" class="a">ออกรายงาน</a></li>
        <li ><a href="book_food.php" class="a">สั่งจอง</a></li>
        <li ><a href="logout.php" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small>ข้อมูลการสั่งซื้อวัตถุดิบ</small></h4>
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
      </div><div class="col-sm-2"></div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="btn btn-primary" href="add_ord.php" role="button"><img class="plus" src="img/plus.png"> &nbsp; เพิ่มข้อมูลการสั่งซื้อวัตถุดิบ</a>
      <br><br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="well">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>รหัสการสั่งซื้อ</th>
                    <th>วันที่สั่งซื้อ</th>
                    <th>ชื่อพนักงาน</th>
                    <th>ชื่อบริษัท</th>
                    <th>การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  <?
                $strSQL .= " order by ordraw_id ASC LIMIT $Page_Start , $Per_Page";
                $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                $Num_Rows = mysql_num_rows($objQuery);
                $i = 1;
              if($Page > 1)
              {
              $i = ($Per_Page * ($Page-1)) + 1;
              }
                while ($objReSult = mysql_fetch_array($objQuery)) {
                ?>
                    <td><?echo $objReSult['ordraw_id'];?></td>
                    <td><?echo $objReSult['date'];?></td>
                    <td><?echo $objReSult['emp_name'];?></td>
                    <td><?echo $objReSult['bus_name'];?></td>
                    <td>
                      <button type="button" class="btn btn-default">พิมพ์</button>
                      <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" onclick="setId(<? echo "'".$objReSult["ordraw_id"]."'";?>)">รายละเอียด</button>
                          <!-- Modal -->
                          <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">ชื่อบริษัท</h4>
                                </div>
                                <div class="modal-body">
                                  <p>ชื่อผู้ติดต่อ :<label id="contract_fname"></label>  <label id="contract_lname"></label></p>
                                  <p>ที่อยู่ :<label id="bus_add"></label></p>
                                  <p>เบอร์ติดต่อ :<label id="tel"></label></p>
                                  <p>E-Mail :<label id="mail"></label></p>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </td>
                  </tr>
                  <?
                }
                  ?>
                </tbody>
              </table>
              <!-- <nav aria-label="Page navigation">
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
              </nav> -->
              Total <?php echo $Num_Rows;?> Record : <?php echo $Num_Pages;?> Page :
<?php
if($Prev_Page)
{
echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page'><< Back</a> ";
}
 
for($i=1; $i<=$Num_Pages; $i++){
if($i != $Page)
{
echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
}
else
{
echo "<b> $i </b>";
}
}
if($Page!=$Num_Pages)
{
echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page'>Next>></a> ";
}
?>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
</body>
<script>
  function setId(id){
   $('#hnModal').html(id);
  $.ajax({
  type: "GET",
  url: "loadOrdraw.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);
    $('#contract_fname').html(data.contract_fname);
    $('#contract_lname').html(data.contract_lname);
    $('#bus_add').html(data.bus_add);
    $('#tel').html(data.tel);
    $('#mail').html(data.mail);
    console.log(data);
  }
});
//  // alert(id);
}
</script>
</html>
