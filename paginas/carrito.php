<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Carrito de compras</title>
	<link rel="stylesheet" type="text/css" href="../css/bdtablas.css">
	<link rel="stylesheet" type="text/css" href="../css/boton.css">	
	<link rel="stylesheet" type="text/css" href="../css/incio.css">
	
</head>
<body>

	<?php
		include '../includes/header2.php';
		
		if(isset($_SESSION['carrito'])){
			$total=0;
			echo "<div class='contenedor-novedad'><table><tr class='tabehead'><th>Código</th>
			<th>Nombre</th>
			<th>Precio</th>
			<th>Foto</th>
			<th>Cantidad</th>
			<th>Acción</th>
			<th>SUBTOTAL</th></tr>";
			foreach ($_SESSION['carrito'] as $indice => $valor){
				echo "<tr><td>$indice</td>";
				foreach ($valor as $key => $dato) {
					if ($key ==='foto')
						echo "<td><img src='../images/$dato' width='100' height='110'></td>";
					else
						echo "<td>$dato</td>";
				}
				$subtotal = floatval($valor['precio']) * $valor['cantidad'];
				echo "<td><a href='carrito.php?codigo=$indice'>Eliminar producto</a></td>";
				echo "<td>$subtotal </td></tr>";
				$total = $total + $subtotal;
				
			}
			echo "<tr><th colspan='6'>TOTAL</th><td>$total</td></tr></table></div>";
		}else {
			echo "<did><H1>El carrito de compras está vacío</H1><img src='../images/productos/Carrito/carritovacio.jpg' width='55%'><br>
			<a href='productos.php'>Añadir productos</a></div>";
		}
		if (isset($_REQUEST['codigo'])) {
			$codi = $_REQUEST['codigo'];
			unset($_SESSION['carrito'][$codi]);
			header('location:carrito.php');
		}
		if (isset($_REQUEST['eliminarTodo'])) {
			header('location:carrito.php');
		} 
		
 	?>
 	
	<?php
		include '../includes/footer2.php';
	?>
</body>
</html>