function validar() {
	var correo = document.getElementById("correo").value;
	var nError1 = correo.indexOf("@");
	var nError2 = correo.indexOf(".");
	var nombre = document.getElementById("nom").value;
	var apellido = document.getElementById("ape").value;
	var telefono = document.getElementById("fono").value;
	if (nombre.length == 0 || nombre == null) {
		alert("nombre");
	}
	else if (apellido.length == 0 || apellido == null) {
		alert("apellido");
	}
	else if (telefono.length == 0 || telefono == null) {
		alert("fono");
	}
	else if (nError1 == -1 || nError2 == -1) {
		alert("Introducir un correo valido");
	}

	else {
		if (confirm("Estas seguro de enviar los datos?") == true) {
			document.getElementById("forma").submit();
		}
	}
}


function soloLetras(e) {
	key = e.keyCode || e.which;
	tecla = String.fromCharCode(key).toLowerCase();
	letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
	if (letras.indexOf(tecla) == -1) {
		alert("Ingresar solo letras");
		return false;
	}
}

function ValidaSoloNumeros() {
	//Los dígitos del 0 al 9 están en el rango del 48 al 57 de los caracteres visibles del código ASCII
	if ((event.keyCode < 48) || (event.keyCode > 57)) {
		alert("Ingresar solo números");
		return false;
	}
}

