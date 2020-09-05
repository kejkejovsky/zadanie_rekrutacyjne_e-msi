function colorTable(){
	var table = document.getElementById("tabela");
	var rows = table.getElementsByTagName("tr");
	var first = document.getElementById("first").value;
	var second = document.getElementById("second").value;
	for(var i=0; i<rows.length; i++){
		if(i%2==0){
			rows[i].style.backgroundColor = first;
		}else{
			rows[i].style.backgroundColor = second;
		}
	}
}

function above1000(){
	var table = document.getElementById("tabela");
	var rows = table.getElementsByTagName("tr");
	for(var i=0; i<rows.length; i++){
		if(parseFloat(rows[i].cells[3].innerHTML) > 1000)
			rows[i].style.backgroundColor = "#5CB85C";
	}
}

function calculate(){
	var table = document.getElementById("tabela");
	var rows = table.getElementsByTagName("tr");
	for(var i=1; i<rows.length; i++){
		var netto = parseFloat(rows[i].cells[3].innerHTML);
		var ilosc = parseFloat(rows[i].cells[4].innerHTML);
		var vat = parseFloat(rows[i].cells[5].childNodes[1].value);
		var brutto = netto + netto * vat / 100;
		rows[i].cells[6].innerHTML = brutto.toFixed(2);
		rows[i].cells[7].innerHTML = (netto * ilosc).toFixed(2);
		rows[i].cells[8].innerHTML = (brutto * ilosc).toFixed(2);
	}
}

