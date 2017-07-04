<?
include ('conn.php');
session_start();
?>
<!DOCTYPE html>
<?
@include('conn.php');
$emp_id = $_GET['emp_id'];
?>
<html>
<head>
    <title></title>
    <meta http-equiv="content-Type" content="text/html; charset=utf8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://use.fontawesome.com/2503fe505d.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript">
      function checkID(id)
{
if(id.length != 13) return false;
for(i=0, sum=0; i < 12; i++)
sum += parseFloat(id.charAt(i))*(13-i); if((11-sum%11)%10!=parseFloat(id.charAt(12)))
return false; return true;}
 </script>

</head>
<body>
  <div class="box">
    <div class ="box1">
      <a href="index.php" target=""><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <div class ="box2">
      <ul>
        <li><a href="empolyee.php" target="">ขู้อมูลพนักงาน</a></li>&nbsp;
        <li><a href="" target="">ออกรายงาน</a></li>&nbsp;
      </ul>
    </div>
    <div class ="box5">
    <br>
      <p><? echo $_SESSION["user"];?></p>
    </div>
    <div class ="box3">
      <ul >
        <li><a href="logout.php" target="" class ="button2"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>&nbsp;&nbsp;
      </ul>
    </div>
  </div>
  <div class="box-box">
  </div>
  <div class="box-box-box"> 
      <div class="box-emp">
        <br><br>
        <h1>จัดการข้อมูลพนักงาน</h1><br><br>
        <div class = "h"></div><br>
        <?
        @include('conn.php');
          $strSQL = "SELECT  * FROM employee where emp_id = '".$emp_id."' ";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {
      ?>
        <div class="boxe">
          <label for="">รหัสพนักงาน</label>
            <input type="text" id="emp_id"  value="<?echo $emp_id;?>" disabled>
        </div>
        <div class="boxe1">
          <label for="">เลขบัตรประชาชน</label>
            <input type="text" id="emp_no" value="<?echo $objReSult['emp_no'];?>">
        </div>
        <div class="boxe">
          <label for="">ชื่อ</label><br>
            <input type="text" placeholder="ชื่อ" id="emp_fname" value="<?echo $objReSult['emp_fname'];?>">
        </div>
        <div class ="boxe1">
            <label for="">นามสกุล</label>
          <input type="text" placeholder="นามสกุล" id="emp_lname" value="<?echo $objReSult['emp_lname'];?>">  
        </div>
        <div class="boxe">  
            <label for="">วันเกิด</label>
            <input type="date" id="emp_date" value="<?echo $objReSult['emp_date'];?>">
         </div>
          <div class="boxe1">
             <label for="">เพศ</label><br>
             <input type="radio" id="emp_sex" name ="emp_sex" value="ชาย"  <? if($objReSult['emp_sex']=="ชาย"){ echo "checked"; }?>>ชาย&nbsp;&nbsp;
             <input type="radio" id="emp_sex" name ="emp_sex" value="หญิง" <? if($objReSult['emp_sex']=="หญิง"){ echo "checked"; }?>>หญิง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe">  
            <label for="">ที่อยู่</label>
            <input type="text" id="emp_add" value="<?echo $objReSult['emp_add'];?>">
          </div>
          <div class="boxe1">  
            <label for="">วันที่เข้าทำงาน</label>
            <input type="date" id="emp_work" value="<?echo $objReSult['emp_datework'];?>">
          </div>
          <div class="boxe">  
            <label for="">เบอร์โทรศัพท์</label>
            <input type="text" id="emp_tel" value="<?echo $objReSult['emp_tel'];?>">
          </div>
          <div class="boxe1">  
            <label for="">สาขาที่ทำงาน</label>
             <select type="text" id="emp_branch" value="<?echo $objReSult['emp_branch'];?>">
                <option value=<?echo $objReSult['emp_branch'];?>><?if ($objReSult['emp_branch'] == 1 ) echo "สาขา1"; else echo "สาขา2";?></option>
                <?if ($objReSult['emp_branch'] == 2 ) {
                echo "<option value=1>สาขา1</option>";
                }
                if($objReSult['emp_branch'] == 1)
                echo "<option value=2>สาขา2</option>";
                ?>
              </select>
          </div>
          <!-- <div class = "h"></div><br>
          <br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set username / password
          <br><br><br>
          <div class = "h"></div><br>
          <div class="boxe2">  
            <label for="">username</label>
            <input type="text" id="emp_tel">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe2">  
            <label for="">password</label>
            <input type="text" id="emp_tel">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe2">  
            <label for="">confirm password</label>
            <input type="text" id="emp_tel">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>-->
          <? } ?>
          <div class ="boxe-add">
            <input type="button"  name= "submit" class="button button1" value = "บันทึก" onclick="updateData()">
          </div>
          <div class ="boxe-reset">
          <input type="button"  name= "submit" class="button button1" value = "ยกเลิก" >
          </div>
    </div>
  </div>
  <div class="box-box-box-box">
  </div>
</body>
<script>
    function updateData(){
    var emp_id = $('#emp_id').val();
    var emp_fname =$('#emp_fname').val();
    var emp_no =$('#emp_no').val();
    var emp_lname =$('#emp_lname').val();
    var emp_date =$('#emp_date').val();
    var emp_add =$('#emp_add').val();
    var emp_work =$('#emp_work').val();
    var emp_sex =$('#emp_sex:checked').val();
    var emp_branch =$('#emp_branch').val();
    var emp_tel =$('#emp_tel').val();
    if(emp_id === ""){
    alert('กรุณากรอกข้อมูลให้ครบถ้วน !!');
    return;
  }else{
    if (!checkID(emp_no)) {
      alert("เลขบัตรประชาชนไม่ถูกต้อง");
    }
    else {
       //alert(eats);
     $.ajax({
    type: "POST",
    url: "update_emp.php",
    data: { 'emp_id': emp_id,
    'emp_fname' : emp_fname,
    'emp_lname' : emp_lname,
    'emp_no' : emp_no,
    'emp_date' : emp_date,
    'emp_add' : emp_add,
    'emp_work' : emp_work,
    'emp_sex' : emp_sex,
    'emp_branch' : emp_branch,
    'emp_tel' : emp_tel
    }
  })
    .done(function( msg ) {
       // alert( "Send Data : " + msg);
       //$('#myModal').modal('hide');
    window.location = "empolyee.php";
    alert(msg);
    });

    }
  }
    // alert(idFood + ' ' + hn + ' ' + detail);
  }
  </script>
</html>
