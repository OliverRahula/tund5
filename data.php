<?php
//laeme funktsiooni failis
	require_once("functions.php");
	
	//kontrollin, kas kasutaja on sisseloginud
	if(!isset($_SESSION["id_from_db"])){
		
	//suunan, kui ei ole sisse loginud
		header("Location: data.php");
			
	}



?> 