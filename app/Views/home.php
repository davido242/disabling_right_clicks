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
		<div class="form-div form-dix">
			<h2>This is OnlineMD Official WebPage</h2>
			<h2>Earn Money while working from home</h2>
			<a href="log"><button>Click to Login</button></a>
			<a href="sign"><button>Click to SignUp</button></a>
			<?php// echo view('login')?>
			<h4>Forgot Password</h4>
			<a href="sign"><h4>Or SignUp to get Login Details</h4></a>
		</div>
	</div>
	



	<?php echo view('includes/footer')?>
</body>
</html>