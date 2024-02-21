<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thêm mới số sim điện thoại</title>
	<script type="text/javascript" src="<?php echo base_url() ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<h2 class="text-xs-center">Add phone number in the following form</h2>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="addData/insertData_controller" method="post" enctype="multidata/form-data">
					<div class="card">
						<div class="card-block">
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Number phone </label>
								<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Ex : 09090909">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Price</label>
								<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ex : 4500000">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput3">Type</label>
								<input name="loai" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Ex : Vinaphone, Viettel, Mobiphone">
							</fieldset>
							<input type="submit" class="btn btn-success btn-block" value="Import SQL">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


</body>
</html>