<?php 
	require_once("config.php");
	date_default_timezone_set('Europe/Warsaw');
	$baza = mysqli_connect($serwer, $user, $haslo, $baza_danych);
	mysqli_query($baza, "SET NAMES 'utf8'");
	if(isSet($_POST['add']) || isSet($_POST['edit'])){
		$id = $_POST['id'];
		$nip = $_POST['nip'];
		$regon = $_POST['regon'];
		$nazwa = $_POST['nazwa'];
		if(isSet($_POST['vat'])){
			$vat = $_POST['vat'];
		}else{
			$vat = 0;
		}
		$ulica = $_POST['ulica'];
		$nr_domu = $_POST['nr_domu'];
		$nr_miesz = $_POST['nr_miesz'];
		if(isSet($_POST['add'])){
			$query = "insert into kontrahent values('$nip', $regon, '$nazwa', $vat, '$ulica', '$nr_domu', '$nr_miesz')";
		}else{
			$query = "update kontrahent set nip='$nip', regon=$regon, nazwa='$nazwa', platnik=$vat, ulica='$ulica', nr_domu='$nr_domu', nr_miesz='$nr_miesz' where nip = '$id'";
		}
		mysqli_query($baza, $query);
		header("Location: kontrahent.php");
	}else{
		header("Location: kontrahent.php");
	}
?>