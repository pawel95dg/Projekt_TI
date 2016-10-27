<?php 
	session_start();
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Welding machines service</title>
	<meta name="description" content="Silesian welding machines service. we can fix every machine You will deliver us." />
	<meta name="keywords" content="welding,wedling machine,plasma cutters,plasma,welding technologies" />
	<meta http-equiv="X-UA-Compatibile" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono:400,700&amp;subset=latin-ext" rel="stylesheet">
</head>
<body> 

<div id="container">
	
	 <div id="logo"><img width="1000px "src="headerr.png"/></div>
	 <div id="leftpanel">
	   <div id="sidebar"> 
		  <div class="nav"><a class="navlink" href="index.php">About us</a></div>
		  <div class="nav"><a class="navlink" href="service.php">Service</a></div>
		  <div class="nav"><a class="navlink" href="orders.php">Orders</a></div>
		  <div class="nav"><a class="navlink" href="contact.php">Contact</a></div>
	
		   <div style="clear:both;"></div>
		   </div>
		   <div style="clear:both;"></div>
		<div id="loginpanel">
		<?php
		if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true)){
			echo '<style>#loginpanel{height:60px;}</style> ';
			echo "Witaj, ".$_SESSION['imie'];
			echo '
			
			<form action="log_out.php" method="post">
			<input value="log out" type="submit"/>
		   </form>';
			
			}
			
		else{
			echo '
		   <form action="log_in.php" method="post">
				User Login:
			<input class="logintextbox" type="text" name="user_login"/>
					Password:
			<input class="logintextbox" type="text" name="user_password"/>
					Login :
			<input class="loginclick" type="submit" value="Log in"/>
			</form> ';
			}
		 ?>
		   <?php 
	if(isset($_SESSION['zle_dane_logowania'])) echo $_SESSION['zle_dane_logowania'];
	?>
		</div>
	 </div>
		
	 <div id="content"><br/><br/>
<span style="font-size:30px; font-weight:bold; margin-bottom:20px;">Contact</span><br/><br/>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1071.812674112392!2d18.678261955333486!3d50.287923439956955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeab62045ee48e692!2sPolitechnika+%C5%9Al%C4%85ska%3A+Wydzia%C5%82+Automatyki%2C+Elektroniki+i+Informatyki!5e0!3m2!1spl!2spl!4v1477320269638" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

	<br/><br/>
	</div>
	<div id="footer">Spaw Trek &copy; 2016 </div>
	
</div>


</body>
</html>