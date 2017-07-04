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
                    <li><a href="">ข้อมูลหลัก</a></li>
                    <li><a href="">รายการอาหาร</a></li>
                    <li><a href="">วัตถุดิบ</a></li>
                    <li><a href="">โปรโมชั่น</a></li>
                    <li><a href="">การขายอาหาร</a></li>
                    <li><a href="">ออกรายงาน</a></li>
                    <li><a href="">สั่งจอง</a></li>
                    <li><a href="">ออกจากระบบ</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav hidden-xs">
                <br>
                <i href="#" class="a"><img class="home" src="img/user.png">&nbsp;&nbsp; ผู้ใช้ระบบ : Thararat</i>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="index2.php" class="a">หน้าหลัก</a></li>
                    <li class="">
                        <!--active-->
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
                    <li>
                        <a data-toggle="collapse" href="#collapse2" class="a">ข้อมูลหลัก&nbsp;&nbsp;&nbsp;
        <span class="caret"></span></a>
                        <div id="collapse2" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item"><a href="agent.php">ตัวแทนจำหน่าย</a></li>
                                <li class="list-group-item"><a href="customer.php">ลูกค้า</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="menufood.php" class="a">รายการอาหาร</a></li>
                    <li>
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
                    <li><a href="promoction.php" class="a">โปรโมชั่น</a></li>
                    <li><a href="sell_food.php" class="a">การขายอาหาร</a></li>
                    <li><a href="report.php" class="a">ออกรายงาน</a></li>
                    <li><a href="book_food.php" class="a">สั่งจอง</a></li>
                    <li><a href="" class="a">ออกจากระบบ</a></li>
                </ul>
                <br>
            </div>
            <br>
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <div class="col-md-8">
                    <h4><small><a href="orderraw.php">สั่งซื้อวัตถุดิบ</a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp;<a href="add_ord.php">เพิ่มข้อมูลการสั่งซื้อวัตถุดิบ</a> &nbsp;&nbsp; <img class="next" src="img/next.png">&nbsp;&nbsp;รายการสั่งซื้อวัตถุดิบ</small></h4>
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
            $new_id =mysql_result(mysql_query("Select Max(substr(deord_id,-3))+1 as MaxID from  temp_detail_order"),0,"MaxID");
            if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                  $deord_id="DRD001";
              }else{
                  $deord_id="DRD".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
              }
            ?>
                        <label for="">รหัสรายละเอียดการสั่งซื้อวัตถุดิบ</label>
                        <input type="text" class="form-control" id="deord_id" value="<?echo $deord_id;?>" disabled>
                        <br>
                        <label for="">รหัสการสั่งซื้อวัตถุดิบ</label>
                        <input type="text" class="form-control" id="ordraw_id" value="<?echo $_GET['ordraw_id'];?>" disabled>
                        <br>
                        <label for="">ชื่อวัตถุดิบ</label>
                        <select class="form-control" id="raw" onchange="loadData();">
                            <option value="">
                                <?echo "เลือกวัตถุดิบ";?>
                            </option>
                            <?
        @include('conn.php');
          $strSQL9 = "SELECT * from orderraw where ordraw_id = '".$_GET['ordraw_id']."'";
          $objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
          while ($objReSult9 = mysql_fetch_array($objQuery9)) {
          $strSQL2 = "SELECT raw_id, raw_name from raw where bus_name = '".$objReSult9['bus_name']."' ORDER BY CONVERT(raw_name USING tis620) asc";
          // $strSQL2 = "SELECT raw.* from raw left join detail_order on raw.raw_id = detail_order.raw_id where raw.raw_id is null AND raw.bus_name = '".$objReSult9['bus_name']."'";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
      ?>
                                <option value="<?echo $objReSult2['raw_id'];?>">
                                    <?echo $objReSult2['raw_name'];?>
                                </option>
                                <? } ?>
                        </select>
                        <br>
                        <label for="">ราคา/หน่วย (บาท)</label>
                        <input type="text" class="form-control" id="price" value="<?echo $objReSult2['raw_price'];?>" disabled>
                        <br>
                        <label for="">จำนวน</label>
                        <input type="text" class="form-control" id="amount">
                        <br>
                        <label for="">หน่วยนับ</label>
                        <select class="form-control" id="unit_id">
                            <option value="">
                                <?echo "เลือกหน่วยนับ";?>
                            </option>
                            <?
                 }
              @include('conn.php');
                $strSQL3 = "SELECT  * FROM unit";
                $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                while ($objReSult3 = mysql_fetch_array($objQuery3)) {
            ?>
                                <option value="<?echo $objReSult3['unit_id'];?>">
                                    <?echo $objReSult3['unit_name'];?>
                                </option>
                                <? } ?>
                        </select>
                        <br>
                        <button type="button" class="btnn2 btn btn-success" onclick="submitData()">เพิ่ม</button>
                        <button type="button" class="btn btn-danger" onclick="window.location.reload();">ยกเลิก</button>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="well">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ที่</th>
                                <th>วัตถุดิบ</th>
                                <th>ราคา(บาท)</th>
                                <th>จำนวน</th>
                                <th>หน่วยนับ</th>
                                <th>ราคารวม(บาท)</th>
                                <td>การจัดการ</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?
                $sum = 0;
                    $i = 1;
                @include('conn.php');
                  $strSQL = "SELECT  * FROM temp_detail_order where ordraw_id = '".$_GET['ordraw_id']."' ";
                  $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                  while ($objReSult = mysql_fetch_assoc($objQuery)) {
                    $strSQL2 = "SELECT  * FROM unit where unit_id = '".$objReSult['unit_id']."'";
                  $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
                  while ($objReSult2 = mysql_fetch_array($objQuery2)) {
                    $strSQL3 = "SELECT  * FROM raw where raw_id = '".$objReSult['raw_id']."'";
                  $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                  while ($objReSult3 = mysql_fetch_array($objQuery3)) {
                    # code...          
              ?>
                                    <td>
                                        <?echo $i;?>
                                    </td>
                                    <td>
                                        <?echo $objReSult3['raw_name'];?>
                                    </td>
                                    <td>
                                        <?echo number_format($objReSult['raw_price'], 2, '.', ',');?>
                                    </td>
                                    <td>
                                        <?echo $objReSult['amount'];?>
                                    </td>
                                    <td>
                                        <?echo $objReSult2['unit_name'];?>
                                    </td>
                                    <td>
                                        <?echo number_format($objReSult['amount']*$objReSult['raw_price'], 2, '.',',');?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="tooltip" title="แก้ไขข้อมูล" onclick="updateData(<?echo " '".$objReSult["deord_id"]."' ";?>)"><img class="plus" src="img/edit.png"></button>
                                        <button type="button" class="btn btn-warning" data-toggle="tooltip" title="ลบข้อมูล" onclick="delData(<? echo " '".$objReSult['deord_id ']."' "?>)"><img class="plus" src="img/delete.png"></button>
                                    </td>
                            </tr>
                            <?
                    $i= $i+1;
                  }
                  }
                  $total = $objReSult['amount']*$objReSult['raw_price']; 
          $sum = $sum+$total;
                  }

                  ?>
                        </tbody>
                    </table>
                    <label for="">ยอดสั่งซื้อรวม</label>
                    <?echo number_format($sum, 2, '.', ',');?>
                        <label>บาท</label>
                        <br>
                        <br>
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
                <div class="col-sm-7">
                    <button type="button" class="btn btn-default" onclick="lastSubmit()">ยืนยันการสั่งซื้อ</button>
                    <a class="btn btn-primary" href="purchase_order.php" role="button">พิมพ์ใบความต้องการสั่งซื้อวัตถุดิบ</a>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
