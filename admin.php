<?php
@include 'config.php';
if(isset(@$_POST['add_product'])){
	$p_name = $_POST['p_name'];
	$p_price = $_POST['p_price'];
	$p_image = $_POST['p_image']['name'];
	$p_image_tmp_name = $_FILES['p_image']['tmp_name'];
	$p_image_folder = 'uploaded_img/'.$p_image;

	$insert_query = mysql_query($conn, "INSERT INTO 'products'(name,price,image) VALUES 
	('$p_name','$p_price', '$p_image')") or die('query failed');

	if($insert_query){
		move_uploaded_file($p_image_tmp_name, $p_image_folder);
		$message[] = 'product add succesfully';
	}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin page</title>

	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


	<!-- custom css file link -->
	<link rel="stylesheet" href="style.css">

</head>
<body>

<?php
 if(isset($message)){
 	foreach ($message as $message) {
 		echo '<div class="message"><span>'.message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = none'';"> </i></div>';
 	}
 };
?>


	<?php include 'header.php';?>



<div class="container">
	<section>
		<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
		<h3>add a new product</h3>
		<input type="text" name="p_name" placeholder="enter the product name" class="box" required>
		<input type="number" name="p_number" min="0" placeholder="enter the product number" class="box" required>
		<input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
		<input type="submit" name="add_product" value="add the product" class="btn">
		</form>
	</section>
</div>

<!-- custom js file link -->
<script src="script.js"></script>
</body>
</html>