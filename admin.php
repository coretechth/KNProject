<?php
/*session_start();*/
include 'header.php';
include 'sidebar.php';
if (isset($_SESSION['role']) && !empty($_SESSION['role'])) {
if ($_SESSION['role']==1) {?>

  <td valign="top" width="80%" style="padding-left:20px;">
    <h2>หน้าแอดมิน</h2><br>
    <table width="100%">
      <tr>
        <td>
          <h3>จัดการข้อมูลสินค้า</h3>
          <ul>
            <li><a href="show_product.php">ดูสินค้าทั้งหมด</a></li>
            <li><a href="edit_product.php">ลบสินค้า</a></li>
          </ul>
        </td>
        <td>
          <h3>จัดการสต็อก</h3>
          <ul>
            <li><a href="show_product_stock.php">รายการสินค้าคงเหลือ</a></li>
            <li><a href="receive.php">รับสินค้าเข้า</a></li>

          </ul>
        </td>
        <td>
          <h3>จัดการสมาชิก</h3>
          <ul>
            <li><a href="del_member.php">ลบข้อมูลสมาชิก</a></li>
          </ul>
        </td>
      </tr>
    </table>
  </td>

  <?php
}
}
else {

  /*echo "This page for Admin only! <a href='index.php'>กลับสู่หน้าหลัก</a>";*/
  echo '<td width="80%"><h2>This page for Admin only! <a href="index.php">กลับสู่หน้าหลัก</a></h2></td>';
  exit();
}
?>
    <!--<td width="80%">หน้าแอดมิน</td>-->
<?php include 'footer.php' ?>
