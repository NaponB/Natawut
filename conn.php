<?
mysql_connect( 'localhost','root','') or die ("ติดต่อกับฐานข้อมูล Mysql ไม่ได้ ");
mysql_select_db('natawut') or die(“เลือกฐานข้อมูลไม่ได้”);
mysql_query("SET NAMES UTF8");
?>
