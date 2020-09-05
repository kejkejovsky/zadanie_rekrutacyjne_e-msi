<?php 
	require_once("config.php");
	date_default_timezone_set('Europe/Warsaw');
	$baza = mysqli_connect($serwer, $user, $haslo, $baza_danych);
	mysqli_query($baza, "SET NAMES 'utf8'");
	if(isSet($_POST['delete'])){
		$id = $_POST['id'];
		$query = "delete from kontrahent where nip='$id'";
		echo "tu";
		$zap = mysqli_query($baza, $query);
		header("Location: kontrahent.php");
	}else{
		header("Location: kontrahent.php");
	}
?>