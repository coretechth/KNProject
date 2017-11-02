<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$id = $_REQUEST['id'];
$sql = "SELECT bm.bill_id, bm.username, bm.create_date, bd.Qty, bd.price, pm.Product_name, pm.Price, pm.Product_ID FROM bill_master bm INNER JOIN bill_detail bd ON bm.bill_id = bd.bill_id
INNER JOIN product_master pm ON bd.Product_ID = pm.Product_ID
WHERE bm.bill_id =$id";
$objQ = mysqli_query($dbconfig, $sql);
$total = 0;

/**/
?>
    <td width="80%" align="center">
    <h1>รายละเอียดสินค้า</h1>
    <table width="95%" border="1" align="center" bordercolor="#666666" style="margin-bottom:30px;">
      <tr>
        <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
        <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสินค้า</strong></td>
        <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
        <td width="44" align="center" bgcolor="#CCCCCC"><strong>จำนวน</strong></td>
        <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคารวม</strong></td>
      </tr>
        <?php
            while ($objResult = mysqli_fetch_array($objQ)) {
              $sum = $objResult['price'];
          		$total += $sum;
              ?>
            <tr>
              <td valign="center" align="center">
                <img src="images\products\products<?php echo $objResult["Product_ID"]; ?>.jpg" alt="" width="150px"><br>
              </td>
              <td valign="center" align="center"><?php echo $objResult["Product_name"]; ?></td>
              <td valign="center" align="center"><?php echo number_format($objResult["Price"],2) ?></td>
              <td valign="center" align="center"><?php echo $objResult["Qty"]; ?></td>
              <td valign="center" align="center"><?php echo number_format($objResult["price"],2) ?></td>
            </tr>
          <?php
        }
        mysqli_close($dbconfig);
        echo "<tr>";
        	echo "<td colspan='4' bgcolor='#CEE7FF' align='center'><b>ราคารวม</b></td>";
        	echo "<td align='right' bgcolor='#CEE7FF'>"."<b>".number_format($total,2)."</b>"."</td>";
      	echo "</tr>";
        ?>
      </table>
    <a href="member.php">กลับหน้าสมาชิก</a>
    </td>
<?php include 'footer.php' ?>
