<?php
session_start();
?>
<tr style="border: 1px solid black;">
  <td valign="top" width="20%" style="border: 1px solid black; padding:10px;">
    <?php

    if(isset($_SESSION['UserID']) && !empty($_SESSION['UserID'])){
      echo 'ยินดีต้อนรับ, <b>'.$_SESSION["UserID"].'</b>';
      echo '<br><a href="logout.php">ออกจากระบบ</a>';
    }else {
      echo '<a href="login.php">กรุณาเข้าสู่ระบบ</a><br><a href="register.php">สมัครสมาชิก</a>';
    }

    if (isset($_SESSION['role']) && !empty($_SESSION['role'])) {
        echo '<br><a href="admin.php">หน้าแอดมิน</a>';
    }
    ?>
    <br>
    <div class="" style="padding-top:30px;">
      <h3>หมวดหมู่สินค้า</h3>
      <ul>
        <li><a href="product.php?category=1">หมวดหมู่1</a></li>
        <li><a href="product.php?category=2">หมวดหมู่2</a></li>
        <li><a href="product.php?category=3">หมวดหมู่3</a></li>
        <li><a href="product.php?category=4">หมวดหมู่4</a></li>
        <li><a href="product.php?category=5">หมวดหมู่5</a></li>
      </ul>
    </div>
  </td>
