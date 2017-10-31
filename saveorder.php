<?php
include 'dbconfig.php';
session_start();

   $userid = $_SESSION["UserID"];

   $sqlRegis = "INSERT INTO bill_master(username,create_date) VALUES('$userid',NOW());";
   $objRegis = mysqli_query($dbconfig, $sqlRegis);
    if ($objRegis) {
        $sql = "SELECT * FROM bill_master ORDER BY bill_id DESC LIMIT 1";
        $obj = mysqli_query($dbconfig,$sql);
        $Result = mysqli_fetch_array($obj);
        if($Result){

            /**/
            $billid = $Result["bill_id"];
            foreach($_SESSION['cart'] as $p_id=>$qty)
	             {
		                $sql3	= "select * from product_master where Product_ID=$p_id";
		                $query3	= mysqli_query($dbconfig, $sql3);
		                $row3	= mysqli_fetch_array($query3);
		                $total	= $row3['Price']*$qty;

                    echo $total;

		                $sql4	= "INSERT INTO bill_detail(bill_id,Product_ID,price,Qty) VALUES($billid, $p_id,$total,$qty)";
		                $query4	= mysqli_query($dbconfig, $sql4);
                    if($query4){
                      foreach($_SESSION['cart'] as $p_id)
		{
			//unset($_SESSION['cart'][$p_id]);
			unset($_SESSION['cart']);
		}
                      echo "<script>
                      alert('สั่งซื้อสินค้าเรียบร้อยแล้ว');
                      window.location.href='member.php';
                      </script>";
                    }
	             }

            /*$sql = "INSERT INTO bill_detail VALUES($billid, Product_ID,price)";
            $obj = mysqli_query($dbconfig,$sql);
            $Result = mysqli_fetch_array($obj);
            if($Result){
            }*/

        }

    }else {
      echo "string";
    }

?>
