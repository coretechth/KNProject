<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';
if ($_SESSION['role']==1) {

$sqlAdminProduct2 = "SELECT * FROM Product_master WHERE is_del=0";
$objQueryAdminProduct2 = mysqli_query($dbconfig, $sqlAdminProduct2);
?>
    <td width="80%" align="center">
    <h1>แก้ไข/ลบ สินค้า</h1>
    <table border="1" width="98%" style="margin-bottom:20px;">
      <th>รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>รายละเอียด</th>
      <th>ราคา</th>
      <th>รูป</th>
      <th width="10%"></th>
      <?php
                                    while ($objResultAdminProduct2 = mysqli_fetch_array($objQueryAdminProduct2)) {
                                        ?>
                                        <tr style="font-size:12px; text-align: center;">
                                          <td style="text-align:center;"><?php echo $objResultAdminProduct2["Product_ID"]; ?></td>
                                          <td><?php echo $objResultAdminProduct2["Product_name"]; ?></td>
                                          <td><?php echo $objResultAdminProduct2["Product_detail"]; ?></td>
                                          <td><?php echo $objResultAdminProduct2["Price"]; ?></td>
                                          <td><img src="images\products\products<?php echo $objResultAdminProduct2["Product_ID"]; ?>.jpg" alt="" width="100px"></td>
                                          <td>
                                            <a href="edit_product_process.php?id=<?php echo $objResultAdminProduct2["Product_ID"]; ?>">
                                              <img src="images\file.png" alt="" width="25px">
                                            </a>
                                            <a href="del_product_process.php?id=<?php echo $objResultAdminProduct2["Product_ID"]; ?>" onclick="return confirm('ต้องการลบสินค้าใช่หรือไม่?')">
                                              <img src="images\delete.png" alt="" width="25px">
                                            </a>

                                          </td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    <a href="admin.php">กลับหน้าแอดมิน</a>
    </td>
    <?php
  }
  else {

    /*echo "This page for Admin only! <a href='index.php'>กลับสู่หน้าหลัก</a>";*/
    echo '<td width="80%"><h2>This page for Admin only! <a href="index.php">กลับสู่หน้าหลัก</a></h2></td>';
    exit();
  }
  ?>
  <?php include 'footer.php' ?>
