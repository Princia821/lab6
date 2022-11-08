<?php

//check if search button is clicked
if (isset($_GET['search'])){
    $term = $_GET['searchTerm'];
    if(!empty($term)){
        header("location: ../views/product_search_results.php?searchTerm=$term");
    }
}
?>