function loadData() {
    var raw_name = $('#raw').val();

    if (raw_name == "") {
        $('#raw_price').val("");
        $('#unit_id').val("");
    } else
        $.ajax({
            type: "GET",
            url: "checkRaw.php",
            data: {
                'raw_id': raw_name
            },
            success: function(response) {
                var data = JSON.parse(response);
                $('#price').val(data.raw_price);
                $('#unit_id').val(data.unit_id);
                console.log(data);
            }
        });
}

function submitData() {
    var ordraw_id = $('#ordraw_id').val();
    var deord_id = $('#deord_id').val();
    var raw_price = $('#price').val();
    var raw_amount = $('#amount').val();
    var raw_name = $('#raw').val();
    var unit_id = $('#unit_id').val();
    if (deord_id === "") {
        alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
        return;
    } else {
        //alert(eats);
        $.ajax({
                type: "POST",
                url: "insert_deord.php",
                data: {
                    'ordraw_id': ordraw_id,
                    'deord_id': deord_id,
                    'raw_amount': raw_amount,
                    'raw_price': raw_price,
                    'raw_name': raw_name,
                    'unit_id': unit_id
                }

            })
            //window.location="detailord.php";
            .done(function(msg) {
                alert(msg);
                //$('#myModal').modal('hide');
                window.location.reload();
            });
        // alert("กำลังทำรายการ");
    }
    // alert(idFood + ' ' + hn + ' ' + detail);
}

function delData(id) {
    if (deord_id === "") {
        return;
    } else {
        //alert(eats);
        if (!confirm("ยืนยันการลบข้อมูล !!")) {
            return;
        } else {
            $.ajax({
                    type: "GET",
                    url: "del_deord.php",
                    data: {
                        'agent_id': id
                    }
                })
                .done(function(msg) {
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

function updateData(id) {
    $.ajax({
        type: "GET",
        url: "loadRaw.php",
        data: {
            'deord_id': id
        },
        success: function(response) {
            var data = JSON.parse(response);
            $('#deord_id').val(data.deord_id);
            $('#ordraw_id').val(data.ordraw_id);
            $('#raw').val(data.raw_id);
            $('#price').val(data.raw_price);
            $('#amount').val(data.amount);
            $('#unit_id').val(data.unit_id);
            // $('#raw').val(data.raw_name);
            console.log(data);
        }
    });
}

function lastSubmit() {
    var ordraw_id = $('#ordraw_id').val();
    var deord_id = $('#deord_id').val();
    var raw_price = $('#price').val();
    var raw_amount = $('#amount').val();
    var raw_name = $('#raw').val();
    var unit_id = $('#unit_id').val();
    if (deord_id === "") {
        alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
        return;
    } else {
        //alert(eats);
        $.ajax({
                type: "POST",
                url: "final_insert_deord.php",
                data: {
                    'ordraw_id': ordraw_id,
                    'deord_id': deord_id,
                    'raw_amount': raw_amount,
                    'raw_price': raw_price,
                    'raw_name': raw_name,
                    'unit_id': unit_id
                }

            })
            //window.location="detailord.php";
            .done(function(msg) {
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
