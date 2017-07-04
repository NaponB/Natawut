
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
            $strSQL9 = "SELECT  * FROM raw";
            $objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
            $Num_Rows = mysql_num_rows($objQuery9);
            $Per_Page = 5;   // Per Page
// $Page = $_GET["Page"];
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
        <li ><!--active-->
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
        <li class="active">
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
        <li ><a href="" class="a">ออกจากระบบ</a></li>
      </ul><br>
    </div>
    <br>
      <div class="col-sm-2"></div>
      <div class="col-sm-10">
        <div class="col-md-8">
          <h4><small>ข้อมูลวัตถุดิบ</small></h4>
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
      <div class="col-sm-3">
        <div class="well">
            <?
          @include('conn.php');
          $new_id =mysql_result(mysql_query("Select Max(substr(raw_id,-3))+1 as MaxID from  raw"),0,"MaxID");
          if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                $raw_id="R001";
            }else{
                $raw_id="R".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
            }
          ?>
              <label for="">รหัสวัตถุดิบ</label>
              <input type="text" class="form-control" id="raw_id" value="<?echo $raw_id;?>" disabled>
              <br>
              <label for="">ชื่อวัตถุดิบ &nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
              <input type="text" class="form-control" id="raw_name" >
              <br>
              <label for="">หน่วยนับ &nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
              <select class="form-control" id="unit">
                <?
        @include('conn.php');
          $strSQL2 = "SELECT  * FROM unit";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
      ?>
              <option value="<?echo $objReSult2['unit_id'];?>"><?echo $objReSult2['unit_name'];?></option>
      <? } ?>
              </select>
              <br>
              <label for="">ตัวแทนจำหน่าย &nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
              <select class="form-control" id="agent">
               <?
        @include('conn.php');
          $strSQL2 = "SELECT  * FROM agent";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
      ?>
              <option value="<?echo $objReSult2['agent_id'];?>"><?echo $objReSult2['bus_name'];?></option>
      <? } ?>
              </select>
              <br>
              <label for="">ราคา/หน่วย(บาท)&nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
              <input type="text" class="form-control" id="price" >
              <br>
              <button type="button" class = "btnn2 btn btn-success" onclick="submitData()">เพิ่ม</button>
              <button type="button" class = "btn btn-danger" onclick="window.location.reload()">ยกเลิก</button>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="well">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>รหัสวัตถุดิบ</th>
                    <th>ชื่อวัตถุดิบ</th>
                    <th>หน่วยนับ</th>
                    <th>ตัวแทนจำหน่าย</th>
                    <th>ราคา/หน่วย(บาท)</th>
                    <th>การจัดการ</th>
                  </tr>
                </thead>
                <tbody>
                 <?
                  @include('conn.php');
                  $strSQL = "SELECT  * FROM raw order by raw_id ASC LIMIT $Page_Start , $Per_Page";
                  $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                  while ($objReSult = mysql_fetch_array($objQuery)) {
                  $strSQL2 = "SELECT  * FROM unit where unit_id = '".$objReSult['unit_id']."'";
                  $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                  while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                   if (!empty($objReSult['bus_name'])) {
                      # code...
                    $strSQL3 = "SELECT  * FROM agent where agent_id = '".$objReSult['bus_name']."'";
                    $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                    }
                    else
                    {
                     $strSQL3 = "SELECT bus_name FROM raw where raw_id = '".$objReSult['raw_id']."'";
                    $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                    }
                  while ($objReSult3 = mysql_fetch_array($objQuery3)) {
              ?>                  
                  <tr>
                    <td><?echo $objReSult['raw_id'];?></td>
                    <td><?echo $objReSult['raw_name'];?></td>
                    <td><?echo $objReSult2['unit_name'];?></td>
                    <td><?echo $objReSult3['bus_name'];?></td>
                    <td><?echo number_format($objReSult['raw_price'], 2, '.', ',');?></td>
                    <td>
                      <button type="button" class="btn btn-info" data-toggle="tooltip"  title="แก้ไขข้อมูล" onclick="updateId(<? echo "'".$objReSult["raw_id"]."'";?>)"><img class="plus" src="img/edit.png"></button>
                      <button type="button" class="btn btn-warning" data-toggle="tooltip"  title="ลบข้อมูล" onclick="delData(<? echo "'".$objReSult["raw_id"]."'";?>)"><img class="plus" src="img/edit.png"></button>                     
                      </td>
                      </tr>  
                      <?
                    }
                  }
                }
                      ?>
          
                </tbody>
              </table>
              <?
                  $strSQL9 .= " order by raw_id ASC LIMIT $Page_Start , $Per_Page";
                  $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                  $Num_Rows = mysql_num_rows($objQuery);
                  $i = 1;
                  if($Page > 1)
                  {
                  $i = ($Per_Page * ($Page-1)) + 1;
                  }
                  while ($objReSult9 = mysql_fetch_array($objQuery9)) { }?>
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
</body>

<script >

  function updateId(id){
   $('#raw_id').val(id);
  $.ajax({
  type: "GET",
  url: "loadallRaw.php",
  data: { 'aid': id},
  success:function(response){
    console.log(response);
    var data = JSON.parse(response);
    $('#raw_name').val(data.raw_name);
    $('#unit').val(data.unit_id);
    $('#agent').val(data.bus_name);
    $('#price').val(data.raw_price);
    console.log(data);
  }
});
//  // alert(id);
}

function delData(id){
  var raw_id = id;
  if(raw_id === ""){
    return;
  }else{
     //alert(eats);
     if(!confirm("ยืนยันการลบข้อมูล !!"))
     {
        return;
     }
     else {
   $.ajax({
  type: "GET",
  url: "del_raw.php",
  data: { 'raw_id': id}
})
  .done(function( msg ) {
    alert(msg);
     //$('#myModal').modal('hide');
     window.location.reload();
  });
  }
  // window.location.reload();
  // alert("กำลังทำรายการ");
  // location.reload();
  }
  }

  function submitData(){
  var raw_id = $('#raw_id').val();
  var raw_name =$('#raw_name').val();
  var unit_id =$('#unit').val();
  var bus_add =$('#agent').val();
  var price =$('#price').val();
  if(raw_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
     //alert(eats);
   $.ajax({
  type: "POST",
  url: "insert_raw.php",
  data: { 'raw_id': raw_id,
    'raw_name' : raw_name,
    'unit_id' : unit_id,
    'bus_name' : bus_add,
    'raw_price' : price,
  }
  
})
   //window.location="detailord.php";
  .done(function( msg ) {
      alert(msg);
     //$('#myModal').modal('hide');
  window.location.reload();
  });
  // alert("กำลังทำรายการ");
  }
  // alert(idFood + ' ' + hn + ' ' + detail);
}

</script>
</html>