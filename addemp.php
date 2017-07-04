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
    <div class ="box4">
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
        <h1>เพิ่มข้อมูลพนักงาน</h1><br><br>
        <div class = "h"></div><br>
        <div class="boxe">
        <?
          @include('conn.php');
          $new_id =mysql_result(mysql_query("Select Max(substr(emp_id,-3))+1 as MaxID from  employee"),0,"MaxID");
          if($new_id==''){ // ถ้าได้เป็นค่าว่าง หรือ null ก็แสดงว่ายังไม่มีข้อมูลในฐานข้อมูล
                $emp_id="E001";
            }else{
                $emp_id="E".sprintf("%03d",$new_id);//ถ้าไม่ใช่ค่าว่าง
            }
          ?>
          <label for="">รหัสพนักงาน</label>
            <input type="text" id="emp_id" value="<?echo $emp_id;?>" disabled>&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe1">
          <label for="">เลขบัตรประชาชน/เลข passport </label>
            <input type="text" id="emp_no">
        </div>
        <div class="boxe">
          <label for="">ชื่อ</label><br>
            <input type="text" placeholder="ชื่อ" id="emp_fname">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class ="boxe1">
            <label for="">นามสกุล</label>
          <input type="text" placeholder="นามสกุล" id="emp_lname"> &nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
        </div>
        <div class="boxe">  
            <label for="">วันเกิด</label>
            <input type="date" id="emp_bdate">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
         </div>
          <div class="boxe1">
            <label for="">เพศ</label><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="emp_sex" name="emp_sex" value="ชาย" checked="checked">ชาย&nbsp;&nbsp;
            <input type="radio" id="emp_sex" name="emp_sex" value="หญิง">หญิง&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <br>
          <div class="boxe">  
            <label for="">ที่อยู่</label>
            <input type="text" id="emp_add">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe1">  
            <label for="">วันที่เข้าทำงาน</label>
            <input type="date" id="emp_work">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe">  
            <label for="">เบอร์โทรศัพท์</label>
            <input type="text" id="emp_tel">&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>
          </div>
          <div class="boxe1">  
         
            <label for="">สาขาที่ทำงาน</label>
             <select type="text" id="emp_branch">
              <? $strSQL = "SELECT  * FROM branch order by branch_id asc";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {
            ?>
                <option value="<?echo $objReSult['branch_id'];?>"><?echo $objReSult['branch_add'];?></option>
            <?
            }
            ?>
            </select>&nbsp;<i class="fa fa-asterisk" aria-hidden="true"></i>        
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
          </div> -->
          <div class ="boxe-add">
            <input type="button"  name= "submit" class="button button1" value = "บันทึก" onclick="submitData()">
          </div>
          <div class ="boxe-reset">
          <input type="button"  name= "cancel" class="button button1" value = "ยกเลิก" >
          </div>
    </div>
  </div>
  <div class="box-box-box-box">
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>

<script>
  function submitData(){
  var emp_id = $('#emp_id').val();
  var emp_fname =$('#emp_fname').val();
  var emp_no =$('#emp_no').val();
  var emp_lname =$('#emp_lname').val();
  var emp_date =$('#emp_bdate').val();
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
  url: "insert_emp.php",
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
