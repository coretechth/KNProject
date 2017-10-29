<?php
/*เชื่อมต่อฐานข้อมูล*/
include 'dbconfig.php';

/*รับค่า id ที่ส่งมาพร้อมลิงค์*/
$productID = $_GET['id'];

/*คำสั่งลบข้อมูล ปรับค่า is_del=1*/
$sqlDelProduct = "UPDATE product_master SET is_del=1 WHERE Product_ID=".$productID;

/*สร้าง object เพื่อส่งคำสั่งไปประมวลผล*/
$objQueryDelProduct = mysqli_query($dbconfig, $sqlDelProduct);

/*สร้าง object เพื่อรับค่าที่ประมวลผลออกมาจาก DB*/
$objResult = mysqli_fetch_array($objQueryDelProduct);
 if(!$objResult)
 {
   echo "<script>
   alert('ลบสินค้าเรียบร้อยแล้ว');
   window.location.href='edit_product.php';
   </script>";
 }
?>
