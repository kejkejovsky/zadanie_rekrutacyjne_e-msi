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
	<th>Lp.</th>
		<th>Imię i nazwisko</th>
		<th>Data od</th>
		<th>Data do</th>
		<th>Miejsce wyjazdu</th>
		<th>Miejsce przyjazdu</th>
	</tr>
	<?php
	
	$query = "select * from bd order by 1";
	$zap = mysqli_query($baza, $query);
	while($row = mysqli_fetch_array($zap)) 
	{
		?>
		
	<tr>
	<?php
	
	for($i=0; $i < 6; $i++){
		
		?>
		<td><?php echo $row[$i];?> </td>
	<?php } ?>
	</tr>
	<?php } ?>
</table>
</div>
<?php
page_Footer();
?>