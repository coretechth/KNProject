<?php
include './dbconfig.php';
session_start();

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];
$name = $_POST['txtName'];
$tel = $_POST['txtTel'];
$email = $_POST['txtEmail'];
$address = $_POST['txtArea'];

/*echo $username." ".$password." ".$name." ".$tel." ".$email." ".$address;*/

$sqlCheckUser = "SELECT Username FROM user_master WHERE Username='$username'";

/*echo $sqlCheckUser;*/
$objQuerycus = mysqli_query($dbconfig, $sqlCheckUser);
 $objResult = mysqli_fetch_array($objQuerycus);
 if(!$objResult)
 {
   /*เพิ่มผู้ใช้งานลงในฐานข้อมูล*/
   $sqlRegis = "INSERT INTO user_master(Username,Password,Name,Address,Email,Tel,Role) VALUES('$username','$password','$name','$address','$email','$tel','2')";
   $objRegis = mysqli_query($dbconfig, $sqlRegis);

    if ($objRegis) {
        echo "<script>
        alert('Register Successfully');
        window.location.href='show_register.php';
        </script>";
    } else {
        echo 'NO';
    }
 }
 else
 {
   echo 'ซ้ำ';
 }

?>
