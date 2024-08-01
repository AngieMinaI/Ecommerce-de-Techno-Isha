function Triangulo() {
	var n = 0;
	let car, ta;
	car = document.ejer.cha.value;
	ta = document.ejer.tama.value;
	for (var i = (2 * ta - 1); i >= 1; i -= 2) {

		for (var j = 0; j < n; j++) {

			document.getElementById("txtResul").innerHTML = document.getElementById("txtResul").innerHTML + '&nbsp&nbsp';
		}

		for (var k = 1; k <= i; k++) {

			document.getElementById("txtResul").innerHTML = document.getElementById("txtResul").innerHTML + " " + car;

		}
		document.getElementById("txtResul").innerHTML = document.getElementById("txtResul").innerHTML + "\n";
		n++;
	}
}
function valData() {
	document.getElementById("txtResul").innerHTML = "";
	let car, ta;
	car = document.ejer.cha.value;
	ta = document.ejer.tama.value;

	if (car == "") {
		alert("El caracter es obligatorio");
		return 0;

	}
	if (ta == "") {
		alert("El tamaño es obligatorio");
		return 0;
	}
	else if (isNaN(ta)) {
		alert("El tamaño debe ser numérico");
		return 0;

	}
	Triangulo();
}

