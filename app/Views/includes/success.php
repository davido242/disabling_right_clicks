<style type="text/css">
	body{
		text-align: center;
	}
</style>
<title>Success Page!</title>
<?php 
	$userName = $_GET['name'];
	// $passWord = $_GET['password']
?>

<?php echo view('includes/header');?>
<?php echo view('sub_header');?>
<?php 
	echo "<h1>$userName successfully Logged in!!</h1>";
	echo date('@ 10a');

?>