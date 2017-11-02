<?php
/*เชื่อมต่อฐานข้อมูล*/
include 'dbconfig.php';

/*รับค่า id ที่ส่งมาพร้อมลิงค์*/
$username = $_GET['user'];

/*คำสั่งลบข้อมูล ปรับค่า is_del=1*/
$sqlDel = "UPDATE user_master SET is_del = 1 WHERE Username ='$username'";

/*สร้าง object เพื่อส่งคำสั่งไปประมวลผล*/
$objQuery = mysqli_query($dbconfig, $sqlDel);

/*สร้าง object เพื่อรับค่าที่ประมวลผลออกมาจาก DB*/
$objResult = mysqli_fetch_array($objQuery);
 if(!$objResult)
 {
   echo "<script>
   alert('ลบสินค้าเรียบร้อยแล้ว');
   window.location.href='del_member.php';
   </script>";
 }
?>
