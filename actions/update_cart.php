<?php
// updating an item from the cart
session_start();
require("../controllers/cart_controller.php");
$pid = $_GET['updateid'];
$qty = $_GET['qty'];
$ipadd=getRealIpAddr();


if (isset($_SESSION['user_id'])){
    $cid = $_SESSION['user_id'];
    $updateCart = updateCart_ctr($cid, $pid, $qty);
    if($updateCart){
        header("location: ../views/cart.php");
    }else{
        echo "something went wrong";
    }
    
}else{
    $ipadd = getRealIpAddr();
    $updateCart = updateCartNull_ctr($ipadd, $pid, $qty);
    var_dump($updateCart);
    if($updateCart){
        header("location: ../views/cart.php");
    }else{
        echo "something went wrong";
    }
}
?>