<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Xem dữ liệu</title>
	<!-- ket noi thu vien bootstrap va css  -->
	<script type="text/javascript" src="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">

</head>
<body>
	<?php require('header_sim.php') ?>
	<div class="container">		 
		<h1 class="text-xs-center"> Phone numbers and prices are available </h3>
			<hr>		 
		</div>

		<div class="container">
			<div class="row">

				<?php foreach ($dulieutucontroller as $key => $value): ?>


					<div class="col-sm-4">
						<div class="card card-block">
							<h3 class="card-title">Number phone: <?= $value['so'] ?></h3>
							<p class="card-text">Price : <?= $value['gia'] ?> VND </p>
							<p class="card-text">Type : <?= $value['loai'] ?> </p>
							<a href="showData/deleteData/<?=  $value['id'] ?>" class="btn btn-danger xoa"> <i class="fa fa-times"></i></a>
							<a href="showData/editSim/<?=  $value['id'] ?>" class="btn btn-warning xoa"> <i class="fa fa-pencil"></i></a>

						</div>
					</div>

				<?php endforeach ?>

			</div>
		</div>
		
	</body>
	</html>