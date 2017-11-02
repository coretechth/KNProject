<?php
include 'header.php';
include 'sidebar.php';
include 'dbconfig.php';
if ($_SESSION['role']==1) {

$sql2 = "SELECT * FROM user_master WHERE Role = 2 and is_del = 0";
$objQuery = mysqli_query($dbconfig, $sql2);
?>
    <td width="80%" align="center">
    <h1>รายการสมาชิก</h1>
    <table border="1" width="98%" style="margin-bottom:20px;">
      <th bgcolor="#CCCCCC">username</th>
      <th bgcolor="#CCCCCC">ชื่อ</th>
      <th bgcolor="#CCCCCC" width="30%">ที่อยู่</th>
      <th bgcolor="#CCCCCC">อีเมลล์</th>
      <th bgcolor="#CCCCCC">โทร</th>
      <th bgcolor="#CCCCCC" width="5%"></th>
      <?php
                                    while ($objResult = mysqli_fetch_array($objQuery)) {
                                        ?>
                                        <tr style="font-size:12px; text-align: center;">
                                          <td><?php echo $objResult["Username"]; ?></td>
                                          <td><?php echo $objResult["Name"]; ?></td>
                                          <td><?php echo $objResult["Address"]; ?></td>
                                          <td><?php echo $objResult["Email"]; ?></td>
                                          <td><?php echo $objResult["Tel"]; ?></td>
                                          <td><a href="del_member_process.php?user=<?php echo $objResult["Username"]; ?> onclick="return confirm('ต้องการลบสมาชิกใช่หรือไม่?')"">ลบ</a></td>
                                        </tr>
                                        <?php
                                    }
                                    mysqli_close($dbconfig);
                                    ?>
    </table>
    <a href="admin.php">กลับหน้าแอดมิน</a>
    </td>
    <?php
  }
  else {

    /*echo "This page for Admin only! <a href='index.php'>กลับสู่หน้าหลัก</a>";*/
    echo '<td width="80%"><h2>This page for Admin only! <a href="index.php">กลับสู่หน้าหลัก</a></h2></td>';
    exit();
  }
  ?>
  <?php include 'footer.php' ?>
