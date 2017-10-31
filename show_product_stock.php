<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$sql = "SELECT * FROM Product_master WHERE is_del=0";
$objQuery = mysqli_query($dbconfig, $sql);
?>
    <td width="80%" align="center">
    <h1>รายการสต็อกสินค้า</h1>
    <table border="1" width="98%" style="margin-bottom:20px;">
      <th>รูปภาพ</th>
      <th width="5%">รหัสสินค้า</th>
      <th>ชื่อสินค้า</th>
      <th>ราคา</th>
      <th width="10%">วันที่สร้าง</th>
      <?php
                                    while ($objResultAdminProduct = mysqli_fetch_array($objQuery)) {
                                        ?>
                                        <tr style="font-size:14px;">
                                          <td><img src="images\products\products<?php echo $objResultAdminProduct["Product_ID"]; ?>.jpg" alt="" width="100px"></td>
                                          <td style="text-align:center;"><?php echo $objResultAdminProduct["Product_ID"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Product_name"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Price"]; ?></td>
                                          <td><?php echo $objResultAdminProduct["Create_date"]; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    <a href="admin.php">กลับหน้าแอดมิน</a>
    </td>
<?php include 'footer.php' ?>
