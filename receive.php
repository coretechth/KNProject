<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';

$sql = "SELECT * FROM Product_master WHERE is_del=0";
$objQuery = mysqli_query($dbconfig, $sql);

?>
  <td valign="top" width="80%" style="padding-left:20px;">
  </form>
  <table>
    <form method="post" action="receive_process.php">
    <tr>
      <td colspan="2"><h2>รับสินค้าเข้า</h2></td>
    </tr>
    <tr>
      <td>รายการสินค้า : </td>
      <td>
        <select name="productin">
          <?php
            while ($objResult = mysqli_fetch_array($objQuery)) {
          ?>
          <option value="<?php echo $objResult["Product_ID"]; ?>"><?php echo $objResult["Product_name"]; ?></option>
          <?php
      }
      mysqli_close($dbconfig);
      ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>จำนวนรับเข้า : </td>
      <td><input id="txtQty" name="txtQty" type="number" placeholder="" required=""></td>
    </tr>
    <tr>
      <td>ราคาต้นทุน : </td>
      <td><input id="txtCost" name="txtCost" type="number" placeholder="" required=""></td>
    </tr>
    <tr>
      <td colspan="2">  <button  type="submit" onclick="return confirm('ต้องการรับสินค้าใช่หรือไม่?')">รับสินค้า</button></td>
    </tr>
  </table>
</form>
</td>

<?php include 'footer.php' ?>
