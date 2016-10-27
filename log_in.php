<?php 
	session_start();
	if((!isset($_POST['user_login'])) || (!isset($_POST['user_password'])))
	{
		header('Location: index.php');
		exit();
	}
	require_once "db_connect.php";
	
	$polaczenie =@new mysqli($host,$dbuser,$dbpassword,$dbname); // tworzymy polaczenie z baza danych
	
	if($polaczenie->connect_errno!=0)
	{ //jesli nie udalo sie polaczyc to :
		echo "Error:".$polaczenie->connect_errno; 
	}
	else
	{
		echo "Polaczono z baza danych...";
		$login=$_POST['user_login']; //przypisujemy login z inputa
		$haslo=$_POST['user_password']; // przypisujemy haslo z inputa
	
			$login = htmlentities($login, ENT_QUOTES, "UTF-8");
		$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
	
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user_log='%s' AND user_pass='%s'",
		mysqli_real_escape_string($polaczenie,$login),
		mysqli_real_escape_string($polaczenie,$haslo))))
		{ //udalo sie pobrac rekord
		echo "zapytanie sql bylo okej.";
		 $ilu_userow =$rezultat->num_rows; // do zmiennej ile_userow przypisujemy liczbe rekordow ktore zwrocilo zapytanie sql
			if($ilu_userow>0)
			{ // jezeli jest user , musi byc 1 , ale to itak wiecej niz 0
			 $_SESSION['zalogowany']=true;
			 $wiersz=$rezultat->fetch_assoc(); //przypisujemy do tabeli "wiersz" wyniki ale zamiast indeksow tabeli liczbowych mamy nazwy 
			 $_SESSION['imie']= $wiersz['imie']; //do zmiennej user zapisujemy z wyniku zapytania sql pole user
			 $_SESSION['nazwisko']= $wiersz['nazwisko']; 
			 unset($_SESSION['zle_dane_logowania']);
			 $rezultat->free_result(); //zamykamy rezultat, zwalniamy pamiec
			// header('Location: index.php');
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			}
			else
			{
			$_SESSION['zle_dane_logowania']='<span style="color:red; font-size:12px; font-weight:700;">Niepoprawny login lub hasło!</span>';
			header('Location:index.php');
			}
		}
		$polaczenie->close(); //zamykamy polaczenie z baza danych
	}
	


?>