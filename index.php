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
			echo "Hello, ".$_SESSION['imie'];
			echo '
			
			<form action="log_out.php" method="post">
			<input value="Log out" type="submit"/>
		   </form>';
			}
			
		else{
			echo '
		   <form action="log_in.php" method="post">
				User Login:
			<input class="logintextbox" type="text" name="user_login"/>
					Password:
			<input class="logintextbox" type="password" name="user_password"/>
					Login :
			<input class="loginclick" type="submit" value="Log in"/>
			</form> ';
			}
		 ?>
		   <?php 
	if(isset($_SESSION['zle_dane_logowania']))
	{ 
	echo $_SESSION['zle_dane_logowania']; //wyswietlenie ze niepoprawne dane
	unset($_SESSION['zle_dane_logowania']); //komenda zeby po odswiezeniu strony nie bylo informacji o zlych danych
	}
	?>
		</div>
	 </div>
		
	 <div id="content"><br/><br/>
	 Set in the 24th century and decades after the adventures of the original crew of the starship Enterprise, this new series is the long-awaited successor to the original Star Trek (1966). Under the command of Captain Jean-Luc Picard, the all new Enterprise NCC 1701-D travels out to distant planets to seek out new life and to boldly go where no one has gone before..<br/><br/>
	The Borg travel back in time intended on preventing Earth's first contact with an alien species. Captain Picard and his crew pursue them to ensure that Zefram Cochrane makes his maiden flight reaching warp speed.Set decades after Captain Kirk's five-year mission, a new generation of Starfleet officers set off in a new Enterprise on their own mission to go where no one has gone before.
	This is test of github. GITTTTTTTT
	<br/><br/>
		<div id="oferta">
		
			<div class="oferta_tile" style="margin-left:50px;"><img src="serwis.png"/><br/> Fast service</div>
			<div class="oferta_tile"><img src="sklep.png"/><br/>Orders</div>
			<div style="clear:both;"></div>
			<div class="oferta_tile"style="margin-left:50px"><img src="przeglady.png"/><br/>Other services</div>
			<div class="oferta_tile"><img src="doradztwo.png"/><br/>Helpful contact</div>
		</div>
	</div>
	<div id="footer">Spaw Trek &copy; 2016 </div>
	
</div>


</body>
</html>