<!DOCTYPE HTML> 
<html> 
	<head> 
		<title> 
			Disable right click on my web page 
		</title> 
	</head> 
	
	<body style = "text-align:center;"> 
		
		<h1 style = "color:green;" > 
			OnlineMD Enterprising Disabling Right Clicks on Web page!
		</h1> 
		
		<p id = "GFG_UP" style = "font-size: 16px; font-weight: bold;"> 
		</p> 
		
		<button onclick = "gfg_Run()"> 
			Disable 
		</button> 
		
		<p id = "GFG_DOWN" style = 
			"color:green; font-size: 20px; font-weight: bold;"> 
		</p> 
		
		<script> 
			// var el_up = document.getElementById("GFG_UP"); 
			// var el_down = document.getElementById("GFG_DOWN"); 
			// el_up.innerHTML = "Click on the button to disable right click"; 
			
			function gfg_Run() { 
				document.addEventListener('contextmenu', 
						event => event.preventDefault()); 
				// el_down.innerHTML = "Right click disabled"; 
			}		 
		</script> 
	</body> 
</html>					 
