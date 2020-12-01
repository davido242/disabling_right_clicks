<title>Sign Up Page!</title>
<?php echo view('includes/header');?>
<?php echo view('sub_header')?>
<h2 class="cent cent2">Please Fill the Form to SignUp!</h2>
<div class="form-div-wrap form-div-wrap2">
	<h2>SignUp</h2>
	<form action="succ" method="GET">
		<div class="form-stuff">
			<label for="name">*First Name:</label>
			<input type="text" name="name" id="cur" placeholder="Enter First Name" required />
		</div>
		<div class="form-stuff">
			<label for="OtherName">Other Names:</label>
			<input type="text" name="OtherName" id="cur" placeholder="Enter Other Names" />
		</div>
		<div class="form-stuff">
			<label for="email">*Email Addr:</label>
			<input type="email" name="email" id="cur" placeholder="Enter Email: example@email.com" required />
		</div>
		<div class="form-stuff">
			<label for="phone">*Phone Number:</label>
			<input type="tel" name="phoneNumber" id="cur" placeholder="Enter Phone Number" required />
		</div>
		<div class="form-stuff">
			<label for="name">*Enter Password:</label>
			<input type="Password" name="Password" id="cur" required />
		</div>
		<div class="form-stuff">
			<label for="name">*Confirm Password:</label>
			<input type="Password" name="Password" id="cur" required />
		</div>
		<button type="submit">Submit</button>
	</form>
</div>
<?php echo view('includes/footer')?>