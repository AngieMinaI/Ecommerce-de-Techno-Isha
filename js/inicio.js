function validacion() {
	var correo = document.getElementById("correo").value;
	var nErrorArroba = correo.indexOf("@");
	var nErrorPunto = correo.indexOf(".");
	if (document.getElementById("check").checked == false) {
		alert("Debe marcar la casilla de Términos y condiciones.");
	}
	else if (nErrorArroba == -1 || nErrorPunto == -1) {
		alert("El correo debe tener un '@' y un '.'");
	}
	else {
		var enviar1 = confirm("¿Esta seguro de enviar estos datos?");
		if (enviar1 == true) {
			document.getElementById("validacion").submit();
		}
		else {
			alert("Se ha cancelado.");
		}
	}
}
function validacion2() {
	var enviar2 = confirm("Seguro que desea aceptar los terminos y condiciones?");
	if (enviar2 == false) {
		document.getElementById("check").checked = false;
		alert("Se ha cancelado.")
	}
}