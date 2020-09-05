<?php 
require("header.php");
require("footer.php");
require("menu.php");
page_Header();
page_Menu();
?>
<div id="prawy">
	<table class="table" id="tabela">
	<tr>
		<th>Lp.</th>
		<th>Imię</th>
		<th>Nazwisko</th>
		<th>Stanowisko</th>
		<th>Data zatrudnienia</th>
		<th>Ilość dni urlopowych</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Jan</td>
		<td>Kowalski</td>
		<td>Administrator</td>
		<td>01-01-2000</td>
		<td>12</td>
	</tr>
	<tr>
		<td>2</td>
		<td>Adam</td>
		<td>Nowak</td>
		<td>Stażysta</td>
		<td>10-08-2020</td>
		<td>2</td>
	</tr>
	<tr>
		<td>3</td>
		<td>Tomasz</td>
		<td>Gapiński</td>
		<td>Księgowy</td>
		<td>28-02-2010</td>
		<td>14</td>
	</tr>
	<tr>
		<td>4</td>
		<td>Anna</td>
		<td>Wielka</td>
		<td>Sprzedawca</td>
		<td>13-11-2008</td>
		<td>18</td>
	</tr>
	<tr>
		<td>5</td>
		<td>Justyna</td>
		<td>Sobota</td>
		<td>Sprzedawca</td>
		<td>06-07-2016</td>
		<td>9</td>
	</tr>
	</table>
	<input type="color" id="first" value="#00ffff" onchange="colorTable()">
	<input type="color" id="second" value="#ffff00" onchange="colorTable()">
</div>
<script src="script.js"></script>
<script>
	colorTable();
</script>
<?php
page_Footer();
?>