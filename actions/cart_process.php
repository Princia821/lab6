<?php
require("../controllers/cart_controller.php");

session_start();
// deleting an  item from the cart
if(isset($_GET['deleteid'])){

    $pid = $_GET['deleteid'];
    $ipadd = getRealIpAddr();
    if(isset($_SESSION['user_id'])){
       $cid = $_SESSION['user_id'];
        $delete = deleteCart_ctr($cid,$pid);
        if($delete){
            header("location: ../views/cart.php");
        }else{
            echo "something went wrong";
        }

    }else{
       $delete = deleteCartNull_ctr($ipadd,$pid);
        if($delete){
            header("location: ../views/cart.php");
        }else{
            echo "something went wrong";
        }
    }

}else{
    header("location:../views/all_product.php");
}

?> 