<?php
//connect to database class
require_once("../classes/cart_class.php");

     
    // method to get the IP adress of the client
    function getRealIpAddr(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
        $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
        $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
        $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

   //method to insert into the cart
    function insertProductIntoCart_ctr($pid, $ipadd, $cid, $qty){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->insertProductIntoCart_cls($pid, $ipadd, $cid,$qty);
    }

    //for customers who haven't logged in.
    function insertProductIntoCartNull_ctr($pid, $ipadd, $qty){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->insertProductIntoCartNull_cls($pid, $ipadd, $qty);
    }

    //check for duplicate
    //logged in customers
    function checkDuplicate_ctr($pid, $cid){
        $cart_instance= new cart_class();
        return $cart_instance->checkDuplicate_cls($pid, $cid);
    }

    //not logged in customers
    function checkDuplicateNull_ctr($pid, $ipadd){
        $cart_instance= new cart_class();
        return $cart_instance->checkDuplicateNull_cls($pid, $ipadd);
    }
    
    //display cart
    //logged in customers
    function displayCart_ctr($cid){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->displayCart_cls($cid);
    } 

    //not logged in customers
    function displayCartNull_ctr($ipadd){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->displayCartNull_cls($ipadd);
    }

    //update cart
    //logged in customers
    function updateCart_ctr($cid, $pid, $qty){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->updateCart_cls($cid, $pid, $qty);
    }

    //not logged in customers
    function updateCartNull_ctr($ipadd, $pid, $qty){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->updateCartNull_cls($ipadd, $pid, $qty);
    }

    //delete from cart
    //logged in customers
    function deleteCart_ctr($cid,$pid){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->deleteCart_cls($cid,$pid);
    }

    //not logged in customers
    function deleteCartNull_ctr($ipadd, $pid){
        $cart_instance= new cart_class();
        //run the query
        return $cart_instance->deleteCartNull_cls($ipadd, $pid);
    }

    //get cart total
    //logged in customers 
    function cartValue_ctr($cid){
        $cart_instance= new cart_class();
        return $cart_instance->cartValue_cls($cid);
    }

    //not logged in customers
    function cartValueNull_ctr($ipadd){
        $cart_instance= new cart_class();
        return $cart_instance->cartValueNull_cls($ipadd);
    }

?>