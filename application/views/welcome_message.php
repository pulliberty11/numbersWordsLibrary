<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
</head>
<body>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<em>Assuming Whole numbers, Exact words like the output of word to number and Maximum of billion. (Can add more)</em>
					
					<form action="" method="POST">
						<label>Number To Word</label>
						<input type="text" value="<?php echo $wordVal ?>" class="form-control" maxlength="12" name="numbers" placeholder="Input a Number">
						<br>
						<center><input type="submit" name="number" value="Submit" class="btn btn-primary"></center>
						<h3><?php echo $words ?></h3>
						<hr>
						<label>Word to Number</label>
						<input type="text" value="<?php echo $numVal ?>" class="form-control" name="words" placeholder="Input a Number"><br>
						<input type="checkbox" <?php echo $checked ?> name="isComma" value="1"><label>Add Comma</label>
						<center><input type="submit" name="word" value="Submit" class="btn btn-primary"></center>
						<h3><?php echo $number ?></h3>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>