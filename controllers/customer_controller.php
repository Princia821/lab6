<?php

require('../classes/customer_class.php');

function addCustomer_ctr($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role){
    // create an instance of the customer class
    $customer_instance = new customer_class();
    // call the method from the class
    return $customer_instance->addCustomer_cls($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role);

}

function deleteCustomer_ctr($id){
    // create an instance of the customer class
    $customer_instance = new customer_class();
    // call the method from the class
    return $customer_instance->delete_one_customer_cls($id);

}

function updateCustomer_ctr($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role){
    // create an instance of the customer class
    $customer_instance = new customer_class();
    // call the method from the class
    return $customer_instance->update_one_customer_cls($cust_name,$cust_email,$cust_password,$cust_country,$cust_city,$cust_contact,$role);

}

function select_all_customers_ctr(){
    // create an instance of the customer class
    $customer_instance = new customer_class();
    // call the method from the class
    return $customer_instance->select_all_customers_cls();

}

function select_one_customer_ctr($cust_email){
    // create an instance of the customer class
    $customer_instance = new customer_class();
    // call the method from the class
    return $customer_instance->select_one_customer_cls($cust_email);

}

?>
