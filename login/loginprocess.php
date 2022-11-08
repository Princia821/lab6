<?php
require('../settings/core.php');
require('../controllers/customer_controller.php');

if (isset($_POST['login'])) {
	$cust_email = $_POST['email'];
	$cust_password =$_POST['psw'];
    
    //select a customer with the given email
	$result = select_one_customer_ctr($cust_email);
    
	if (empty($result)) {
		$_SESSION['error'] = "Email Does not Exist!";
        $error_msg=$_SESSION['error'];
        echo ("<script>alert('$error_msg'); window.location.href = 'login.php';</script>");
		
	} else {
        if (password_verify($cust_password, $result['customer_pass'])){
            $_SESSION['user_id'] = $result['customer_id'];
            $_SESSION['user_role'] = $result['user_role'];
            if($_SESSION['user_role']==0 or $_SESSION['user_role']==1){
                header("Location: ../views/all_product.php"); 
            }
            else{
                header("Location: ../index.php");
            }
            
        }
        else{
            $_SESSION['error'] = 'Incorrect password!';
            $message = $_SESSION['error'];
            echo "<script>alert('$message');window.location.href = 'login.php';</script>";
        }

	}
}

else{
    $_SESSION['error'] = 'Input your credentials first';
    check_error();
}

?>