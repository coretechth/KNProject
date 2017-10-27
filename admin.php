<?php
/*session_start();*/
include 'header.php';
include 'sidebar.php';
if ($_SESSION['role']==1) {?>

  <td valign="top" width="80%" style="padding-left:20px;">
    <h2>หน้าแอดมิน</h2><br>
    <table width="100%">
      <tr>
        <td>
          <h3>จัดการข้อมูลสินค้า</h3>
          <ul>
            <li><a href="show_product.php">ดูสินค้าทั้งหมด</a></li>
            <li><a href="#">เพิ่มสินค้า</a></li>
            <li><a href="edit_product.php">แก้ไข/ลบสินค้า</a></li>
          </ul>
        </td>
        <td>
          <h3>จัดการสต็อก</h3>
          <ul>
            <li><a href="#">รับสินค้าเข้า</a></li>
            <li><a href="#">แก้ไขจำนวนสินค้า</a></li>
          </ul>
        </td>
        <td>
          <h3>จัดการสมาชิก</h3>
          <ul>
            <li><a href="#">แก้ไขข้อมูลสมาชิก</a></li>
            <li><a href="#">ลบข้อมูลสมาชิก</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </td>

  <?php
}
else {

  /*echo "This page for Admin only! <a href='index.php'>กลับสู่หน้าหลัก</a>";*/
  echo '<td width="80%"><h2>This page for Admin only! <a href="index.php">กลับสู่หน้าหลัก</a></h2></td>';
  exit();
}
?>
    <!--<td width="80%">หน้าแอดมิน</td>-->
<?php include 'footer.php' ?>
