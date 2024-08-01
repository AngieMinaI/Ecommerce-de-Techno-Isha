

function mostrar() {
	var elemento = document.getElementById("botonsito");
	if (elemento.checked) {
		document.getElementById('menor').style.display = 'block';
	}
	else {

		document.getElementById('menor').style.display = 'none';
	}
}

function ConfirmDelete() {
	var respuesta = confirm("Se va a borrar lo escrito");
	if (respuesta == true) {
		return true;
	}
	else {
		return false;
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



window.onbeforeunload = preguntarAntesDeSalir();

function preguntarAntesDeSalir() {
	return "¿Seguro que quieres salir?";
}
function soloNumeros() {
	//Los dígitos del 0 al 9 están en el rango del 48 al 57 de los caracteres visibles del código ASCII
	if ((event.keyCode < 48) || (event.keyCode > 57)) {
		alert("Ingresar solo números");
		return false;
	}
}

function validar() {
	var nombre = document.getElementById("nombre").value;
	var apellido = document.getElementById("apellido").value;
	var tipoDoc = document.getElementById("tipoDoc").value;
	var dist = document.getElementById("dist").value;
	var nDoc = document.getElementById("dni").value;
	var direc = document.getElementById("direccion").value;
	var telefono = document.getElementById("fono").value;
	var correo = document.getElementById("correo").value;
	var nomApo = document.getElementById("nombreApo").value;
	var fonoApo = document.getElementById("fonoApo").value;
	var direcApo = document.getElementById("direcApo").value;
	var correoApo = document.getElementById("correoApo").value;
	var tipoB = document.getElementById("tipoB").value;
	var tipo = document.getElementById("tipo").value;
	var cod = document.getElementById("cod").value;
	var monto = document.getElementById("monto").value;
	var mensaje = document.getElementById("mensaje").value;
	var desc = document.getElementById("desc").value;
	var checkbox = document.getElementById("checkbox").checked;
	var nError1 = correo.indexOf("@");
	var nError2 = correo.indexOf(".");
	var nErrorApo1 = correoApo.indexOf("@");
	var nErrorApo2 = correoApo.indexOf(".");

	if (nombre.length == 0 || nombre == null) {
		alert("Ingrese su nombre.");
	}
	else if (apellido.length == 0 || apellido == null) {
		alert("Ingrese su apellido.");
	}
	else if (tipoDoc == "Seleccione") {
		alert("Seleccione el tipo de documento.");
	}
	else if (dist == "Seleccione") {
		alert("Seleccione su distrito.");
	}
	else if (nDoc.length == 0 || nDoc == null) {
		alert("Ingrese su número de documento.");
	}
	else if (direc.length == 0 || direc == null) {
		alert("Ingrese su dirección");
	}
	else if (telefono.length == 0 || telefono == null) {
		alert("Ingrese su número de teléfono.");
	}
	else if (nError1 == -1 || nError2 == -1) {
		alert("ingrese un correo electrónico válido.");
	}
	else if (document.getElementById("botonsito").checked == true) {
		if (nomApo.length == 0 || nomApo == null) {
			alert("Ingrese el nombre completo de su apoderado.");
		}
		else if (fonoApo.length == 0 || fonoApo == null) {
			alert("Ingrese el número de teléfono de su apoderado.");
		}
		else if (direcApo.length == 0 || direcApo == null) {
			alert("Ingrese la dirección de su apoderado.");
		}
		else if (nErrorApo1 == -1 || nErrorApo2 == -1) {
			alert("Introducir un correo electrónico de apoderado válido.");
		}
		else if (tipoB == "Seleccione") {
			alert("Seleccione el tipo de bien.");
		}
		else if (tipo == "Seleccione") {
			alert("Seleccione el tipo de proceso.");
		}
		else if (cod.length == 0 || cod == null) {
			alert("Ingrese el código de pedido.");
		}
		else if (monto.length == 0 || monto == null) {
			alert("Ingrese el monto.");
		}
		else if (mensaje.length == 0 || mensaje == null) {
			alert("Ingrese el mensaje.");
		}
		else if (desc.length == 0 || desc == null) {
			alert("Ingrese la descripción.");
		}
		else if (checkbox == false) {
			alert("Seleccione la casilla de Términos y Condiciones.");
		}
		else {
			if (confirm("Estas seguro de enviar los datos?") == true) {
				document.getElementById("formula").submit();
			}
		}
	}
	else if (tipoB == "Seleccione") {
		alert("Seleccione el tipo de bien.");
	}
	else if (tipo == "Seleccione") {
		alert("Seleccione el tipo de proceso.");
	}
	else if (cod.length == 0 || cod == null) {
		alert("Ingrese el código de pedido.");
	}
	else if (monto.length == 0 || monto == null) {
		alert("Ingrese el monto.");
	}
	else if (mensaje.length == 0 || mensaje == null) {
		alert("Ingrese el mensaje.");
	}
	else if (desc.length == 0 || desc == null) {
		alert("Ingrese la descripción.");
	}
	else if (checkbox == false) {
		alert("Seleccione la casilla de Términos y Condiciones.");
	}
	else {
		if (confirm("Estas seguro de enviar los datos?") == true) {
			document.getElementById("formula").submit();
		}
	}
}
