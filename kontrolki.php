<?php 
require("header.php");
require("footer.php");
require("menu.php");
page_Header();
page_Menu();
?>
<div id="prawy">
	<p>
	<form>
	<label>NIP</label><br/><input type='text' name="nip" class="form-control"><br/>
	<label>Regon</label><br/><input type='number' name="regon" class="form-control"><br/>
	<label>Nazwa</label><br/><input type='text' name="nazwa" class="form-control"><br/>
	<label>Data powstania</label><br/><input type='date' name="data" class="form-control"><br/>
	<label>Ulica</label><br/><input type='text' name="ulica" class="form-control"><br/>
	<label>Numer domu</label><br/><input type='text' name="numer_d" class="form-control"><br/>
	<label>Numer mieszkania</label><br/><input type='text' name="numer_m" class="form-control"><br/>
	<label>Uwagi</label><br/><input type='textarea' name="uwagi" class="form-control"><br/>
	</form>
	</p>
	<select class="form-control">
	<?php 
	$kolory = ["zielony", "niebieski", "szary", "turkusowy", "granatowy", "czerwony", "biały"];
	foreach($kolory as $i){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	?>
	</select>
	<br/>
	<select class="form-control">
	<?php 
	$vat = ["ZW", "NP", "0%", "3%", "8%", "23%"];
	foreach($vat as $i){
		echo '<option value="'.$i.'">'.$i.'</option>';
	}
	?>
	</select>
	<br/>
	<ol>
		<li>Element</li>
		<li>Element</li>
		<li>Element</li>
	</ol>
</div>
<?php
page_Footer();
?>