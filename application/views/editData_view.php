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
		<h3 class="text-xs-center"> Sửa số và giá tiền  </h3>
		<hr>		 
	</div>

	<div class="container">
		<div class="row">

			<?php foreach ($mangketqua as $key => $value): ?>

				<div class="container">
					<div class="row">
						<div class="col-sm-8 push-sm-2">
							<form action="../updateData" method="post" enctype="multidata/form-data">

								<div class="card">
									<div class="card-block">

										<input  name="id"    type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Ex : 09090909" value="<?= $value['id'] ?>">

										<fieldset class="form-group">
											<label for="formGroupExampleInput">Number phone </label>
											<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ex : 09090909" value="<?= $value['so'] ?>">
										</fieldset>
										<fieldset class="form-group">
											<label for="formGroupExampleInput2">Price</label>
											<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ex : 100$" value="<?= $value['gia'] ?>">
										</fieldset>
										<fieldset class="form-group">
											<label for="formGroupExampleInput3">Type</label>
											<input name="loai" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Ex : Vinaphone, Viettel, Mobiphone" value="<?= $value['loai'] ?>">
										</fieldset>
										<input type="submit" class="btn btn-success btn-block" value="Save">
									</div>
								</div>


							</form>
						</div>
					</div>
				</div>

			<?php endforeach ?>

		</div>
	</div>
	
</body>
</html>