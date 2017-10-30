<?php
include 'dbconfig.php';

$nname = $_POST['txtPname'];
$detail = $_POST['txtPdetail'];
$price = $_POST['txtPprce'];

if(move_uploaded_file($_FILES["filUpload"]["tmp_name"],"images/".$_FILES["filUpload"]["name"])){
/*
  $sqlRegis = "INSERT INTO product_master(Product_name,Product_detail,Price,Category_id,img,Create_date) VALUES('$nname','$detail','$price',0,'',NOW())";
  $objRegis = mysqli_query($dbconfig, $sqlRegis);

   if ($objRegis) {
       echo "<script>
       alert('Register Successfully');
       window.location.href='admin.php';
       </script>";
   } else {
       echo 'NO';
   }

}*/

echo $_FILES["filUpload"]["name"];
 ?>
