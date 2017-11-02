<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$sql = "SELECT * FROM Product_master WHERE is_del=0";
$objQuery = mysqli_query($dbconfig, $sql);
?>
<td width="80%" align="center">
  <table style="text-align: center;" border="1">
    <tr>
      <td>รหัสสินค้า</td>
      <td>ชื่อสินค้า</td>
      <td>คงเหลือ</td>
    </tr>
<?php
while ($objResult= mysqli_fetch_array($objQuery)) {
  $pid = $objResult["Product_ID"];

  $sqlR = "SELECT Product_ID, sum(Qty) as a FROM receive WHERE Product_ID = $pid";
  $objQueryR = mysqli_query($dbconfig, $sqlR);
  $row = mysqli_fetch_array($objQueryR);
  $a = $row['a'];

  $sqlB = "SELECT Product_ID, SUM(Qty) as b FROM bill_detail WHERE Product_ID=$pid";
  $objQueryB = mysqli_query($dbconfig, $sqlB);
  $rowB = mysqli_fetch_array($objQueryB);
  $b = $rowB['b'];
  $total = $a-$b;
  ?>
  <tr>
    <td><?php echo $pid; ?></td>
    <td><?php echo $objResult["Product_name"]; ?></td>
    <td><?php echo $total;?></td>
  </tr>
  <?php



}
mysqli_close($dbconfig);
?>
</table>
<br><a href="admin.php">กลับหน้าแอดมิน</a>
</td>
<?php include 'footer.php' ?>
