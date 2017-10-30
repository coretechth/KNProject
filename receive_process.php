<?php
include 'dbconfig.php';

/*รับตัวแปลมาจากหน้า receive.php*/
$pid = $_POST['productin'];
$qty = $_POST['txtQty'];
$cost = $_POST['txtCost'];

   /*เพิ่มลงในฐานข้อมูล*/
   $sqlRegis = "INSERT INTO receive(Product_ID,Receive_price,Qty,create_date) VALUES($pid,$cost,$qty,NOW())";
   $objRegis = mysqli_query($dbconfig, $sqlRegis);

    if ($objRegis) {
        echo "<script>
        alert('รับสินค้าเข้าเรียบร้อย');
        window.location.href='admin.php';
        </script>";
    } else {
        echo 'NO';
    }

?>
