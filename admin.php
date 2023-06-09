<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>admin page</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
	<section>
		<form action="" method="post" class="add-product-form" enctype="multipart/form-data">
		<h3>add a new priduct</h3>
		<input type="text" name="p_name" placeholder="enter the product name" class="box" required>
		<input type="number" name="p_number" min="0" placeholder="enter the product number" class="box" required>
		<input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
		</form>
	</section>
</div>

<!-- custom js file link -->
<script src="js/script.js"></script>
</body>
</html>