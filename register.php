<?php
include 'header.php';
include 'sidebar.php'
?>
<td width="80%">
  </form>
  <table>
    <form method="post" action="register_process.php">
    <tr>
      <td colspan="2"><h3>สมัครสมาชิก </h3></td>
    </tr>
    <tr>
      <td>Username : </td>
      <td><input id="txtUsername" name="txtUsername" type="text" placeholder="Username" required="">*</td>
    </tr>
    <tr>
      <td>Password : </td>
      <td><input id="txtPassword" name="txtPassword" type="password" placeholder="Password" required="">*</td>
    </tr>
    <tr>
      <td>ชื่อ-นามสกุล : </td>
      <td><input id="txtName" name="txtName" type="text" placeholder="ชื่อ-นามสกุล" required="">*</td>
    </tr>
    <tr>
      <td>เบอร์โทร : </td>
      <td><input id="txtTel" name="txtTel" type="text" placeholder="0123456789" required="">*</td>
    </tr>
    <tr>
      <td>อีเมล์ : </td>
      <td><input id="txtEmail" name="txtEmail" type="email" placeholder="abc@g.com">*</td>
    </tr>
    <tr>
      <td>ที่อยู่ : </td>
      <td>
        <textarea id="txtArea" name="txtArea" rows="8" cols="50" required=""></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2">  <button  type="submit">สมัครสมาชิก</button></td>
    </tr>
  </table>
</form>
</td>
<?php include 'footer.php' ?>
