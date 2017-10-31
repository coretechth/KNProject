<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$act = $_REQUEST['act'];

if($act=='update' or $act == 'show'){

}else {
  $p_id = $_REQUEST['pid'];
}

if($act=='add' && !empty($p_id))
{
  if(isset($_SESSION['cart'][$p_id]))
  {
    $_SESSION['cart'][$p_id]++;
  }
  else
  {
    $_SESSION['cart'][$p_id]=1;
  }
}

if($act=='remove' && !empty($p_id))  //ยกเลิกการสั่งซื้อ
{
  unset($_SESSION['cart'][$p_id]);
}

if($act=='update')
{
  $amount_array = $_POST['amount'];
  foreach($amount_array as $p_id=>$amount)
  {
    $_SESSION['cart'][$p_id]=$amount;
  }
}

?>

<td valign="top" width="80%" style="padding-left:20px;">
  <br>
  <form id="frmcart" name="frmcart" method="post" action="?act=update">
  <table width="600" border="0" align="center" class="square">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC">
      <b>ตะกร้าสินค้า</span></td>
    </tr>
    <tr>
      <td bgcolor="#EAEAEA">สินค้า</td>
      <td align="center" bgcolor="#EAEAEA">ราคา</td>
      <td align="center" bgcolor="#EAEAEA">จำนวน</td>
      <td align="center" bgcolor="#EAEAEA">รวม(บาท)</td>
      <td align="center" bgcolor="#EAEAEA">ลบ</td>
    </tr>
<?php
$total=0;
if(!empty($_SESSION['cart']))
{
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "SELECT * FROM product_master WHERE Product_ID = $p_id and is_del = 0";
		$query = mysqli_query($dbconfig, $sql);
		$row = mysqli_fetch_array($query);
		$sum = $row['Price'] * $qty;
		$total += $sum;
		echo "<tr>";
		echo "<td width='334'>" . $row["Product_name"] . "</td>";
		echo "<td width='46' align='right'>" .number_format($row["Price"],2) . "</td>";
		echo "<td width='57' align='right'>";
		echo "<input type='text' name='amount[$p_id]' value='$qty' size='2'/></td>";
		echo "<td width='93' align='right'>".number_format($sum,2)."</td>";
		//remove product
		echo "<td width='46' align='center'><a href='order.php?pid=$p_id&act=remove'>ลบ</a></td>";
		echo "</tr>";
	}
	echo "<tr>";
  	echo "<td colspan='3' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
  	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
  	echo "<td align='left' bgcolor='#CEE7FF'></td>";
	echo "</tr>";
}
?>
<tr>
<td><a href="product.php?category=0">กลับหน้ารายการสินค้า</a></td>
<td colspan="4" align="right">
    <input type="submit" name="button" id="button" value="ปรับปรุง" />
    <input type="button" name="Submit2" value="สั่งซื้อ" onclick="window.location='confirm.php';" />
</td>
</tr>
</table>
</form>
</td>

<?php include 'footer.php' ?>
