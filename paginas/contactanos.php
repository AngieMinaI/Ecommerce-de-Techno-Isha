<!DOCTYPE html>
<html>

<head>
    <title>Contactanos</title>
    <link rel="stylesheet" href="../css/contactanos.css">
    <script type="text/javascript" src="../js/contactanos.js"></script>
</head>

<body>
 <?php

include("../includes/header2.php");

?>
    <h1>Contactanos</h1><br>
    <p id="texto1">En Techno-Isha simpre brindamos soporte de calidad por eso cuentanos de tus requerimientos y nos
        pondremos en contacto</p>
    <br>
    <div class="contenedor-color2">
        <h2>Aqui te daremos una lista de contactos a los que podras comunicarte</h2>
        <br>
        <center>
            <section>
                <div class="contenedor">
                    <div class="carta">
                        <div class="contenido">
                            <div class="imgBx">
                                <img src="../images/contactanos/personita.png" alt="">
                            </div>
                            <div class="contentBx">
                                <h4>Anna</h4>
                                <h5>WhastApp</h5>
                            </div>
                            <div class="sci">
                                <a
                                    href="https://api.whatsapp.com/send?phone=51902936780&text=Me%20gustaria%20contactarme%20contigo"><img
                                        id="wps" src="../images/inicio/wps.png"></a>

                            </div>
                        </div>
                    </div>
                    <div class="carta">
                        <div class="contenido">
                            <div class="imgBx">
                                <img src="../images/contactanos/personita.png" alt="">
                            </div>
                            <div class="contentBx">
                                <h4>Oscar</h4>
                                <h5>WhastApp</h5>
                            </div>
                            <div class="sci">
                                <a
                                    href="https://api.whatsapp.com/send?phone=51927520761&text=Me%20gustaria%20contactarme%20contigo"><img
                                        id="wps" src="../images/inicio/wps.png"></a>

                            </div>
                        </div>
                    </div>
                    <div class="carta">
                        <div class="contenido">
                            <div class="imgBx">
                                <img src="../images/contactanos/personita.png" alt="">
                            </div>
                            <div class="contentBx">
                                <h4>Betty</h4>
                                <h5>WhastApp</h5>
                            </div>
                            <div class="sci">
                                <a
                                    href="https://api.whatsapp.com/send?phone=51923346406&text=Me%20gustaria%20contactarme%20contigo"><img
                                        id="wps" src="../images/inicio/wps.png"></a>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
    </section>
    <section>
        <div class="contenedor-color2">
            <h2>Nuestros Locales</h2>
            <div class="contenedor">
                <div class="carta">
                    <div class="contenido">
                        <div class="contentBx">
                            <h4>San Miguel</h4>
                        </div>
                        <div class="mapa"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1283.3085316066301!2d-77.083010992476!3d-12.076820725155484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c970336b0725%3A0xae2a6f969b48786e!2sPlaza%20San%20Miguel!5e0!3m2!1ses-419!2spe!4v1650400955752!5m2!1ses-419!2spe"></iframe>
                        </div>
                    </div>
                </div>
                <div class="carta">
                    <div class="contenido">
                        <div class="contentBx">
                            <h4>Centro de Lima </h4>
                        </div>
                        <div class="mapa"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d243.86616751137018!2d-77.03586853556467!3d-12.053242909790972!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c7cc11e439%3A0x67b7384ba8fbe4f7!2sJir%C3%B3n%20de%20la%20Uni%C3%B3n%201068%2C%20Cercado%20de%20Lima%2015001!5e0!3m2!1ses-419!2spe!4v1650296059284!5m2!1ses-419!2spe"></iframe>
                        </div>

                    </div>
                </div>
                <div class="carta">
                    <div class="contenido">
                        <div class="contentBx">
                            <h4>San Juan de Miraflores</h4>
                        </div>
                        <div class="mapa"><iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9143.129045558875!2d-77.0091746743866!3d-12.17169850650279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b780f6f25671%3A0xda41dca11a707dd2!2sC.C.%20Plaza%20Lima%20Sur!5e0!3m2!1ses-419!2spe!4v1650401052728!5m2!1ses-419!2spe"></iframe>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="marco">
            <div class="efecto">
                <div class="contact-form">

                    <form action="" id="forma">
                        <h3>Contactanos</h3>
                        <div class="fila">
                            <div class="celda">
                                <p>
                                    <label>Nombres</label>
                                    <input type="text" onkeypress="return soloLetras(event)" id="nom" required=""
                                        name="nombre">
                                </p>
                            </div>
                            <div class="celda">
                                <p>
                                    <label>Apellidos</label>
                                    <input type="text" onkeypress="return soloLetras(event)" id="ape" required=""
                                        name="apellido">
                                </p>
                            </div>

                        </div>
                        <div class="fila">
                            <div class="celda">
                                <p>
                                    <label>Número telefonico</label>
                                    <input type="tel" onkeypress="return ValidaSoloNumeros()" id="fono" required=""
                                        name="telefono">
                                </p>
                            </div>
                            <div class="celda">
                                <p>
                                    <label>Correo electronico</label>
                                    <input type="email" id="correo" name="correo"
                                        onkeypress="return validacorreo(event)" required="">
                                </p>
                            </div>
                        </div>
                        <div class="fila">
                            <div class="celda">
                                <p>
                                    <label>Mensaje</label>
                                    <textarea name="mensaje" rows="1"></textarea>
                                </p>
                            </div>

                        </div>

                        <div class="fila">
                            <div class="celda">
                                <p>
                                    <label>¿Desearía recibir novedades sobre nuestros productos?</label>
                                <div class="celda"> </div>
                                </p>
                            </div>
                            <div class="celda">
                                <p>
                                    <input type="radio" name="conocer" value="" checked />Si
                            </div>
                            <div class="celda">
                                <p>
                                    <input type="radio" name="conocer">No
                            </div>
                        </div>
                        <div class="fila">
                            <div class="celda">
                                <p>
                                    Se aplican los
                                    <a href="TyC.php">Terminos y Condiciones</a>

                                </p>
                            </div>
                        </div>

                        <div class="fila">
                            <div class="celda">
                                <input type="button" id="prioridad3" value="Enviar" onclick="validar()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php

include("../includes/footer2.php");
?>


</body>

</html>