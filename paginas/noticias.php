<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1">
	<title>Noticias</title>
	<link rel="stylesheet" type="text/css" href="../css/noticias.css">
</head>

<body class="cuerpo">
 <?php

	include("../includes/header2.php");

?>
	<h1 class="formato">Noticias</h1>
	<div class="tabla_not">
		<h2>Novedades de la empresa</h2>
		<div class="tabla">
			<section id="rtx">
				<h4>Página 1</h4>
				<div class="fila">
					<div class="celda">
						<h3>¡Iniciamos las ventas de la RTX 3090 Ti!</h3>
						<p class="p">La nueva y poderosa tarjeta gráfica RTX 3090 Ti está aquí. Muchos usuarios
							estuvieron buscando este producto, por lo que hemos decidido comenzar con su venta. Acerca
							de su precio y detalles, puede encontrarlo en la sección Productos de la página.</p>
					</div>
					<div class="celda"><img class="item-not" src="../images\novedades\rtx3090ti.jpg" alt="Foto gtx 3090 Ti"
							wide="450" height="270"></div>
				</div>
				<div class="fila">
					<div class="celda"><img class="item-not" src="../images\novedades\plazaSM.jpg"
							alt="Foto plaza San Miguel" wide="450" height="270"></div>
					<div class="celda">
						<h3 class="derecha">Inauguramos nuevo local en San Miguel</h3>
						<p class="p">Ahora pueden visitarnos en nuestra tienda física en San Miguel, dentro del plaza
							San Miguel - piso 2. En cualquiera de nuestros establecimientos, podrá obtener servicios y
							atención especializada. ¿Qué esperas? ¡Ven a nuestra tienda y disfruta de los mejores
							productos y servicios que tenemos para tí!</p>
					</div>
				</div>
				<div class="fila">
					<div class="celda">
						<h3>El día de hoy, dimos servicio técnico a la empresa Omega</h3>
						<p class="p">Hoy tuvimos la gran oportunidad de brindar nuestro servicio especializado a la gran
							empresa Omega. Hemos implementado sistemas de última generación para una mayor
							productividad, a su vez de darle mantenimiento a diferentes recursos tecnológicos que la
							empresa posee. ¡Gracias por confiar en nosotros!</p>
					</div>
					<div class="celda"><img class="item-not" src="../images\novedades\empresaOmega.jpg"
							alt="Foto empresa omega" wide="450" height="270"></div>
				</div>
				<div class="fila">
					<div class="celda"><img class="item-not" src="../images\novedades\rankingMerco.jpg"
							alt="Foto ranking Merco" wide="450" height="270"></div>
					<div class="celda">
						<h3>Hemos sido reconocido como una de las mejores empresas del Perú en tecnología</h3>
						<p class="p">Según el ranking de Merco empresas en rubro de tecnología, obtuvimos el puesto 7 de
							las mejores empresas tecnológicas que existe en el pais. Nosotros seguiremos ofreciendo lo
							mejor para nuestros clientes, pues la felicidad y la confianza por parte de ellos
							contribuyen también en nuestra felicidad, desarrollo y motivación. ¡Muchas gracias a quienes
							confiaron en nosotros!</p>
					</div>
				</div>
			</section>
		</div>
		<div id="entradas">
			<div class="celda">
				<p class="linkn">Nuevas entradas</p>
			</div>
			<div><a class="linka" href="noticias_2.php">Antiguas entradas</a></div>
		</div>
	</div>
	<p class="pagina">Página 1</p>
 <?php

include("../includes/footer2.php");
?>

</body>

</html>