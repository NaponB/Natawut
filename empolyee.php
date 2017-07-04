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

</head>
<body>
	<div class="box">
    <div class ="box1">
      <a href="index.php" target=""><i class="fa fa-home" aria-hidden="true"></i></a>
    </div>
    <div class ="box2">
      <ul>
        <li><a href="empolyee.php" target="">ข้อมูลพนักงาน</a></li>&nbsp;
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
    <br>
    <br>
    <div class="box-row">
      <p>ค้นหาข้อมูลพนักงาน</p>
      <ul>
      <li><input type="text" name="search" placeholder="ใสรหัสพนักงาน"></li>&nbsp;
      <li><a class="button2" href="#" target="">ค้นหา&nbsp;<i class="fa fa-location-arrow" aria-hidden="true"></i></a></li>
      </ul>
    </div>
      <a class="button button2" href="addemp.php" target=""><i class="i fa fa-plus tooltip" aria-hidden="true"></i>&nbsp;เพิ่มข้อมูล</a>
    <table>
      <tr>
        <th>รหัสพนักงาน</th>
        <th>รหัสบัตรประชาชน</th>
        <th>ชื่อ</th>
        <th>นามสกุล</th>
        <th>วันเกิด</th>
        <th>เพศ</th>
        <th>ที่อยู่</th>
        <th>วันที่เข้าทำงาน</th>
        <th>เบอร์โทรศัพท์</th>
        <th>สาขาที่ทำงาน</th>
        <th>การจัดการ</th>
      </tr>
      <tr>
       <?
        @include('conn.php');
          $strSQL = "SELECT  *, DATE_FORMAT(emp_date,'%d/%m/%Y') as emp_date, DATE_FORMAT(emp_datework,'%d/%m/%Y') as emp_datework FROM employee";
          $objQuery = mysql_query($strSQL) or die("Error Query [".$strSQL."]");
          while ($objReSult = mysql_fetch_array($objQuery)) {

            $strSQL2 = "SELECT * from branch where branch_id = '".$objReSult['emp_branch']."'";
          $objQuery2 = mysql_query($strSQL2) or die("Error Query [".$strSQL2."]");
          while ($objReSult2 = mysql_fetch_array($objQuery2)) {
      ?>
        <td><?echo $objReSult['emp_id'];?></td>
        <td><?echo $objReSult['emp_no'];?></td>
        <td><?echo $objReSult['emp_fname'];?></td>
        <td><?echo $objReSult['emp_lname'];?></td>
        <td><?echo $objReSult['emp_date'];?></td>
        <td><?echo $objReSult['emp_sex'];?></td>
        <td><?echo $objReSult['emp_add'];?></td>
        <td><?echo $objReSult['emp_datework'];?></td>
        <td><?echo $objReSult['emp_tel'];?></td>
        <td><?echo $objReSult2['branch_add'];?></td>
        <td>
          <ul>
            <li><a href="editemp.php?emp_id=<?echo $objReSult['emp_id'];?>"><i class="fa fa-pencil-square-o  tooltip" aria-hidden="true" style="cursor:pointer"><span class="tooltiptext">แก้ไขข้อมูล</span></i></a></li>&nbsp;&nbsp;&nbsp;
            <li><a href="del_emp.php?emp_id=<?echo $objReSult['emp_id'];?>" onclick="return confirm('ยืนยันการลบข้อมูล ??')"><i class="fa fa-trash-o  tooltip" aria-hidden="true" style="cursor:pointer"><span class="tooltiptext">ลบข้อมูล</span></i></li>
          </ul>
        </td>
      </tr>
      <? }  } ?>
    </table>
  </div>
  <div class="box-box-box-box">
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
</body>
</html>
