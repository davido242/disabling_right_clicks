<?php echo view('includes/header')?>
<?php echo view('sub_header')?>
<div class="form-div">
	<h2>Login</h2>
	<form action="#" method="GET">
		<div class="form-stuff">
			<label for="name">Name:</label>
			<input type="text" name="name" id="cur" required />
		</div>
		<div class="form-stuff">
			<label for="name">Password:</label>
			<input type="Password" name="Password" id="cur" required />
		</div>
		<button>Submit</button>
	</form>
</div>	
<?php echo view('includes/footer')?>