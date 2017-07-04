<?
@include 'conn.php';
$Page=1;
?>
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
            $strSQL = "SELECT  * FROM agent";
            $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
            $Num_Rows = mysql_num_rows($objQuery);
            $Per_Page = 10;   // Per Page
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
                            <h4><small>ข้อมูลตัวแทนจำหน่าย</small></h4>
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
          $new_id =mysql_result(mysql_query("Select Max(substr(agent_id,-3))+1 as MaxID from  agent"),0,"MaxID");
          if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                $agent_id="A001";
            }else{
                $agent_id="A".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
            }
          ?>
                                <label for="">รหัสตัวแทนจำหน่าย</label>
                                <input type="text" class="form-control" id="agent_id" value="<?echo " $agent_id ";?>" disabled>
                                <br>
                                <label for="">ชื่อบริษัท &nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
                                <input type="text" class="form-control" id="agent_brand">
                                <br>
                                <label for="">ชื่อผู้ติดต่อ</label>
                                <input type="text" class="form-control" id="agent_fname">
                                <br>
                                <label for="">นามสกุลผู้ติดต่อ</label>
                                <input type="text" class="form-control" id="agent_lname">
                                <br>
                                <label for="">ที่อยู่&nbsp;&nbsp;&nbsp; <img class="asterisk" src="img/asterisk.png"></label>
                                <input type="text" class="form-control" id="agent_add">
                                <br>
                                <label for="">เบอร์ติดต่อ</label>
                                <input type="text" class="form-control" id="agent_tel">
                                <br>
                                <label for="">E-Mail</label>
                                <input type="email" class="form-control" id="agent_mail">
                                <br>
                                <button type="button" class="btnn2 btn btn-success" onclick="submitData()">เพิ่ม</button>
                                <button type="button" class="btn btn-danger" onclick="window.location.reload()">ยกเลิก</button>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="well">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>รหัสตัวแทนจำหน่าย</th>
                                        <th>ชื่อบริษัท</th>
                                        <th>ชื่อผู้ติดต่อ</th>
                                        <th>การจัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?
                $strSQL .= " order by agent_id ASC LIMIT $Page_Start , $Per_Page";
                $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
                $Num_Rows = mysql_num_rows($objQuery);
                $i = 1;
if($Page > 1)
{
$i = ($Per_Page * ($Page-1)) + 1;
}
                while ($objReSult = mysql_fetch_array($objQuery)) {
                ?>
                                        <tr>
                                            <td>
                                                <?echo $objReSult['agent_id'];?>
                                            </td>
                                            <td>
                                                <?echo $objReSult['bus_name'];?>
                                            </td>
                                            <td>
                                                <?echo $objReSult['contract_fname']. " ". $objReSult['contract_lname'];?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="tooltip" title="แก้ไขข้อมูล" onclick="updateId(<? echo " '".$objReSult["agent_id"]."' ";?>)"><img class="plus" src="img/edit.png"></button>
                                                <button type="button" class="btn btn-warning" data-toggle="tooltip" title="ลบข้อมูล" onclick="delData(<? echo " '".$objReSult["agent_id"]."' ";?>)"><img class="plus" src="img/delete.png"></button>
                                                <button type="button" class="btn btn-default" data-toggle="modal" title="อ่านข้อมูลเพิ่มเติม" onclick="setId(<? echo " '".$objReSult["agent_id"]."' ";?>)" data-target="#myModal"><img class="plus" src="img/see.png"></button>
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
                                                                <p>ชื่อผู้ติดต่อ
                                                                    <label id="fname_modal"></label> &nbsp;
                                                                    <label id="lname_modal"></label>
                                                                </p>
                                                                <p>ที่อยู่
                                                                    <label id="address_modal"></label>
                                                                </p>
                                                                <p>เบอร์ติดต่อ
                                                                    <label id="tel_modal"></label>
                                                                </p>
                                                                <p>E-Mail
                                                                    <label id="mail_modal"></label>
                                                                </p>
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
                                <?
                  $i++;
                    }
                    ?>
                            </table>
                            Total
                            <?php echo $Num_Rows;?> Record :
                            <?php echo $Num_Pages;?> Page :
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
                        </div>
                    </div>
                </div>
            </div>
    </body>
    <script>
    function setId(id) {
        $('#hnModal').html(id);
        $.ajax({
            type: "GET",
            url: "loadAgent.php",
            data: {
                'aid': id
            },
            success: function(response) {
                console.log(response);
                var data = JSON.parse(response);
                $('#fname_modal').html(data.contract_fname);
                $('#lname_modal').html(data.contract_lname);
                $('#address_modal').html(data.bus_add);
                $('#tel_modal').html(data.tel);
                $('#mail_modal').html(data.mail);
                console.log(data);
            }
        });
        //  // alert(id);
    }

    function updateId(id) {
        $('#agent_id').val(id);
        $.ajax({
            type: "GET",
            url: "loadAgent.php",
            data: {
                'aid': id
            },
            success: function(response) {
                console.log(response);
                var data = JSON.parse(response);
                $('#agent_brand').val(data.bus_name);
                $('#agent_fname').val(data.contract_fname);
                $('#agent_lname').val(data.contract_lname);
                $('#agent_add').val(data.bus_add);
                $('#agent_tel').val(data.tel);
                $('#agent_mail').val(data.mail);
                console.log(data);
            }
        });
    }

    function submitData() {
        var agent_id = $('#agent_id').val();
        var bus_name = $('#agent_brand').val();
        var contract_fname = $('#agent_fname').val();
        var contract_lname = $('#agent_lname').val();
        var bus_add = $('#agent_add').val();
        var mail = $('#agent_mail').val();
        var tel = $('#agent_tel').val();
        if (agent_id === "") {
            alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
            return;
        } else {
            //alert(eats);
            $.ajax({
                    type: "POST",
                    url: "insert_agent.php",
                    data: {
                        'agent_id': agent_id,
                        'bus_name': bus_name,
                        'con_fname': contract_fname,
                        'con_lname': contract_lname,
                        'con_tel': tel,
                        'con_mail': mail,
                        'bus_add': bus_add,
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
        var agent_id = id;
        if (agent_id === "") {
            return;
        } else {
            //alert(eats);
            if (!confirm("ยืนยันการลบข้อมูล !!")) {
                return;
            } else {
                $.ajax({
                        type: "GET",
                        url: "del_agent.php",
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
    </script>

    </html>
