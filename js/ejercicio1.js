function validar() {
	var Producto = document.getElementById("producto").value;
	var Meses = document.getElementById("meses").value;
	var Monto = document.getElementById("monto").value;
	if (producto.length == 0 || producto == null) {
		alert("producto");
	}
	
	else if (meses.length == 0 || meses == null) {
		alert("meses");
	}
	else if (monto.length == 0 || monto == null) {
		alert("monto");
	}
	else {
		if (confirm("Estas seguro de enviar los datos?") == true) {
			document.getElementById("forma").submit();
		}
	}
}


function Letras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	if (letras.indexOf(tecla) == -1) {
		alert("Ingrese solo letras");
		return false;
	}
}

function ValidarNumeros() {
	if ((event.keyCode < 48) || (event.keyCode > 57)) {
		alert("Ingrese solo números");
		return false;
	}
}

function Validarfloat() {
	if ((event.keyCode < 48 || event.keyCode > 57)&& event.keyCode != 46) {
		alert("Ingrese solo números");
		return false;
	}
}

