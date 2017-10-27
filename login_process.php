<?php include './dbconfig.php';

session_start();
$strSQL = "SELECT * FROM user_master WHERE Username='$_POST[txtUsername]' and Password='$_POST[txtPassword]'";

$objQuery = mysqli_query($dbconfig, $strSQL);
 $objResult = mysqli_fetch_array($objQuery);
 if(!$objResult)
 {
   echo 'รหัสผ่านไม่ถูกต้อง <a href="login.php">กรุณาเข้าสู่ระบบ</a>';
 }
 else
 {
   $_SESSION["UserID"] = $objResult["Username"];
   $_SESSION["role"] = $objResult["Role"];

   session_write_close();

   if($_SESSION["role"]==1){
     header("location:admin.php");
   }else {
     header("location:index.php");
   }

   /*
   if($objResult["role"] == 1)
   {
    header("location:index.php");
   }
   else
   {
    header("location:forms.html");
   }
                         *
                         */
 }
?>
