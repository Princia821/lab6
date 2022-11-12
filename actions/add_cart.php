<?php
require('../settings/core.php');
require("../controllers/cart_controller.php");

    //get data from links
    $pid = $_GET['pid'];
    $ipadd = $_GET['ipadd'];
    // $cid = $_SESSION['user_id']; 
    $qty = $_GET['qty'];
    $cid = $_GET['cid'];
  
    var_dump($pid,$ipadd,$cid,$qty);
    //check for log in
    if (empty($cid)){
        //check for duplicates

        $isDuplicate = checkDuplicateNull_ctr($pid, $ipadd);
       
        if (!empty($isDuplicate)){
            ?>
            <script type="text/javascript">
            alert("Product is already in cart. Consider increasing quantity in your cart");
            window.location.href = "../views/all_product.php"; 
            </script>
            <?php
        }
        else{
            $insertIntoCart = insertProductIntoCartNull_ctr($pid, $ipadd, $qty); 
            var_dump($insertIntoCart);
            
            if ($insertIntoCart){
                header("location: ../views/all_product.php"); 
            }else{
                echo "something went wrong"; 
            }
        } 
    }else{ 
        $isDuplicate = checkDuplicate_ctr($pid, $cid);
        if ($isDuplicate){
            ?>
            <script type="text/javascript">
            alert("Product is already in cart. Consider increasing quantity in your cart");
            window.location.href = "../views/all_product.php"; 
            </script>

            <?php
        }else{
            $insertIntoCart = insertProductIntoCart_ctr($pid, $ipadd, $cid, $qty);

            if ($insertIntoCart){
                header("location: ../views/all_product.php");
            }else{
                echo "something went wrong";
            }
         }   
    }
   
?>