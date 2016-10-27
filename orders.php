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
		
		<?php
		if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true)){
			echo '<div id="loginpanel">';
			echo '<style>#loginpanel{height:60px;}</style> ';
			echo "Hello, ".$_SESSION['imie'];
			echo '
			<form action="log_out.php" method="post">
			<input value="Log out" type="submit"/>
		   </form>';
			
		}
		
		 ?>
	
		</div>
	 </div>
		
	 <div id="content"><br/><br/>
	 
	 <?php
		if(isset($_SESSION['zalogowany'])&&($_SESSION['zalogowany']==true)){
			echo "Witaj, ".$_SESSION['imie'];
			echo '<br/>
			<span style="font-size:30px; font-weight:bold;">Orders:</span><br/><br/>
		<div id="active_orders">
		
		</div>
	<span style="font-size:30px; font-weight:bold;">Finished Orders:</span><br/><br/>';
			
			}
			
		else{
			echo 'log in first! <br/><br/><br/><br/>';
			echo '
		   <form action="log_in.php" method="post"><span style="font-size:20px;">
				User Name:<br/>
			<input class="logintextbox" type="text" name="user_login"/><br/>
					Password:<br/>
			<input class="logintextbox" type="password" name="user_password"/><br/>
					Login :
			<input class="loginclick" type="submit" value="Log in"/></span>
			</form> ';

				if(isset($_SESSION['zle_dane_logowania']))
				{ 
				echo $_SESSION['zle_dane_logowania']; //wyswietlenie ze niepoprawne dane
				unset($_SESSION['zle_dane_logowania']); //komenda zeby po odswiezeniu strony nie bylo informacji o zlych danych
				}
			}
		 ?>
	<br/><br/>
	</div>
	<div id="footer">Spaw Trek &copy; 2016 </div>
	
</div>
</body>
</html>