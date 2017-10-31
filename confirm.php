<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';
?>
<td valign="top" width="80%" style="padding-left:20px;">
  <br>
  <form id="frmcart" name="frmcart" method="post" action="saveorder.php">
  <table width="600" border="0" align="center" class="square">
    <tr>
      <td colspan="5" bgcolor="#CCCCCC">
      <b>รายการสั่งซื้อสินค้า</span></td>
    </tr>
    <tr>
      <td bgcolor="#F9D5E3">สินค้า</td>
      <td align="center" bgcolor="#F9D5E3">ราคา</td>
      <td align="center" bgcolor="#F9D5E3">จำนวน</td>
      <td align="center" bgcolor="#F9D5E3">รวม/รายการ</td>
    </tr>
    <?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql = "SELECT * FROM product_master WHERE Product_ID = $p_id and is_del = 0";
		$query	= mysqli_query($dbconfig, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['Price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row["Product_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['Price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#F9D5E3'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#F9D5E3'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";

?>
<tr>
  <td>
    <table style="margin-top:30px;">
      <tr>
        <td colspan="2"><b>ข้อมูลผู้สั่งซื้อ</b></td>
      </tr>
      <tr>
        <td width="30%">ชื่อ :</td>
        <td><?php echo $_SESSION["Name"]; ?></td>
      </tr>
      <tr>
        <td width="30%">ที่อยู่จัดส่ง :</td>
        <td><?php echo $_SESSION["Address"]; ?></td>
      </tr>
      <tr>
        <td width="30%">อีเมล์ :</td>
        <td><?php echo $_SESSION["Email"]; ?></td>
      </tr>
      <tr>
        <td width="30%">เบอร์โทร :</td>
        <td><?php echo $_SESSION["Tel"]; ?></td>
      </tr>
    </table>
  </td>
</tr>
<tr>
  <td colspan="4"><input type="submit" name="Submit2" value="ยืนยันการสั่งซื้อ" style="margin:30px 0px 20px 0px;" />
  <input type="button" name="Submit3" value="ยกเลิก" onclick="window.location='order.php?act=show';" />
</td>
</tr>
  </table>
</form>
</td>

<?php 
include 'footer.php' ?>
