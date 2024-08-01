function calc() {

    var num = document.getElementById("txtIng").value;
    if (document.getElementById("Binario").checked) {
        if (valiB() == false && validacionF() == false) {
            var resul = parseInt(num, 2);
            document.getElementById("txtOutt").innerHTML = parseInt(resul);
        }
        else {
            alert("Binario. Ingrese sólo números 0 o 1.");
        }
    }
    else {
        if (valiO() == false && validacionF() == false) {
            var resul = parseInt(num, 8);
            document.getElementById("txtOutt").innerHTML = parseInt(resul);
        }
        else {
            alert("Octal. Ingrese sólo números de 0 a 7.");
        }
    }
}
function validacionF() {
    valor = document.getElementById("txtIng").value;
    if (valor == null || valor.length == 0) {
        alert("Debe ingresar un numero.");
        return true;
    }
    else {
        return false;
    }
}
function valiB() {
    var numero = document.getElementById("txtIng").value;
    valorError = numero.indexOf("2") + numero.indexOf("3") + numero.indexOf("4") + numero.indexOf("5") +
        numero.indexOf("6") + numero.indexOf("7") + numero.indexOf("8") + numero.indexOf("9");
    if (valorError > -8) {//-8 porque hay 8 numeros prohibidos
        return true;//hay error
    }
    else {
        return false;//no hay error
    }
}
function valiO() {
    var numero = document.getElementById("txtIng").value;
    valorError = numero.indexOf("8") + numero.indexOf("9");
    if (valorError > -2) {//-2 porque hay 8 numeros prohibidos
        return true;//hay error
    }
    else {
        return false;//no hay error
    }

}

