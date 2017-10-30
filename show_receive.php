<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$sql = "SELECT * FROM Product_master WHERE is_del=0";
$objQueryAdminProduct = mysqli_query($dbconfig, $sqlAdminProduct);
?>
    <td width="80%" align="center">
    <h1>สินค้าทั้งหมด</h1>
    <table border="1" width="98%" style="margin-bottom:20px;">
      <th width="5%">รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>รายละเอียด</th>
      <th>ราคา</th>
      <th width="9%">วันที่สร้าง</th>
      <th>รูปภาพ</th>
      <?php
                                    while ($objResultAdminProduct = mysqli_fetch_array($objQueryAdminProduct)) {
                                        ?>
                                        <tr style="font-size:12px;">
                                          <td style="text-align:center;"><?php echo $objResultAdminProduct["Product_ID"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Product_name"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Product_detail"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Price"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Create_date"]; ?></td>
                                          <td><img src="images\products\products<?php echo $objResultAdminProduct["Product_ID"]; ?>.jpg" alt="" width="100px"></td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    <a href="admin.php">กลับหน้าแอดมิน</a>
    </td>
<?php include 'footer.php' ?>
