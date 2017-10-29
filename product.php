<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$catetegory = $_GET['category'];

if($catetegory == 0){
  @$condition = 'WHERE is_del=0';
}elseif ($catetegory == 1) {
  @$condition = 'WHERE category_id=1 and is_del=0';
}elseif ($catetegory == 2) {
  @$condition = 'WHERE category_id=2 and is_del=0';
}elseif ($catetegory == 3) {
  @$condition = 'WHERE category_id=3 and is_del=0';
}elseif ($catetegory == 4) {
  @$condition = 'WHERE category_id=4 and is_del=0';
}elseif ($catetegory == 5) {
  @$condition = 'WHERE category_id=5 and is_del=0';
}


/* เลือกข้อมูลสินค้า*/
$sqlselProduct = "SELECT * FROM Product_master ".$condition;
$objQuerysqlProduct = mysqli_query($dbconfig, $sqlselProduct);
?>

    <td width="80%">
    <h1>สินค้า</h1>
    <table width="100%">
      <?php
                                    while ($objResultProduct = mysqli_fetch_array($objQuerysqlProduct)) {
                                        ?>
                                        <tr>
                                          <td width="30%">
                                              <img src="images\products\products<?php echo $objResultProduct["Product_ID"]; ?>.jpg" alt="" width="200px"><br>
                                          </td>
                                          <td valign="top" align="left">
                                            <b>รหัสสินค้า</b> : <?php echo $objResultProduct["Product_ID"]; ?><br>
                                            <b>ชื่อสินค้า</b> : <?php echo $objResultProduct["Product_name"]; ?><br>
                                            <b>รายละเอียด</b> : <?php echo $objResultProduct["Product_detail"]; ?><br><br>
                                            <b>ราคา</b> : <?php echo $objResultProduct["Price"]; ?> บาท<br><br>
                                            <a href="order.php?Method=add&ProductID=<?php echo $objResultProduct["Product_ID"];?>">สั่งซื้อ</a>
                                          </td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    </td>
<?php include 'footer.php' ?>
