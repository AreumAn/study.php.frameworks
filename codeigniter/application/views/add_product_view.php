<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title><?php echo $title;?></title>
	<!-- load bootstrap css file -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen"> -->
</head>

<body>
	<div class="container">
		<h1>
			<center>Add New Product</center>
		</h1>
		<div class="col-md-6 offset-md-3">
			<form action="<?php echo site_url('product/save');?>" method="post">
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" class="form-control" name="product_name" placeholder="Product Name">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control" name="product_price" placeholder="Price">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>

	<!-- load jquery js file -->
	<!-- <script src="<?php //echo base_url('assets/js/jquery.min.js');?>"></script> -->
	<!-- load bootstrap js file -->
	<!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js');?>"></script> -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
	</script>
</body>

</html>
