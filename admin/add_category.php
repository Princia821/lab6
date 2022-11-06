<?php

require('../controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$categories = displayCategories_ctr(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<title>Categories</title>
</head>
<body>
		<?php

		// redirect if user is not admin 
		require_once('../settings/core.php');
		if(check_login()){
			if(check_permission()!=0){
				header('location: ../index.php');

			}
			else{
				echo'
					<div style="text-align:right">
					<a style="font-size: 1.5rem" href="../login/logout.php">Logout</a>
					</div>';
			}
		}
        ?>

	<h1>Categories</h1>

	<div class="container">

		<form id="form">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Category Name" name="catname" id="catname" required>
			</div>

			<div class="form-submit">
				<button type="button" name="addcat" onclick="insert()" id="addcat"> Add Category </button>
			</div>
		</form>
	</div>
	<br>
	<br>

	 <table class="table">
        <thead>
            <tr>
                <th>Category Name</th>
				<th></th>
				<th></th>
            </tr>
        </thead>

        <tbody>
			<?php
            if(!empty($categories)){
                foreach($categories as $x){
                    echo 
                    "
                    <tr>
                        <td>{$x['cat_name']}</td>
                        <td><a href='edit_category.php?id={$x['cat_id']}'>Edit</a></td>
                        <td><a href='../actions/category.php?deletecatID={$x['cat_id']}'>Delete</a></td>
                    </tr> 
                    ";
                }
            }
            else{
                echo 
                "
                <tr>
                <td>No Category Inserted Yet</td>
                
                 </tr>

                ";
            }
			
			?>

<script>
	function insert() {
				// send name to our server using AJAX
				 $.ajax({
					url: "../actions/category.php", 
					type:"POST",
					data:{
						'catname':document.getElementById("catname").value, 
						'addcat':document.getElementById("addcat").value
					},
					success: function(data){
						$("#catname").val('');
						alert(data)
					},
					error: function(error){
						alert(error)
					}
				});
			} 
</script>

        </tbody>
    </table>
	
</body>
</html>
