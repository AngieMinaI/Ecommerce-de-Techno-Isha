function calcEdad() {
    //extraer datos
    var fechaNac = document.getElementById("fechaNac").value;
    //edad
    var fechaA, anioA, mesA, diaA, anioN, mesN, diaN, edad, descE, descM, descT, precioF;
    fechaA = new Date();
    anioA = parseInt(fechaA.getFullYear());
    mesA = parseInt(fechaA.getMonth()) + 1;//se adiciona 1 porque muestra el index que comienza de 0
    diaA = parseInt(fechaA.getDate());
    anioN = parseInt(String(fechaNac).substring(0, 4))
    mesN = parseInt(String(fechaNac).substring(5, 7))
    diaN = parseInt(String(fechaNac).substring(8, 10))
    edad = anioA - anioN;
    if (mesA < mesN) {
        edad--;
    }
    else if (mesA == mesN) {
        if (diaA < diaN) {
            edad--;
        }
    }
    return edad;
}
function calcDesc() {
    if (validacionM() == true && validacionF() == true && validacionE() == true) {
        //extraer datos
        var monto = document.getElementById("txtMont").value;
        //condicion edad
        edad = calcEdad();
        if (edad <= 20) {
            descE = 5;
        }
        else if (edad <= 40) {
            descE = 10;
        }
        else if (edad <= 60) {
            descE = 15;
        }
        else {
            descE = 20;
        }
        //condicion monto
        if (monto <= 250) {
            descM = 0;
        }
        else if (monto <= 500) {
            descM = 50;
        }
        else if (monto <= 750) {
            descM = 75;
        }
        else if (monto <= 1000) {
            descM = 100;
        }
        else {
            descM = 250;
        }
        //calcular precio final
        var precioD1 = monto - descM;//precio luego del descuento 1
        var montoD2 = precioD1 * (descE / 100);//monto de descuento 2 en soles
        descT = descM + montoD2;
        precioF = monto - descT;
        //mostrar resultado
        console.log(valor = document.getElementById("fechaNac").value);
        document.getElementById("resultado").innerHTML = "Por su monto de compra de " + monto + " soles, se le aplica un descuento de " + descM + " soles." + "\n\n" +
            "Por su edad de " + edad + " años, le aplica un descuento de " + descE + "%." + "\n\n" +
            "Por lo tanto, en total obtiene " + descT + " soles de descuento." + "\n\n" +
            "El precio final es de " + precioF + " soles." + "\n\n" + "***SE LE APLICA ESTE DESCUENTO EN EL MOMENTO DE LA COMPRA***";
    }
};
function validacionM() {
    valor = document.getElementById("txtMont").value;
    if (valor == null || valor.length == 0) {
        alert("El monto no puede estar vacío.");
        return false;
    }
    else {
        return true;
    }
}
function validacionF() {
    valor = document.getElementById("fechaNac").value;
    if (valor == null || valor.length == 0) {
        alert("La fecha no puede estar vacío.");
        return false;
    }
    else {
        return true;
    }
}
function validacionE() {
    edad = calcEdad();
    if (edad < 0) {
        alert("La fecha no puede ser futuro.");
        return false;
    }
    else if (edad < 15) {
        alert("Debes tener como mínimo 15 años de edad.");
        return false;
    }
    else {
        return true;
    }

}