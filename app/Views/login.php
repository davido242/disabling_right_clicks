<?php echo view('includes/header')?>
<?php echo view('sub_header')?>
<div class="form-div">
	<h2>Login</h2>
	<form action="succ" method="GET">
		<div class="form-stuff">
			<input autocomplete="off" type="text" name="name" id="cur" required />
		</div>
		<div class="form-stuff">
			<input autocomplete="off" type="Password" name="password" id="cur" required />
		</div>
		<button>Submit</button>
	</form>
</div>	
<?php echo view('includes/footer')?>