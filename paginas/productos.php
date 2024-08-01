<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Productos</title>
	<link rel="stylesheet" type="text/css" href="../css/productos.css" />
	<script type="text/javascript" src="../js/productos.js"></script>
</head>


<body>
 <?php

	include("../includes/header2.php");
	require('../controlador/conexion.php');
		$conn = conectar();
?>

	<h1>Productos</h1>
	


	
		
		<div class="contenedorTabla">
			<?php					
				if(isset($_SESSION['user'])){
					echo '<a href="carrito.php"><img src="../images/productos/Carrito/carrito.png" width="5%"></a>';
				}
			?>
			<form action="" method="post">
				<select name="codTipo" onchange="this.form.submit()">
					<option>Seleccionar</option>
					<option value="todos">Todos</option>
					<?php
						foreach (listarNomeCategoria($conn) as $key => $value1) {
					?>
					<option value="<?=$value1[0]?>"><?=$value1[1]?></option>
					<?php
						}
					?>
				</select>
			</form>
			<?php
			$codigo = 'todos';

			if(isset($_REQUEST['codTipo'])){
				$codigo = $_REQUEST['codTipo'];
			}
			if($codigo==='todos')
				$vector=listarNomeCategoria($conn);
			else
				$vector=listarPorNomeCategoria($conn,$codigo);
			
			
			?>
			<?php
				foreach ($vector as $key => $value) {
			?>
				<div class="tabla_cat">
					<h2><?=$value[1]?></h2>
					<?php
						
						foreach (listarDescCategoria($conn,$value[1]) as $key2 => $v2) {
					?>
							<section id="intel">
								<div class="tabla">
									<h3><?=$v2[0]?></h3>
									<?php
									for ($i=0; $i <1 ; $i++) { 
									?>
									<div class="fila">
										<?php											
											$prod= listarProdCate($conn,$v2[0]);
											foreach ($prod as $key => $val2) {
										?>
											<div class="celda"><img class="imagenes" src='<?=$val2[3]?>'></div>
										<?php
											}
										?>
										
									</div>
									<div class="fila">
										<?php
											foreach ($prod as $key => $val2) {
										?>
									<div class="celda"><p><?=$val2[1]?></p></div>
										<?php
											}
										?>
									</div>
									<div class="fila">
										<?php
											foreach ($prod as $key => $val2) {
										?>
									<div class="celda precio"><p>S/.<?=$val2[2]?></p></div>
									<?php
										}
									?>
									</div>
									<div class="fila">
										<?php
											foreach ($prod as $key => $val2) {
										?>
										<form method="post" action="productos.php">
											<input type="hidden" name="codigo" value="<?=$val2[0]?>">
											<input type="hidden" name="nombre" value="<?=$val2[1]?>">
											<input type="hidden" name="precio" value="<?=$val2[2]?>">
											<input type="hidden" name="foto" value="<?=$val2[3]?>">
											<input type="text" name="cantidad">
											<input type="submit" name="agregar" value="Agregar">
										</form>
										<?php
											}
										?>
									</div>
									<?php
									}
									?>
									
								</div>
							</section>
					<?php
						}
					?>
				</div>
			<?php
				}
			?>
			
		</div>
	</div>
 	<?php
		if(isset($_REQUEST['agregar'])){
			$cod = $_REQUEST['codigo'];
			$nom = $_REQUEST['nombre'];
			$pre = $_REQUEST['precio'];
			$fot = $_REQUEST['foto'];
			$can = $_REQUEST['cantidad'];

			$_SESSION['carrito'][$cod]['nombre'] = $nom;
			$_SESSION['carrito'][$cod]['precio'] = $pre;
			$_SESSION['carrito'][$cod]['foto'] = $fot;

			if(isset($_SESSION['carrito'][$cod]))
				$_SESSION['carrito'][$cod]['cantidad'] += $can;
			else
				$_SESSION['carrito'][$cod]['cantidad'] = $can;
			
			if(isset($_SESSION['user'])){
			echo "<script>alert('Producto agregado al carrito.')</script>";
			}
			else{
				echo "<script>alert('Producto agregado al carrito. Por favor inicie sesión para visualizar.')</script>";
				
			}
		}
		include("../includes/footer2.php");
 	?>
</body>

</html>