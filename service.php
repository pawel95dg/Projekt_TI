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
		
	 <div style="padding-top:0px;" id="content"><br/><br/>
																							<span style="font-size:30px; font-weight:bold; margin-bottom:20px;">Service</span><br/><br/>
		
		The process of fusion splicing normally involves using localized heat to melt or fuse the ends of two optical fibers together. The splicing process begins by preparing each fiber end for fusion.

		Stripping the fiber[edit]
		Stripping is the act of removing the protective polymer coating around optical fiber in preparation for fusion splicing. The splicing process begins by preparing both fiber ends for fusion, which requires that all protective coating is removed or stripped from the ends of each fiber.

		Fiber optical stripping is usually carried out by simply passing the fiber through a mechanical stripping device similar to a wire-stripper. Otherwise, a special stripping and preparation unit that uses hot sulphuric acid or a controlled flow of hot air is used to remove the coating. Under a process patented by Edward J Forrest, Jr (7,125,494) and assigned to Illinois Tool Works, Glenview, Illinois, there is a timed chemical removal process that does not require use of hot sulphuric acid or hot air. The process is patented as a "solvent capture method" primarily conceived to remove the "matrix" that holds individual fibers and creates a "ribbon fiber". This same procedure can be "timed" to remove not only matrix, but also coatings and claddings. Cleaning the stripping and cleaving tools is also important.

		Cleaning the fiber[edit]
		The customary means to clean bare fibers is with alcohol and wipes. However, high purity isopropyl alcohol (IPA) is hygroscopic: it attracts moisture to itself. This is problematic as IPA is either procured in pre-saturated wiper format or in (host) containers ranging for USA quart to gallon to drums. From the host container the IPA is transferred to smaller more usable containers. The hydroscopic nature of IPA is such that the highest quality at 99.9% is also the most hygroscopic. This means that moisture absorption into both the host container as well as the actual user's container begins with the time the original container is opened and continues as amounts are transferred and removed from both. A 2003 laboratory study by ITW Chemtronics noted that 99.9% IPA began to absorb moisture (at 72F and 65% Relative Humidity) within fifteen minutes. Since there is no provision to deter this, this unique quality of IPA makes it less desirable than chemicals such as HFE-7100 based products or precision hydrocarbons. There is work being done to qualify aqueous based cleaners for this application.

		Cleaving the fiber[edit]
		The fiber is then cleaved using the score-and-break method so that its end-face is perfectly flat and perpendicular to the axis of the fiber. The quality of each fiber end is inspected using a microscope. In fusion splicing, splice loss is a direct function of the angles and quality of the two fiber-end faces. The closer to 90 degrees the cleave angle is the lower optical loss the splice will yield. The quality of the cleave tool you are using is critical.

		Splicing the fibers[edit]

		Fiber spliced, still unprotected
		Current fusion splicers are either core or cladding alignment. Using one of these methods the two cleaved fibers are automatically aligned by the fusion splicer[1] in the x,y,z plane, then are fused together. Prior removing the spliced fiber from the fusion splicer, a proof-test performed to ensure that the splice is strong enough to survive handling, packaging and extended use. The bare fiber area is protected either by recoating or with a splice protector. A splice protector is a heat shrinkable tube with a strength membrane.
	

	<br/><br/>
	</div>
	<div id="footer">Spaw Trek &copy; 2016 </div>
	
</div>


</body>
</html>