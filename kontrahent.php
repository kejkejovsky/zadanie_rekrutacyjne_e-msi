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
?>
<table class="table table-hover">
	<tr>
		<th>NIP</th>
		<th>Regon</th>
		<th>Nazwa</th>
		<th>Czy płatnik VAT?</th>
		<th>Ulica</th>
		<th>Numer domu</th>
		<th>Numer mieszkania</th>
	</tr>
	<?php
	
	$query = "select * from kontrahent order by 1";
	$zap = mysqli_query($baza, $query);
	while($row = mysqli_fetch_array($zap)) 
	{
		?>
	<tr>
	<?php
	for($i=0; $i < 7; $i++){
		?>
		<td>
		<?php if($i == 3){
			if($row[$i] == 1){
				echo "Tak";
			}else{
				echo "Nie";
			}
		}else{
			echo $row[$i];
		}?>
		</td>
	<?php } ?>
		<td><form name="edycja" method="post" action="kontrahentForm.php"><input type="hidden" name="id" value=<?php echo $row[0]; ?>><input type="submit" name="edit" value="EDYTUJ" class="btn btn-warning"></form></td>
		<td><form name="usun" method="post" action="kontrahentDel.php"><input type="hidden" name="id" value=<?php echo $row[0]; ?>><input type="submit" name="delete" value="USUŃ" class="btn btn-danger"></form></td>
	</tr>
	<?php } ?>
	<tr>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td></td>
		<td><input type="button" value="DODAJ" onclick="location.href = 'kontrahentForm.php';" class="btn btn-info"></td>
		<td></td>
	</tr>
</table>
<?php 
mysqli_close($baza);
?>
</div>
<?php
page_Footer();
?>