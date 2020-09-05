<?php 
require("header.php");
require("footer.php");
require("menu.php");
page_Header();
page_Menu();
?>
<div id="prawy">
<?php 
require_once("config.php");
date_default_timezone_set('Europe/Warsaw');
$baza = mysqli_connect($serwer, $user, $haslo, $baza_danych);
mysqli_query($baza, "SET NAMES 'utf8'");
$id = "";
$nip = "";
$regon = "";
$nazwa = "";
$vat = "";
$ulica = "";
$nr_domu = "";
$nr_miesz = "";
$name = "add";
$value = "DODAJ";
if(isSet($_POST['edit'])){
	$id = $_POST['id'];
	$name = "edit";
	$value = "ZAPISZ ZMIANY";
	$query = "select * from kontrahent where nip='$id'";
	$zap = mysqli_query($baza, $query);
	$row = mysqli_fetch_array($zap);
	$nip = $row[0];
	$regon = $row[1];
	$nazwa = $row[2];
	if($row[3] == 1){
		$vat = "checked";
	} 
	$ulica = $row[4];
	$nr_domu = $row[5];
	$nr_miesz = $row[6];
}
?>
	<p>
	<form method="POST" action="kontrahentAddEdit.php">
	<label>NIP</label><br/><input type='text' name="nip" class="form-control" required value=<?php echo $nip; ?>><br/>
	<label>Regon</label><br/><input type='number' name="regon" class="form-control" value=<?php echo $regon; ?>><br/>
	<label>Nazwa</label><br/><input type='text' name="nazwa" class="form-control" value=<?php echo $nazwa; ?>><br/>
	<label class="form-check-label">Czy płatnik VAT? <input type='checkbox' name="vat" class="form-check-input" value="1" <?php echo $vat; ?>></label><br/>
	<label>Ulica</label><br/><input type='text' name="ulica"  class="form-control" value=<?php echo $ulica; ?>><br/>
	<label>Numer domu</label><br/><input type='text' name="nr_domu" class="form-control" value=<?php echo $nr_domu; ?>><br/>
	<label>Numer mieszkania</label><br/><input type='text' name="nr_miesz" class="form-control" value=<?php echo $nr_miesz; ?>><br/><br/>
	<input type="hidden" name="id" value=<?php echo $id; ?>>
	<input type="submit" name=<?php echo $name; ?> value=<?php echo $value; ?> class="btn btn-info">
	</form>
	</p>
</div>
<?php
page_Footer();
?>