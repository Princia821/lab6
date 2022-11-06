<?php

require('../controllers/product_controller.php');
// return array of all rows, or false (if it failed)
$brand = select_one_brand_ctr($_GET['id']);
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Brand</title>
</head>
<body>
   
		<?php

		// redirect if user isn't admin
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

	<h1>Edit Brand</h1>

	<div class="container">

		<form method="post" action="../actions/brand.php">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="Brand Name" name="name" value="<?php echo $brand['brand_name'] ?>" required>
			</div>

            <input class="form-control" type="hidden" name="id" value="<?php echo $brand['brand_id'] ?>" >
            
			<input type="submit" name="editbrand">
		</form>
	</div>

</body>
</html>
