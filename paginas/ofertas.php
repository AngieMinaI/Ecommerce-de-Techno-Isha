<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/ofertas.css">
	<title>Ofertas</title>
	<script src="../js/ofertas.js"></script>
</head>

<body>
 <?php

	include("../includes/header2.php");

?>
	<div class="titulo">
		<h1 class="Techno">Ofertas</h1>
	</div>

	<div class="tabla">
		<h2>Calculadora descuentos</h2>
		<form id="desc"><br>
			<div class="ofertaTabla">
				<div class="celda1">

					<label for="lblMont">Monto de compra</label><br>
					<input type="number" id="txtMont" placeholder="Costo total"><br>
				</div>
				<div class="celda1">
					<label for="lblFechaNac">Fecha de nacimiento</label><br>
					<input type="date" id="fechaNac" min="1900-01-01"><br>
				</div>
			</div>
			<input id="btnCalcEdad" type="button" onclick="calcDesc()" value="Calcular">
			<br><br>
			<label for="lblRes">Resultado</label><br><br>
			<textarea id="resultado"></textarea>
		</form><br>
	</div>

	<div class="tabla">
		<h2>Los mejores precios</h2>
		<section class="contenedor-novedad">
			<div class="item-novo">
				<div class="celda">
					<h3>LAPTOP LENOVO D330-10IGL, CELERON 4020 8GB 128GB SSD 10,1 W10</h3>
				</div>
				<div class="celda"><img class="noved" src="../images/productos/Portatiles/intel1.webp"></div>
				<div class="celda">
					<p><strike>S/1499.00</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/1099.00</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>AURICULAR JBL T115 BLACK</h3>
				</div>
				<br>
				<div class="celda"><img class="noved" src="../images/productos/Perifericos/aud4.webp"></div>
				<div class="celda">
					<p><strike>S/99.00</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/79.00</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>TECLADO ANTRYX CHROME STORM SK570</h3>
				</div>
				<br>
				<div class="celda"><img class="noved" src="../images/productos/ZonaGamer/tg4.webp"></div>
				<div class="celda">
					<p><strike>S/179.90</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/153.20</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>SUPRESOR DE PICO POWER RACK 8 ENTRADAS DE 1.50 METROS ENERGIT</h3>
				</div>
				<div class="celda"><img class="noved" src="../images/productos/Perifericos/ee2.jpg"></div>
				<div class="celda">
					<p><strike>S/110.00</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/80.00</p>
				</div>
			</div>
		</section>
		<br>
		<section class="contenedor-novedad">
			<div class="item-novo">
				<div class="celda">
					<h3>LAPTOP ASUS TUF FX506HC-HN002 CORE I5 11400H 8GB 512GB 15,6"FHD FREEDOS 4GB NVIDIA RTX3050</h3>
				</div>
				<div class="celda"><img class="noved" src="../images/productos/ZonaGamer/pg3.webp"></div>
				<div class="celda">
					<p><strike>S/6,099.00</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/5,299.00</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>KIT TECLADO Y MOUSE HALION GAMING MIRAGE HA - 810C</h3>
				</div>
				<br><br>
				<div class="celda"><img class="noved" src="../images/productos/Perifericos/kit1.webp"></div>
				<div class="celda">
					<p><strike>S/96.45</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/75.24</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>PLACA MADRE GIGABYTE A520M S2H</h3>
				</div>
				<br><br>
				<div class="celda"><img class="noved" src="../images/productos/PC-Componentes/pm3.webp"></div>
				<div class="celda">
					<p><strike>S/352.20</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/308.70</p>
				</div>
			</div>
			<div class="item-novo">
				<div class="celda">
					<h3>MOCHILA HP ACTIVE</h3>
				</div>
				<br><br><br>
				<div class="celda"><img class="noved" src="../images/productos/Accesorios/mochila1.webp"></div>
				<div class="celda">
					<p><strike>S/79.00</strike></p>
				</div>
				<div class="celda">
					<p class="precio">S/49.00</p>
				</div>
			</div>
		</section>
		<br>
	</div>
	<hr>
	<nav class="navegacion">
		<h3><a href="productos.php">Ver todos los productos</a></h3>
	</nav>
 <?php

include("../includes/footer2.php");
?>
</body>

</html>