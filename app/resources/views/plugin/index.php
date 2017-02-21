<!DOCTYPE html>
<html>
<head>
	<title>OOp Task</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="app/public/assets/css/style.css">
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
	<script type="text/javascript" src ="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form class="form-inline" action="index.php" method="POST"> 
				<div class="block">
					<div class="form-group">
						<input type="file" id="file" name="file_one">
					</div>
					<div class="form-group">
						<div class="col-md-5">
							<input type="radio" name="one_effect" value = "resize" class="block1_effect_1">Effect 1
							<input type="radio" name="one_effect" value = "unresize" class="block1_effect_2">Effect 2
							<input type="radio" name="one_effect" value = "convert" class="block1_effect_3">Effect 3
						</div>
					</div>
					<div class="form-group effects1">
						<div class="col-md-4 block1_effect_bar_1">
							<label for="radius">Radius:</label>
							<input type="range" name="radius_1" class ="radius">
							<label for="size">Size:</label>
							<input type="text" name="size_1" class="size">
						</div>
						<div style="display:none" class="col-md-4 block1_effect_bar_2">
							<label for="height_one">Height:</label>
							<input type="text" name="height_1" class="height">
							<label for="width_one">Width:</label>
							<input type="text" name="width_1" class="width">
						</div>
						<div style="display:none" class="col-md-4 block1_effect_bar_3">
							<label for="radius">Blur Effect:</label>
							<input type="text" name="blur_1" class="blur">
							<label for="height_one">Unresize Height:</label>
							<input type="text" name="unresize_height_1" class="unresize_height">
							<label for="width"> Unresize Width:</label>
							<input type="text" name="unresize_width_1" class="unresize_width">
						</div>
					</div>
					<input type="submit" value="Apply" class="btn btn-primary submit_button">
				</div>
				<div class="image_block_one">
				</div>
				<div class="block">
					<div class="form-group">
						<input type="file" id="file" name="file_two">
					</div>
					<div class="form-group">
						<div class="col-md-5">
							<input type="radio" name="two_effect" value = "resize" class="block2_effect_1">Effect 1
							<input type="radio" name="two_effect" value = "unresize" class="block2_effect_2">Effect 2
							<input type="radio" name="two_effect" value = "convert" class="block2_effect_3">Effect 3
						</div>
					</div>
					<div class="form-group effects2">
						<div class="col-md-4 block2_effect_bar_1">
							<label for="radius">Radius:</label>
							<input type="range" name="radius_2" class ="radius">
							<label for="size">Size:</label>
							<input type="text" name="size_2" class="size">
						</div>
						<div style="display:none" class="col-md-4 block2_effect_bar_2">
							<label for="height">Height:</label>
							<input type="text" name="height_2" class="height">
							<label for="width_one">Width:</label>
							<input type="text" name="width_2" class="width">
						</div>
						<div style="display:none" class="col-md-4 block2_effect_bar_3">
							<label for="radius">Blur Effect:</label>
							<input type="text" name="blur_2" class="blur">
							<label for="height_one">Unresize Height:</label>
							<input type="text" name="unresize_height_2" class="unresize_height">
							<label for="width"> Unresize Width:</label>
							<input type="text" name="unresize_width_2" class="unresize_width">
						</div>
					</div>
					<input type="submit" value="Apply" class="btn btn-primary submit_button">
				</div>
				<div class="image_block_two">
				</div>
				<div class="block">
					<div class="form-group">
						<input type="file" id="file" name="file_three">
					</div>
					<div class="form-group effects1">
						<div class="col-md-5">
							<input type="radio" name="three_effect" value = "resize" class="three_effect_1">Effect 1
							<input type="radio" name="three_effect" value = "unresize" class="three_effect_2">Effect 2
							<input type="radio" name="three_effect" value = "convert" class="three_effect_3">Effect 3
						</div>
					</div>
					<div class="form-group effects3">
						<div class="form-group">
							<div class="col-md-4 block3_effect_bar_1">
								<label for="radius">Radius:</label>
								<input type="range" name="radius_3" class ="radius">
								<label for="size">Size:</label>
								<input type="text" name="size_2" class="size">
							</div>
							<div style="display:none" class="col-md-4 block3_effect_bar_2">
								<label for="height_one">Height:</label>
								<input type="text" name="height_3" class="height">
								<label for="width_one">Width:</label>
								<input type="text" name="width_3" class="width">
							</div>
							<div style="display:none" class="col-md-4 block3_effect_bar_3">
								<label for="radius">Blur Effect:</label>
								<input type="text" name="blur_3" class="blur">
								<label for="height_one">Unresize Height:</label>
								<input type="text" name="unresize_height_3" class="unresize_height">
								<label for="width"> Unresize Width:</label>
								<input type="text" name="unresize_width_3" class="unresize_width">
							</div>
						</div>
					</div>
					<input type="submit" value="Apply" class="btn btn-primary submit_button">
				</div>
				<div class="image_block_three">
				</div>
				</div>
			</form>
		
	</div>
	<script type="text/javascript" src = "app/public/assets/js/main.js"></script>
	
</body>
</html>
