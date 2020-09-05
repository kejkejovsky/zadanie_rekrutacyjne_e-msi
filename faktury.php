<?php 
require("header.php");
require("footer.php");
require("menu.php");
page_Header();
page_Menu();
?>
<div id="prawy">
	<table class="table table-hover" id="tabela">
	<tr>
		<th>Lp.</th>
		<th>Opis</th>
		<th>MPK</th>
		<th>Kwota Netto</th>
		<th>Ilość</th>
		<th>VAT</th>
		<th>Kwota Brutto</th>
		<th>Wartość Netto</th>
		<th>Wartość Brutto</th>
	</tr>
	<tr>
		<td>1</td>
		<td>Opis</td>
		<td>MPK</td>
		<td>1000</td>
		<td>12</td>
		<td>
			<select id="vat" onchange="calculate()" class="form-control">
			<option value="0" selected>0%</option>
			<option value="3">3%</option>
			<option value="8">8%</option>
			<option value="23">23%</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>2</td>
		<td>Opis</td>
		<td>MPK</td>
		<td>1001</td>
		<td>1</td>
		<td>
			<select id="vat" onchange="calculate()" class="form-control">
			<option value="0">0%</option>
			<option value="3">3%</option>
			<option value="8" selected>8%</option>
			<option value="23">23%</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>3</td>
		<td>Opis</td>
		<td>MPK</td>
		<td>299</td>
		<td>8</td>
		<td>
			<select id="vat" onchange="calculate()" class="form-control">
			<option value="0">0%</option>
			<option value="3" selected>3%</option>
			<option value="8">8%</option>
			<option value="23">23%</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>4</td>
		<td>Opis</td>
		<td>MPK</td>
		<td>8000</td>
		<td>15</td>
		<td>
			<select id="vat" onchange="calculate()" class="form-control">
			<option value="0">0%</option>
			<option value="3">3%</option>
			<option value="8">8%</option>
			<option value="23" selected>23%</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	<tr>
		<td>5</td>
		<td>Opis</td>
		<td>MPK</td>
		<td>20</td>
		<td>3</td>
		<td>
			<select id="vat" onchange="calculate()" class="form-control">
			<option value="0">0%</option>
			<option value="3">3%</option>
			<option value="8" selected>8%</option>
			<option value="23">23%</option>
			</select>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
	</table>
	<input type="button" value="Powyżej 1000,00 zł Netto" onclick="above1000()" class="btn btn-success">
</div>
<script src="script.js"></script>
<script>
	calculate();
</script>
<?php
page_Footer();
?>