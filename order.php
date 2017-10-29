<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

if(!empty($_REQUEST['ProductID']) && !empty($_REQUEST['Method'])){
  echo "rlgkeoprgkeoprkgeropgkp";

$id = $_REQUEST['ProductID'];
$method = $_REQUEST['Method'];


if($method=='add' && !empty($id)){
  if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]++;
  }else {
    $_SESSION['cart'][$id]=1;
  }
}
if($method=='remove' && !empty($id))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['cart'][$id]);
	}
}
if($method=='update')
  {
    $amount_array = $_POST['amount'];
    foreach($amount_array as $id=>$amount)
    {
      $_SESSION['cart'][$id]=$amount;
    }
  }
?>
<td width="80%">
  <h1>รายการสินค้าในตะกร้า</h1>
  <form id="frmcart" name="frmcart" method="post" action="?Method=update">
  <table border="1" width="98%" style="margin-bottom:20px;">
    <th>รูปภาพ</th>
    <th>ชื่อสินค้า</th>
    <th>ราคา</th>
    <th>จำนวน</th>
    <th>รวมราคา</th>
    <th></th>

  <?php
    $total=0;
    $sum = 0;
    if(!empty($_SESSION['cart'])){
      foreach($_SESSION['cart'] as $id=>$qty){
        $sql = "SELECT * FROM Product_master WHERE Product_ID = $id and is_del=0";
        $objQuery = mysqli_query($dbconfig, $sql);
        $objResult = mysqli_fetch_array($objQuery);
        $sum = $objResult["Price"] * $qty;
		    $total += $sum;
            ?>
            <tr style="font-size:12px;">
              <td><img src="images\products\products<?php echo $objResult["Product_ID"]; ?>.jpg" alt="" width="100px"></td>
              <td><?php echo $objResult["Product_name"]; ?></td>
              <td><?php echo $objResult["Price"]; ?></td>
              <td><input type='text' name='amount[$id]' value='<?php echo $qty;?>' size='2'/></td>
              <td><?php echo number_format($total,2);?></td>
              <td><a href="order.php?Method=remove&ProductID=<?php echo $objResult["Product_ID"];?>">ลบ</a></td>
            </tr>
            <?php
      }
    }
  ?>
  <tr>
    <td colspan="6"><input type="submit" name="button" id="button" value="ปรับปรุง" /></td>
  </tr>
  </table>
</form>
  <br><a href="product.php">เลือกสินค้าเพิ่มเติม</a>
</td>
<?php include 'footer.php' ?>
