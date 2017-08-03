<!DOCTYPE html>
<html lang="en">
<?$k=0;?>
    <?@include('conn.php');?>

        <head>
            <title>Natawut</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script type="js/npm.js"></script>
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
                                        <li class="list-group-item"><a href="reamraw.php">เบิกจ่ายวัตถุดิบ</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="promoction.php" class="a">โปรโมชั่น</a></li>
                            <li><a href="sell_food.php" class="a">การขายอาหาร</a></li>
                            <li><a href="report.php" class="a">ออกรายงาน</a></li>
                            <li><a href="book_food.php" class="a">สั่งจอง</a></li>
                            <li><a href="logout.php" class="a">ออกจากระบบ</a></li>
                        </ul>
                        <br>
                    </div>
                    <br>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-10">
                        <div class="col-md-8">
                            <h4><small><a href="sell_food.php">การขายอาหาร</a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp;<a href="add_ord_food.php">เพิ่มการขายอาหาร</a>&nbsp;&nbsp; <img class="next" src="img/next.png"> &nbsp;&nbsp;รายละเอียดการขาย</small></h4>
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
                        <?                      
                      $new_id =mysql_result(mysql_query("Select Max(substr(de_sell_id,-4))+1 as MaxID from de_sell"),0,"MaxID");
                      if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                            $de_sell_id="DS0001";
                        }else{
                            $de_sell_id="DS".sprintf("%04d",$new_id);//ถ้าไม่ใช่ค่าว่าง
                        }
                ?>
                            <div class="well">
                                <label for="">รหัสรายละเอียดการขายอาหาร</label>
                                <input type="text" class="form-control" id="de_sel" value="<?echo $de_sell_id;?>" disabled>
                                <br>
                                <label for="">รหัสการขายอาหาร</label>
                                <input type="text" class="form-control" id="sell_id" value="<?echo $_GET['sell_id'];?>" disabled>
                                <br>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เลือกรายการอาหาร</button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">รายการอาหาร</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="tab" style="background-color:white;">
                                                    <?                                                                                                 
                                              $i=1;
                                              $k=1;
                                                $strSQL3 = "SELECT * FROM type_food";
                                                $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                                                while ($objReSult3 = mysql_fetch_array($objQuery3)) {                  
                                            ?>
                                                        <button class="tablinks" onclick="openCity(event, <?echo $i;?>)">
                                                            <?echo $objReSult3['type_name'];?>
                                                        </button>
                                                        <?   
                                                $i++;    
                                                }                                                                                          
                                              $i=1;
                                              $k=1;
                                              $y=0;
                                                $strSQL3 = "SELECT * FROM type_food";
                                                $objQuery3 = mysql_query($strSQL3) or die("Error Query [".$strSQL3."]");
                                                while ($objReSult3 = mysql_fetch_array($objQuery3)) {                  
                                            ?>
                                                            <div class="tabcontent" id="<?echo $i;?>">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ที่</th>
                                                                            <th>รายการอาหาร</th>
                                                                            <th>ขนาด</th>
                                                                            <th>ราคา</th>
                                                                            <th>จำนวน</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <? 
                                                             $strSQL4 = "SELECT * FROM menu where Type_id = '".$objReSult3['Type_id']."' ";
                                                $objQuery4 = mysql_query($strSQL4) or die("Error Query [".$strSQL4."]");
                                                while ($objReSult4 = mysql_fetch_array($objQuery4)) {   
                                                    $strSQL9 = "SELECT * FROM size where size_id = '".$objReSult4['menu_size']."' ";
                                                $objQuery9 = mysql_query($strSQL9) or die("Error Query [".$strSQL9."]");
                                                while ($objReSult9 = mysql_fetch_array($objQuery9)) {              
                                            ?>
                                            
                                                                                <td>
                                                                                    <?echo $k;?>
                                                                                </td>
                                                                                <td>
                                                                                    <input type="checkbox" id="chkfood[]" name="chkfood[]" value="<?echo $objReSult4['menu_id']?>">
                                                                                    <?echo $objReSult4['menu_name'];?>
                                                                                </td>
                                                                                <td>
                                                                                    <?echo $objReSult9['size_name'];?>
                                                                                </td>
                                                                                <td>
                                                                                    <?echo $objReSult4['menu_price'];?>                                              <input type="hidden" name="price[]" value="<?echo $objReSult4['menu_price'];?>>" >                                  
                                                                                </td>
                                                                                <td class="col-md-1">
                                                                                    <div class="input-group number-spinner">
                                                                                        <span class="input-group-btn">
                                                                    <button class="btn2"  onclick="minus(count<?echo "$y";?>)">-</button>
                                                                </span>
                                                                                        <input type="button" class="form-control" name="amount[]" id="count<?echo "$y";?>" value="1">
                                                                                        <span class="input-group-btn">
                                                                    <input type="hidden" id="chcheck" value="count<?echo "$y";?>">
                                                                     <button class="btn3" onclick="plus(count<?echo "$y";?>)">+</buttton>
                                                                </span>
                                                                                    </div>
                                                                                </td>
                                                                        </tr>
                                                                    </tbody>
                                                                    <? $k = $k+1;
                                                     }
                                                     $y=$y+1;
                                               } 
                                            ?>
                                                                </table>
                                                            </div>
                                                            <?  $i = $i+1;
                                                            
                                                      $k= 1;
                                                      } ?>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="test()">บันทึก</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <!--<button type="button" class="btn btn-success" onclick="test()">เพิ่ม</button>-->
                            </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="well">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ที่</th>
                                        <th>รายการอาหาร</th>
                                        <th>ราคา(บาท)
                                        <th>จำนวน</th>                                        
                                        <th>ราคารวม(บาท)</th>
                                        <td>การจัดการ</td>
                                    </tr>
                                </thead>
                                <tbody>
                                <?
                                $a = 1;
                                    $strSQL5 = "SELECT * FROM de_sell where sell_id = '".$_GET['sell_id']."' ";
                                    $objQuery5 = mysql_query($strSQL5) or die("Error Query [".$strSQL5."]");
                                    while ($objReSult5 = mysql_fetch_array($objQuery5)) {
                                        $strSQL6 = "SELECT * FROM menu where menu_id = '".$objReSult5['menu_id']."' ";
                                    $objQuery6 = mysql_query($strSQL6) or die("Error Query [".$strSQL6."]");
                                    while ($objReSult6 = mysql_fetch_array($objQuery6)) {
                                ?>
                                    <tr>
                                        <td><?echo $a;?></td>
                                        <td><?echo $objReSult6['menu_name'];?></td>
                                        <td><?echo $objReSult5['price'];?></td>
                                        <td><?echo $objReSult5['amount'];?></td>                         
                                        <td><?echo $objReSult5['price'] * $objReSult5['amount'];?></td>
                                        <td>
                                            <button type="button" class="btn btn-default" data-toggle="modal" title="อ่านข้อมูลเพิ่มเติม" onclick="" data-target="#myModal2">แก้ไข</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="myModal2" role="dialog">
                                                    <div class="modal-dialog modal-lg">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">แก้ไขรายการอาหาร</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <table class="table">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ที่</th>
                                                                            <th>รายการอาหาร</th>
                                                                            <th></th>
                                                                            <th>จำนวน</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>
                                                                                <div class="input-group number-spinner">
                                                                                    <span class="input-group-btn">
                                                                    <button class="btn2"  onclick="minus(count<?echo "$y";?>)">-</button>
                                                                </span>
                                                                                        <input type="button" class="form-control" name="amount[]" id="count<?echo "$y";?>" value="1">
                                                                                        <span class="input-group-btn">
                                                                    <input type="hidden" id="chcheck" value="count<?echo "$y";?>">
                                                                     <button class="btn3" onclick="plus(count<?echo "$y";?>)">+</buttton>
                                                                </span>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">บันทึก</button>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <button type="button" class="btn btn-default">ลบ</button>
                                        </td>
                                    </tr>
                                    <?
                                }
                                    $a++;
                                            }
                                    ?>
                                </tbody>
                            </table>
                            <label for="">ยอดสั่งซื้อรวม</label>
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
                            <a class="btn btn-primary" href="cooking.php" role="button">ยืนยันการสั่งอาหาร</a>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </body>
        <script>
        // var count = 1; 
        // var test = $('#chcheck').val();
        // // var countEl = document.getElementById("count[1]"); // // console.log(countEl.length); // var inputs = document.querySelectorAll("count[1]"); // alert(inputs); // for (i = 0; i < inputs.length; i++) { // // your code here // }

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


        function submit(ds_id, sel_id) {
            var de_sel = ds_id;
            var sell_id = sel_id;
            var chk_food = $('#chkfood').val();
            var amount = $('#agent_lname').val();
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

        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function test() {
            var test = $('input[id="chkfood[]"]:checked').length;
            var test2 = document.getElementsByName('chkfood[]').length;
            var sell_id = $('#sell_id').val();
            var checkedValue = document.getElementsByName('chkfood[]');
            var amountValue = document.getElementsByName('amount[]');
            var priceValue = document.getElementsByName('price[]');
            var vals = new Array();
            var amount = new Array();
            var sum = new Array();
            for (var i = 0; i < test2; i++) {
                if (checkedValue[i].checked) {
                    var total1 = parseInt(priceValue[i].value);
                    var total2 = parseInt(amountValue[i].value);
                    var total3 = total1 * total2;
                    sum.push(total3);
                    vals.push(checkedValue[i].value);
                    amount.push(amountValue[i].value);
                    // price.push(priceValue[i].value);
                }
            }
            // var dataString = JSON.stringify(vals);
            $.ajax({
                    type: 'POST',
                    url: 'insert_de_sell.php',
                    data: {
                        'vals':vals,
                        'round': test,
                        'sell_id': sell_id,
                        'amount' : amount,
                        'sum' : sum
                    }
                })
                .done(function(data) {
                    window.location.reload();
                    console.log('done');
                    console.log(data);
                })
                // for (var i = 0; inputElements[i]; ++i) {
                //     if (inputElements[i].checked) {
                //         checkedValue = inputElements[i].value;
                //         break;

            //     }
            // }
            // var checkboxes = document.getElementsByName('hee[]');
            // var vals = "";
            // for (var i = 0, n = checkboxes.length; i < n; i++) {
            //     if (checkboxes[i].checked) {
            //         vals += "," + checkboxes[i].value;
            //     }
            // }
            // if (vals) vals = vals.substring(1);

            // checkedValue.push($('input[id="chkfood"]:checked').val());
            console.log(vals);
            // console.log(test);
        }
        </script>

</html>
