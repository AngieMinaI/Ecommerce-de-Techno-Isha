<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/reclamo.css">
	<script type="text/javascript" src="../js/reclamos.js"></script>
</head>

<body>
 <?php

include("../includes/header2.php");
//include("../includes/headeruser.php");
?>
	<h1 class="titulo">LIBRO DE RECLAMACIONES</h1>
	<div class="general">
		<form id="formula" action="../llamadas/procesoReclamoAdd.php" method="post">
			<br>
			<p class="text">Conforme a lo establecido en el código de la Protección y Defensa del consumidor este
				establecimiento cuenta con un Libro de Reclamaciones a tu disposición.</p>
			<p class="text">Registra la queja o reclamo aqui.</p>
			<p class="text">Razón Social: TECHNO SAC</p>
			<p class="text">RUC: 20101087647</p>
			<p class="text">Dirección Fiscal: Av. la Marina 2100, San Miguel 15087</p>
			<br>


			<div class="marco">
				<div class="efecto">
					<div class="contact-form">
						<h2 class="datos">Identificación del consumidor Reclamante</h2>


						<div class="fila">
							<div class="celda">
								<p>
									<label>Nombres</label>
									<input type="text" name="nombre" required="" id="nombre"
										onkeypress="return soloLetras(event)">
								</p>
							</div>

							<div class="celda">
								<p>
									<label>Apellidos</label>
									<input type="text" name="apellido" id="apellido" required
										onkeypress="return soloLetras(event)">
								</p>
							</div>
						</div>


						<div class="fila">
							<div class="celda">
								<p>
									<label> Tipo de documento</label>
									<select required id="tipoDoc" name="tipoDoc">
										<option checked>Seleccione</option>
										<option>DNI</option>
										<option>Pasaporte</option>
									</select>
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Distrito</label>
									<select required id="dist" name="dist">
										<option checked>Seleccione</option>
										<option>Ancón</option>
										<option>Ate</option>
										<option>Barranco</option>
										<option>Breña</option>
										<option>Carabayllo</option>
										<option>Chaclacayo</option>
										<option>Chorrilos</option>
										<option>Cieneguilla</option>
										<option>Comas</option>
										<option>El Agustino</option>
										<option>Huaycán</option>
										<option>Independencia</option>
										<option>Jesús Maria</option>
										<option>La Molina</option>
										<option>La Victoria</option>
										<option>Lima</option>
										<option>Lince</option>
										<option>Los Olivos</option>
										<option>Lurigancho-Chosica</option>
										<option>Lurín</option>
										<option>Magdalena del Mar</option>
										<option>Miraflores</option>
										<option>Pueblo Libre</option>
										<option>Pachacámac</option>
										<option>Pucusana</option>
										<option>Puente Piedra</option>
										<option>Punta Hermosa</option>
										<option>Punta Negra</option>
										<option>Rímac</option>
										<option>San Bartolo</option>
										<option>San Borja</option>
										<option>San Isidro</option>
										<option>San Juan de Lurigancho</option>
										<option>San Juan de Miraflores</option>
										<option>San Luis</option>
										<option>San Martín de Porres</option>
										<option>San Miguel</option>
										<option>Santa Anita</option>
										<option>Santa María del Mar</option>
										<option>Santa Rosa</option>
										<option>Santiago de Surco</option>
										<option>Surquillo</option>
										<option>Villa El Salvador</option>
										<option>Villa María del Triunfo</option>
									</select>
								</p>
							</div>
						</div>


						<div class="fila">
							<div class="celda">
								<p>
									<label>Nro de Documento</label>
									<input type="number" name="DNI" required id="dni" required=""
										onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Dirección Domiciliaria</label>
									<input type="text" name="direc" required id="direccion">
								</p>
							</div>
						</div>

						<div class="fila">
							<div class="celda">
								<p>
									<label>Número telefonico</label>
									<input type="number" name="fono" required="" id="fono"
										onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Correo electronico</label>
									<input type="email" name="email" required="" id="correo">
								</p>
							</div>
						</div>

						

					</div>
				</div>
			</div>



			<div class="marco">
				<div class="efecto">
					<div class="contact-form">
						<h2 class="datos">Detalle del reclamo</h2>

						<div class="fila">
							<div class="celda">
								<p>
									<label>Tipo de Bien</label>
									<select required id="tipoB" name="tipoB">

										<option checked>Seleccione</option>
										<option>Producto</option>
										<option>Bien</option>
									</select>
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Tipo</label>
									<select required id="tipo" name="tipo">
										<option checked>Seleccione</option>
										<option>Reclamo</option>
										<option>Queja</option>
									</select>
								</p>
							</div>
						</div>


						<div class="fila">
							<div class="celda">
								<p>
									<label>Codigo Pedido</label>
									<input type="number" name="cod" id="cod" required
										onkeypress="return soloNumeros(event)">
								</p>
							</div>
							<div class="celda">
								<p>
									<label>Monto S/.</label>
									<input type="number" name="monto" id="monto" required
										onkeypress="return soloNumeros(event)">
								</p>
							</div>
						</div>


						<div class="fila">
							<div class="celda">
								<p>
									<label>Mensaje</label>
									<textarea name="mensaje" rows="1" required id="mensaje"></textarea>
								</p>
							</div>
						</div>
						<div class="fila">
							<div class="celda">
								<p>
									<label>Adjuntar archivo si requiere</label>
									<input id="prioridad" type="file" name="Adjuntar"
										accept="image/*,application/pdf" />
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="marco">
				<div class="efecto">
					<div class="contact-form">

						<h2 class="datos"> Pedido del Consumidor</h2>
						<div class="fila">
							<div class="celda">
								<p>
									<label>Descripcion</label>
									<textarea id="desc" rows="1" required name="desc"></textarea>
								</p>
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
			<p id="prioridad2">RECLAMO: Disconformidad relacionada con los productos o servicios.</p>
			<p id="prioridad2">QUEJA : Disconformidad no relacionada a los productos o servicios; o, malestar o
				descontento respecto a
				la atención al público.
			</p>
			<p id="prioridad2">*La formulación del reclamo no impide acudir a otras vías de solución de controversias ni
				es requisito
				previo para interponer una denuncia ante el INDECOPI.</p>
			<p id="prioridad2">*El proveedor deberá dar respuesta al reclamo en un plazo no mayor a treinta (30) días
				calendario,
				pudiendo ampliar el plazo hasta por treinta (30) días más, previa comunicación al consumidor.</p>
			<br>

			<br>
			<br>
			<div class="texto">
				<input type="checkbox" name="condicion" alt="check" required id="checkbox">
				<label>Al hacer click aqui acepto los <a href="TyC.php">Terminos y Condiciones</a>
					con respecto a mis datos</label>



				<p><input id="prioridad3" type="reset" name="borrar" value="Borrar" onclick="return ConfirmDelete()">
					&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="submit" id="prioridad3" name="aceptar" value="Aceptar" onclick="validar()">
					<input type="hidden" name="accion" value="agregar">
					<!--<input type="submit" name="aceptar" value="Aceptar" onclick="validar()"><br>-->
				</p>

			</div>
		</form>
	</div>



 <?php

include("../includes/footer2.php");
?>

</body>

</html>