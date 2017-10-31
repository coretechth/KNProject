<?php
/*session_start();*/
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';
$userid = $_SESSION["UserID"];

if (isset($_SESSION['role']) && !empty($_SESSION['role'])) {
if ($_SESSION['role']==2) {?>

  <td valign="top" width="80%" style="padding-left:20px;">
    <h2>หน้าสมาชิก</h2><br>
    <h3>รายการสั่งซื้อของท่าน</h3>

    <?php
    $sql = "SELECT * FROM bill_master WHERE username = '$userid'";
    $objQuery = mysqli_query($dbconfig, $sql);
    ?>
    <table width="60%" border="1" align="left" bordercolor="#666666" style="margin-bottom:30px;">
      <tr>
        <td width="91" align="center" bgcolor="#CCCCCC"><strong>เลขที่</strong></td>
        <td width="200" align="center" bgcolor="#CCCCCC"><strong>วันที่สั่งซื้อ</strong></td>
        <td width="20%" align="center" bgcolor="#CCCCCC"><strong>รายละเอียด</strong></td>
      </tr>
      <?php
       while ($objResult = mysqli_fetch_array($objQuery)){
         ?>
        <tr>
          <td width="91" align="center" >
            <?php echo $objResult["bill_id"];?>
          </td>
          <td width="200" align="center" >
            <?php echo $objResult["create_date"];?>
          </td>
          <td width="40%" align="center" >
            <a href="#">ดูรายละเอียด</a>
          </td>
        </tr>
        <?php
      }
      mysqli_close($dbconfig);
      ?>
  </table>
  </td>
  <?php
  }
}
?>
    <!--<td width="80%">หน้าแอดมิน</td>-->
<?php include 'footer.php' ?>
