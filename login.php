<?php
include 'header.php';
include 'sidebar.php'
?>
<td width="80%">
  </form>
  <table>
    <form method="post" action="login_process.php">
    <tr>
      <td colspan="2"><h3>เข้าสู่ระบบ</h3></td>
    </tr>
    <tr>
      <td>Username : </td>
      <td><input id="txtUsername" name="txtUsername" type="text" placeholder="Username" required=""></td>
    </tr>
    <tr>
      <td>Password : </td>
      <td><input id="txtPassword" name="txtPassword" type="password" placeholder="Password" required=""></td>
    </tr>
    <tr>
      <td colspan="2">  <button  type="submit">เข้าสู่ระบบ</button></td>
    </tr>
  </table>
</form>
</td>
<?php include 'footer.php' ?>
