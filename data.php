<?php
//laeme funktsiooni failis
	require_once("functions.php");
	
	//kontrollin, kas kasutaja on sisseloginud
	if(!isset($_SESSION["id_from_db"])){
		
	//suunan, kui ei ole sisse loginud
		header("Location: data.php");
			
	}

	
		if(isset($_GET["logout"])){
			
			session_destroy();
			header("Location: login.php");
		}

		
?>

<p>

	Tere, <?=$_SESSION["user_email"];?>
	<a href="?logout=1"> Logi välja</a>

</p>
