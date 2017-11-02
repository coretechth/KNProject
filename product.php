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
$objQuery = mysqli_query($dbconfig, $sqlselProduct);

?>

<td width="80%">
  <h1>สินค้า</h1>
  <table width="95%" border="1" align="center" bordercolor="#666666" style="margin-bottom:30px;">
    <tr>
      <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
      <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสินค้า</strong></td>
      <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
      <td width="100" align="center" bgcolor="#CCCCCC"><strong>สั่งซื้อ</strong></td>
    </tr>
      <?php
          while ($objResult = mysqli_fetch_array($objQuery)) {?>
          <tr>
            <td valign="center" align="center">
              <img src="images\products\products<?php echo $objResult["Product_ID"]; ?>.jpg" alt="" width="150px"><br>
            </td>
            <td valign="center" align="center"><?php echo $objResult["Product_name"]; ?></td>
            <td valign="center" align="center"><?php echo number_format($objResult["Price"],2) ?></td>
            <td valign="center" align="center"><a href="order.php?act=add&pid=<?php echo $objResult["Product_ID"];?>">สั่งซื้อ</a></td>
          </tr>
        <?php
      }
      mysqli_close($dbconfig);
      ?>
    </table>
    </td>
<?php include 'footer.php' ?>
