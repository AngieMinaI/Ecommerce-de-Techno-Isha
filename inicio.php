<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/incio.css">
	<script type="text/javascript" src="js/inicio.js"></script>
</head>

<body>

<?php
		include("includes/header.php");
    	session_start();
    	if(isset($_SESSION['user'])){
			echo '<div class="contenedor-novedad">';
			echo '<div class="item-novo">';
        	echo "<h1>Bienvenido: ".$_SESSION['user']."</h1>";
        	echo '<div class="asd"> <a href="llamadas/procesoUserCerrar.php" >Cerrar sesion</a></div>';
			echo '</div>';
			echo '</div>';
        }
    ?>
	
	
	
	<div>
		<h1 class="Techno">Techno Isha</h1>
	</div>
	<div><img class="noved" src="images/inicio/mejor.png"></div>
	<div class="tabla">
		<H2 class="oferta">LO MAS NUEVO DEL MERCADO</H2>
		<div class="contenedor-novedad">

			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/ZonaGamer/pg4.webp"></a>
				<P>LAPTOP ASUS GA401II-HE003T AMD RYZEN 7 4800HS 512GB 16GB 14,1"FHD WINDOWS 10 4GB NVIDIA GTX1650TI
				</P>
				<p class="precio">S/5,999.00</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img id="ima" src="images/productos/Monitores/mong3.jpg"></a>
				<p>Monitor Gaming ASUS ROG Strix XG27AQ 27″ WQHD 1ms/170Hz/G-sync Compatible</p>
				<p class="precio">S/2,646.00</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/PC-Componentes/alm3.webp"></a>
				<P>SSD WESTERN DIGITAL WD GREEN 480 M.2</P>
				<p class="precio">S/345.07</p>
			</div>
		</div>
		<br>
	</div>

	<div class="tabla">
		<div>
			<h2 class="oferta">LO MAS VENDIDO</h2>
		</div>
		<div class="contenedor-novedad">
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/Perifericos/kit3.webp"></a>
				<P>COMBO 2 EN 1 REDRAGON K503-RGB-SP M601 S101-3-SP</P>
				<p class="precio">S/210.00</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/Accesorios/webcam2.webp"></a>
				<p>WEB CAM CYBERTEL DVINCI CYB WC1000</p>
				<p class="precio">S/59.00</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/PC-Componentes/mem2.webp"></a>
				<P>MEMORIA RAM CORSAIR CORSAIR 8GB 2666 DDR4 VENGEANCE LPX</P>
				<p class="precio">S/269.19</p>
			</div>
		</div>
		<br>
	</div>

	<div class="tabla">
		<div>
			<H2 class="oferta">TARJETAS GRAFICAS</H2>
		</div>

		<div class="contenedor-novedad">
			<div class="item-novo">
				<a href="paginas/productos.php"><img id="ima2" src="images/productos/PC-Componentes/tv4.jpg"></a>
				<p>Tarjeta Grafica ZOTAC Gaming GeForce RTX™ 3090 Ti AMP Extreme Holo 24GB GDDR6X</p>
				<p class="precio">S/9,510.90</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/PC-Componentes/tv3.jpg"></a>
				<p>Tarjeta Grafica MSI AMD Radeon RX 6800 XT GAMING X TRIO 16GB GDDR6</p>
				<p class="precio">S/6,860.10</p>
			</div>
			<div class="item-novo">
				<a href="paginas/productos.php"><img class="noved" src="images/productos/PC-Componentes/tv2.jpg"></a>
				<P>Tarjeta Grafica ASUS Dual NVIDIA GeForce RTX 2060 OC EVO 6GB GDDR6 (DUAL-RTX2060-O6G-EVO)</P>
				<p class="precio">S/2,438.40</p>
			</div>
		</div>
		<br>
	</div>
	<div class="tabla">
		<br>
		<div class="contenedor-novedad">
			<div class="item-novo">
				<h1>Mision</h1>
				<p class="present">Ofrecer a nuestros clientes productos de buena calidad, a precios cómodos que
					cumplan con las necesidades y exigencias que el cliente solicita, abarcando sus gustos . Así
					como también brindarles soporte técnico</p>
			</div>
			<div class="item-novo">
				<h1>Vision</h1>
				<p class="present">Nuestra mision es ser una empresa líder y reconocida en la venta de piezas de
					computadoras, lograr también extendernos y crear nuestras cadena de perifericos, proporcionando
					cada día más un servicio de excelencia a nuestros clientes y que al mismo tiempo nos permitan
					competir en el mercado nacional con los mejores precios del mercado.</p>
			</div>
			<div class="item-novo">
				<h1>Objetivo</h1>
				<p class="present">Ofrecer un servicio calidad que satisfaga las necesidades y gustos del mercado
					potencial, vender piezas de última generacion que cumpla con los requerimientos de estilo en el
					segmento del mercado</p>
			</div>
		</div>
		<br>
	</div>


	<div class="tabla">
		<div>
			<h2 class="oferta">NUESTRAS VENTAJAS</h2>
		</div>
		<div class="contenedor-novedad">
			<div class="celda">
				<div class="item-novo">
					<h3>GARANTÍA</h3>
					<p>Todos Nuestro Productos Cuentan con Garantía de Marca, Nuevos y Origínales, Respaldadas por
						Las
						Mejores Marcas del Mercado Tecnológico.</p>
				</div>
				<br>
				<div class="item-novo">
					<h3>TE AYUDAMOS A COMPRAR</h3>
					<p>¿No Tienes Idea de Cómo Adquirir el Producto que Deseas? Te Facilitamos Asesoría Inmediata.
					</p>
				</div>
			</div>
			<div class="celda">
				<div class="item-novo">
					<h3>PRECIOS INSUPERABLES</h3>
					<p>En Grupo Techno-Isha Ud. Siempre Encontra Los Mejores Precios, Ofertas, Promociones , Regalos
						y
						Sorteos. Todos los peruanos Merecemos el Mejor Producto al Mejor Precio.</p>
				</div>
				<br>
				<div class="item-novo">
					<h3>NUESTRAS TIENDAS</h3>
					<p>Cada Vez Techno-Isha Se Expande Más y Cada Dia Estamos Mas Cerca de ti</p>
				</div>
			</div>
			<div class="celda">
				<div class="item-novo">
					<h3>MEJOR ATENCIÓN</h3>
					<p>Contamos Con Los Mejores Empleados Quienes Estan Capacitados , Motivados para Ofrecerle
						La Mejor
						Atención que Ud. se Merece. "Cuida de tus Empleados que ellos cuidaran de tus Clientes".
					</p>
				</div>
				<br>
				<div class="item-novo">
					<h3>DISPONIBILIDAD 24/7</h3>
					<p>Recibimos todos tus pedidos a nivel nacional a solo un click </p>
				</div>
			</div>
		</div>
		<br>
	</div>
	<div class="tabla">
		<br>
		<div class="contenedor-novedad">
			<form class="formulario" id="validacion">
				<div>
					<label>Suscríbete al boletín para recibir ofertas y descuentos exclusivos</label>
					<input type="email" id="correo" name="correo" placeholder="ejem@ejem.com" required>
					<input type="button" onclick="validacion()" name="SUSCRIBIRME" id="btnSus" value="SUSCRIBIRME">
					<br><br>
					<div>
						<input type="checkbox" id="check" onclick="validacion2()" name="condicion" alt="check" required>
						<label>Acepto la política de privacidad así como recibir correos electrónicos que contengan
							noticias, lanzamiento y ofertas. Podrás darle de baja en cualquier momento.</label>
					</div>
			</form>
		</div>
		<br>
	</div>
 <?php

include("includes/footer.php");
?>
</body>

</html>