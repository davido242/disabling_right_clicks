<!DOCTYPE html>
<html>
<head>
	<?php echo view('includes/header')?>
</head>
<body>
	<!-- sub header session -->
	<?php echo view('sub_header')?>
	<!-- <button onclick="myNewGuy()">Submit</button> -->
	<div class="form-div-wrap">
		<h1>My Official Login Page in November</h1>
		<button type="submit">Click to Login</button>
		<button type="submit">Click to SignUp</button>
		<?php echo view('login')?>
		<h4>Forgot Password</h4>
		<h4>Or SignUp to get Login Details</h4>
	</div>
	



	<?php echo view('includes/footer')?>
</body>
</html>