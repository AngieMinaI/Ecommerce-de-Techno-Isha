function signoZodiacal() {
    //extraer datos
    var fechaNac = document.getElementById("fechaNac").value;
    //edad
    var mesN, diaN, signo, desc;
    mesN = parseInt(String(fechaNac).substring(5, 7))
    diaN = parseInt(String(fechaNac).substring(8, 10))
    //signos
    if ((mesN == 3 && diaN > 21) || (mesN == 4 && diaN <= 19)) {
        signo = "Aries";
        desc = "Los Aries son personas llenas de energía y entusiasmo por la vida. Aventureros por naturaleza, les encantan los retos, la libertad y las nuevas ideas, por lo que nunca tienen miedo a los comienzos o nuevas etapas. Son líderes y prefieren dar órdenes a recibirlas.";
        document.getElementById("imagen").src = "images/signos/aries.jpg";
    }
    else if ((mesN == 4 && diaN >= 20) || (mesN == 5 && diaN <= 21)) {
        signo = "Tauro";
        desc = "Un Tauro es una persona que tiene una gran fuerza de voluntad, es práctico y decidido en la toma de decisiones. Suelen ser personas estables y conservadoras y no dudan en seguir a un líder si les despierta confianza. Son gente de paz, por lo que lo normal es que respeten las leyes y normas.";
        document.getElementById("imagen").src = "images/signos/tauro.jpg";
    }
    else if ((mesN == 5 && diaN >= 21) || (mesN == 6 && diaN <= 20)) {
        signo = "Géminis";
        desc = "Carácter doble, complejo y contradictorio es lo que mejor define a un Géminis. Al contrario que los Aries, los Géminis empiezan con entusiasmo nuevas aventuras, pero tienden a aburrirse rápido por la falta de constancia.";
        document.getElementById("imagen").src = "images/signos/geminis.jpg";
    }
    else if ((mesN == 6 && diaN >= 21) || (mesN == 7 && diaN <= 22)) {
        signo = "Cáncer";
        desc = "Los Cáncer son personas complicadas de clasificar, si se atiende a su carácter. Los hay tímidos y aburridos, pero también brillantes y famosos. De hecho, algunos presentan una alta capacidad literaria y artística, gracias a su capacidad imaginativa.";
        document.getElementById("imagen").src = "images/signos/cancer.jpg";
    }
    else if ((mesN == 7 && diaN >= 23) || (mesN == 8 && diaN <= 22)) {
        signo = "Leo";
        desc = "Es el signo más dominante del Zodiaco. Es creativo y extrovertido. Tienen ambición, fuerza, valentía y seguridad en sus capacidades. No temen a los obstáculos y suelen ser buenos, idealistas e inteligentes.";
        document.getElementById("imagen").src = "images/signos/leo.jpg";
    }
    else if ((mesN == 8 && diaN >= 23) || (mesN == 9 && diaN <= 22)) {
        signo = "Virgo";
        desc = "Único signo zodiacal representado por una mujer. Los Virgo son observadores, pacientes y les cuesta hacer amigos por su carácter frío que muestran a veces. A pesar de ello tienen encanto y suelen ayudar a los demás cuando se presenta un problema.";
        document.getElementById("imagen").src = "images/signos/virgo.jpg";
    }
    else if ((mesN == 9 && diaN >= 23) || (mesN == 10 && diaN <= 22)) {
        signo = "Libra";
        desc = "El signo del Zodiaco más civilizado. Tienen encanto, elegancia, buen gusto y son amables y pacíficos, por lo que no es raro que ante conflictos sean imparciales y muestren su rechazo a ellos. Valoran el esfuerzo de los demás y les gusta trabajar en equipo.";
        document.getElementById("imagen").src = "images/signos/libra.jpg";
    }
    else if ((mesN == 10 && diaN >= 23) || (mesN == 11 && diaN <= 21)) {
        signo = "Escorpio";
        desc = "Un Escorpio es una persona tranquila que parece alejada de la realidad, aunque nunca dejan de observar todo a su alrededor con el ojo crítico. Tienen mucha fuerza de voluntad y muestran tenacidad, pero también les afecta al estado de ánimo las circunstancias que les rodean.";
        document.getElementById("imagen").src = "images/signos/escorpio.jpg";
    }
    else if ((mesN == 11 && diaN >= 22) || (mesN == 12 && diaN <= 21)) {
        signo = "Sagitario";
        desc = "Sagitario es el signo más positivo de todo el Zodiaco. Cuando las cosas se ponen complicadas un Sagitario siempre sacará la mejor versión y se olvidará de la negatividad. Entre sus mejores características están las de ser buenos organizadores y abarcar nuevos proyectos y aprender cosas nuevas.";
        document.getElementById("imagen").src = "images/signos/sagitario.jpg";
    }
    else if ((mesN == 12 && diaN >= 22) || (mesN == 1 && diaN <= 19)) {
        signo = "Capricornio";
        desc = "Estabilidad, seguridad y tranquilidad es lo que mejor define a un Capricornio. Son personas justas y exigentes con los demás, porque también lo son con ellos mismos. Suelen perder el control de sus emociones, por lo que es fácil que sean pesimistas y melancólicos, pero siempre tratan de buscar ayuda.";
        document.getElementById("imagen").src = "images/signos/capricornio.jpg";
    }
    else if ((mesN == 1 && diaN >= 20) || (mesN == 2 && diaN <= 18)) {
        signo = "Acuario";
        desc = "Los Acuario tienen una personalidad fuerte y atractiva, pero hay dos tipos: los que son tímidos, sensibles y pacientes; y los que son exuberantes, vivos y frívolos. Eso sí, ambos son honestos y no dudarán en cambiar su opinión si estaban equivocados.";
        document.getElementById("imagen").src = "images/signos/acuario.jpg";
    }
    else if ((mesN == 2 && diaN >= 19) || (mesN == 3 && diaN <= 20)) {
        signo = "Piscis";
        desc = "Son tranquilos, amables y pacientes. Los Piscis son sensibles a los sentimientos de los demás y responden con simpatía al tacto y al sufrimiento. Son queridos por el resto de los signos, debido al carácter afable, cariñoso y amable.";
        document.getElementById("imagen").src = "images/signos/piscis.jpg";
    }
    document.getElementById("txtOut").innerHTML = "---------" + signo + "----------\n\n" + desc;
}

function calcular() {
    valor = document.getElementById("fechaNac").value;
    if (valor == null || valor.length == 0) {
        alert("La fecha no puede estar vacío.");
    }
    else {
        signoZodiacal();
    }
}