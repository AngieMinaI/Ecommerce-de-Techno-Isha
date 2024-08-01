
var tipo = false;
function cambio() {
	if (tipo == false) {
		if (confirm("¿Esta seguro de cambiar a dolares?") == true) {
			for (var i = 0; i < 124; i++) {
				var nro, monto, conversion;
				nro = document.getElementById("celda" + i).innerHTML;
				monto = parseFloat(nro.substring(2));
				conversion = parseFloat(monto * 1.00) / 3.71;
				document.getElementById("celda" + i).innerHTML = "$" + conversion.toFixed(2);
			}
			tipo = true;
		}
	}
	else {
		if (confirm("¿Esta seguro de cambiar a soles?") == true) {
			document.location.reload(true);
		}
	}
}

