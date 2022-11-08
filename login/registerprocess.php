<?php

require('../controllers/customer_controller.php');

// check if theres a POST variable with the name 'register'
if(isset($_POST['register'])){
    // retrieve the deatils of the customer
    $cust_name  = $_POST['name'];
    $cust_email = $_POST['email'];
    $cust_password=password_hash($_POST["psw"], PASSWORD_DEFAULT);
    $c_password=password_hash($_POST["cpsw"], PASSWORD_DEFAULT);
    $cust_country = $_POST['country'];
    $cust_city = $_POST['city'];
    $cust_contact = $_POST['contact'];
    $role=0;


   if ($_POST['psw']===$_POST['cpsw']){

        $success = addCustomer_ctr($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role); 
    
        if($success===true){
            echo"<script>alert('User Registration Completed!')</script>";
            // header("Location: ../login/login.php");
            header("Location: ../views/all_product.php");
        }
        else{
            echo "<script>alert('regstration failed! ')</script>";
        }
} 
}

?>
