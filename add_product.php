<?php
include 'header.php';
include 'sidebar.php'
?>
<td width="80%">
  </form>
  <table>
    <form method="post" action="addproduct_process.php">
    <tr>
      <td colspan="2"><h2>เพิ่มสินค้า </h2></td>
    </tr>
    <tr>
      <td>ชื่อสินค้า : </td>
      <td><input id="txtPname" name="txtPname" type="text" placeholder="ชื่อสินค้า" required="" style="width:80%;">*</td>
    </tr>
    <tr>
      <td>รายละเอียดสินค้า : </td>
      <td><textarea id="txtPdetail" name="txtPdetail" rows="8" cols="50" required=""></textarea></td>
    </tr>
    <tr>
      <td>ราคาขาย : </td>
      <td><input id="txtPprce" name="txtPprce" type="number" placeholder="ราคา" required=""></td>
    </tr>
    <tr>
      <td>รูปภาพ : </td>
      <td><input type="file" name="filUpload"></td>
    </tr>
    <tr>
      <td colspan="2">  <button  type="submit">เพิ่มสินค้า</button></td>
    </tr>
  </table>
</form>
</td>
<?php include 'footer.php' ?>
