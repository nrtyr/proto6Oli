
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Estado de Cuenta</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/formatoEdoCuenta.css">
	
</head>
<body>

<div class="dimHojaWeb">
	<div id="main-wrapper">
	<div class="hojas">
		<div class="hojaCarta">
			<header>

				<div class="c1">
					<img src="css/img/logoUno.svg" class="logo1">
				</div>

				<div class="c2">
					<div class="cabecera1">
						<img src="css/img/logoAno.svg" class="logo2">
					</div>
					
				</div>

				<div class="c3">
					<img src="css/img/logoDos.svg" class="logo2">
				</div>
				<div class="liaPleca">
				<img src="css/img/lieaGris.svg" alt="">
			</div>
			</header>
			
			<article>

				<div class="tablaUno">
					<table>
						<tr>
							<td>
								<i class="fa fa-map-o" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de suelo (terreno)</p>
								<p>
									<?php 
									echo $mtsTerrEstC2; ?>
								</p>
							</td>
							<td>
								<i class="fa fa-home" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de construcción</p>
								<p>
									<?php 
									echo $mtsConstEstC2; ?>
										
									</p>
							</td>
							<td>
								<i class="fa fa-industry" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Uso - Tipo</p>
								<p>
									<?php 
									echo $usoEstC2; ?>

								</p>
							</td>
							<td>
								<i class="fa fa-calendar" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Fecha de corte</p>
								<p><?php echo $fechaCorte; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Valor Terreno</p>
								<p>
									<?php 
									echo $valorTerrEstC2; ?>
								</p>
							</td>
							<td>
								<p class="tEnca">Valor Construcción</p>
								<p>
									<?php 
									echo $valorTerrEstC2; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Valor Catastral</p>
								<p>
									<?php 
									echo $valorCatEstC2; ?>

								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Meritos</p>
								<p>
									<?php 
									echo $meritosEstC2; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Demeritos</p>
								<p>
									<?php 
									echo $demeritosEstC2; ?>

								</p>
							</td>
						</tr>
						
					</table>
				</div>
				<div class="cuadroInfo">
					<p>También puede realizar su pago de impuesto Predial en las Oficinas de la Tesorería Municipal. Oficinas Centrales (Plaza Bicentenario), Tel 53-71-25-00 ext. 182. Oficinas en Plaza Town Center, Tel. 22-10-91-72. Oficinas de Colmena, Tel. 22-10-06-37.</p>
				</div>

				<div class="cuadroEdoCuenta">
					<div class="c1EdoCuenta">
						<p class="cCatastralEst">
							<?php 
								echo $cCatastralEstC2;
							 ?>
						</p>
						<img src="css/img/estadoCuenta.svg" alt="">

					</div>
					<br>
					<div class="cTfPago">
						<div class="cfPago">
							<div class="numero">1</div>
							<p class="txtCuadro">Pago en ventanilla Telecomm Telégrafos:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago"> 
							<!-- <div class="numero">3</div>
							<p class="txtCuadroG">Transferencia Interbancaria.
							<br>
							<img src="css/img/logoTelecomm.svg" class="logoSPEI">
							<b>CIE INTERBANCARIO
							<br>
							012914002014133252
							</b>

							</p> -->
							<img src="css/img/logoTelecomm150.svg" class="logoTelecomm">
						 </div>
					</div>

					<!-- <div class="cTfPago">
						<div class="cfPago">
							<div class="numero">2</div>
							<p class="txtCuadro">Portal Bancario Cliente BBVA Bancomer:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago">
							
						</div>
					</div> -->
					
					<div class="cTfPago">
						<div class="cfPago">
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM1EstC2; ?>
									</b>
									</p>
									<p class="txtChico">
									Importe con descuento por pago Anticipado:
									</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenUno; ?>
										<br>
										<?php echo "$".$totM1EstC2; ?>
									</b>
								</p>
							</div>
						</div>
						<div class="cfPago">
							
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM2EstC2; ?>
									</b>
									</p>
									<p class="txtIzq">
									Importe:
								</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenDos; ?>
										<br>
										<?php echo "$".$totM2EstC2; ?>
									</b>
								</p>
							</div>
						
						</div>
					</div>

				</div>
				<div class="cuadroInfo">
					<p>Propuesta de Declaración de Valor Catastral y pago del impuesto Predial que se emite con fundamento en los artículos <b>108, 109 y 112</b> del código Financiero del Estado de México y Municipios.</p>
				</div>

				<div class="cDatosCont">
					<div class="datosC">
						<p class="txtDatosCont">CONTRIBUYENTE: <b><?php echo $propietarioEstC2; ?></b>
						<br>
						UBICACIÓN DEL PREDIO: <b><?php echo $domiciloEstC2; ?></b>
						<br>
						COLONIA: <b><?php echo $coloniaEstC2; ?></b>
						</p>
					</div>
					<div class="promoInfo">
						<p class="txtCPromo">Realiza tu pago anual y obtén un descuento: Del 1 al 31 de <b>Marzo del 4%</b></p>
					</div>
				</div>

				<div class="txtCentradoInfo">
					¡SI YA REALIZO SU PAGO, HAGA CASO OMISO DE LA PRESENTE!
					<br>
					¡IMPORTANTE!
				</div>

				<div class="cuadroInfo2">
				
					<p>El presente estado de cuenta es informativo. Si requiere detalles de adeudos por  favor acuda a las oficinas de la Tesorería Municipal Oficinas Centrales (Plaza Bicentenario), Tel: 53-71-25-00 ext 182. Oficinas en Plaza Town Center, Tel: 22-10-91-72. Oficinas de Colmena, Tel: 22-10-06-37.</p>
				</div>
				
			</article>
			<footer>
				<p>
				<a href="#" class="sociales">
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				H.Aytto.NicolasRomero
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				TesoreríaNicolásRomero
				</a>
				<a href="#" class="sociales">
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_NicolasRomero_
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_@TesoreriaNR
				</a>
				</p>
			</footer>
		</div>
	</div>
	</div>
	<!-- ##############
	inicia segunda hoja
	############## -->
<div id="main-wrapper">
<div class="hojas">

	<div class="hojaCarta">

			<div class="headerDos">

				<div class="c1">
					<img src="css/img/logoUno.svg" class="logo1">
				</div>

				<div class="c2">
					<div class="cabecera1">
						<img src="css/img/logoAno.svg" class="logo2">
					</div>
					
				</div>

				<div class="c3">
					<img src="css/img/logoDos.svg" class="logo2">
				</div>
				<div class="liaPleca">
				<img src="css/img/lieaGris.svg" alt="">
				</div>
			</div>
			

			<article>
			<h1 class="tInfoUsr">COMO OBTENER TU COMPROBANTE FISCAL</h1>	
				<div class="cPInfoUsr">
					<div class="imgInfoUsuario">
						<div class="cPaso1 cTxt">
							<p>
								PAGA EN CUALQUIER OFICINA 
								<br>
								DE TELECOMM TELÉGRAFOS
							</p>
						</div>
						<div class="cPaso2 cTxt">
							<p>
								VALIDA TU PAGO CON LA TESORERÍA MUNICIPAL, A TRAVÉS DE:
								<br>
								Teléfono: 53-71-25-00 ext. 182
								<br>
								Correo Electrónico: tesorerianr@nicolasromero.mx
								<br>
								Facebook: TesoreriaNicolasRomero
							</p>
						</div>
						<div class="cPaso3 cTxt">
							<p>
								PROPORCIONA TU CORREO
								<br>
								ELECTRÓNICO O AGENDA CITA PARA
								<br>
								RECOGER TU CFDI EN LAS OFICINAS MUNICIPALES
							</p>
						</div>
						<div class="cPaso4 cTxt">
							<p>
								<b>
								¡LISTO! AHORRAS TIEMPO
								<br>
								E - GOBIERNO GENTE DE
								<br>
								"TRABAJO Y RESULTADOS"
								</b>
							</p>
						</div>
					</div>
				</div>
			</article>

				
				
			<footer>
				<p>
				<a href="#" class="sociales">
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				H.Aytto.NicolasRomero
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				TesoreríaNicolásRomero
				</a>
				<a href="#" class="sociales">
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_NicolasRomero_
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_@TesoreriaNR
				</a>
				</p>
			</footer>
		</div>
</div>
</div>
</div>

<!-- ################
inicia hoja 3
################ -->

<div class="dimHojaWeb">
	<div id="main-wrapper">
	<div class="hojas">
		<div class="hojaCarta">
			<header>

				<div class="c1">
					<img src="css/img/logoUno.svg" class="logo1">
				</div>

				<div class="c2">
					<div class="cabecera1">
						<img src="css/img/logoAno.svg" class="logo2">
					</div>
					
				</div>

				<div class="c3">
					<img src="css/img/logoDos.svg" class="logo2">
				</div>
				<div class="liaPleca">
				<img src="css/img/lieaGris.svg" alt="">
			</div>
			</header>
			
			<article>

				<div class="tablaUno">
					<table>
						<tr>
							<td>
								<i class="fa fa-map-o" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de suelo (terreno)</p>
								<p>
									<?php 
									echo $mtsTerrEstC3; ?>
								</p>
							</td>
							<td>
								<i class="fa fa-home" aria-hidden="true" id="grande"></i>
								<p class="tEnca">m2 de construcción</p>
								<p>
									<?php 
									echo $mtsConstEstC3; ?>
										
									</p>
							</td>
							<td>
								<i class="fa fa-industry" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Uso - Tipo</p>
								<p>
									<?php 
									echo $usoEstC3; ?>

								</p>
							</td>
							<td>
								<i class="fa fa-calendar" aria-hidden="true" id="grande"></i>
								<p class="tEnca">Fecha de corte</p>
								<p><?php echo $fechaCorte; ?></p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Valor Terreno</p>
								<p>
									<?php 
									echo $valorTerrEstC3; ?>
								</p>
							</td>
							<td>
								<p class="tEnca">Valor Construcción</p>
								<p>
									<?php 
									echo $valorTerrEstC3; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Valor Catastral</p>
								<p>
									<?php 
									echo $valorCatEstC3; ?>

								</p>
							</td>
						</tr>
						<tr>
							<td>
								<p class="tEnca">Meritos</p>
								<p>
									<?php 
									echo $meritosEstC3; ?>

								</p>
							</td>
							<td>
								<p class="tEnca">Demeritos</p>
								<p>
									<?php 
									echo $demeritosEstC3; ?>

								</p>
							</td>
						</tr>
						
					</table>
				</div>
				<div class="cuadroInfo">
					<p>También puede realizar su pago de impuesto Predial en las Oficinas de la Tesorería Municipal. Oficinas Centrales (Plaza Bicentenario), Tel 53-71-25-00 ext. 182. Oficinas en Plaza Town Center, Tel. 22-10-91-72. Oficinas de Colmena, Tel. 22-10-06-37.</p>
				</div>

				<div class="cuadroEdoCuenta">
					<div class="c1EdoCuenta">
						<p class="cCatastralEst">
							<?php 
								echo $cCatastralEstC3;
							 ?>
						</p>
						<img src="css/img/estadoCuenta.svg" alt="">

					</div>
					<br>
					<div class="cTfPago">
						<div class="cfPago">
							<div class="numero">1</div>
							<p class="txtCuadro">Pago en ventanilla Telecomm Telégrafos:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago"> 
							<!-- <div class="numero">3</div>
							<p class="txtCuadroG">Transferencia Interbancaria.
							<br>
							<img src="css/img/logoTelecomm.svg" class="logoSPEI">
							<b>CIE INTERBANCARIO
							<br>
							012914002014133252
							</b>

							</p> -->
							<img src="css/img/logoTelecomm150.svg" class="logoTelecomm">
						 </div>
					</div>

					<!-- <div class="cTfPago">
						<div class="cfPago">
							<div class="numero">2</div>
							<p class="txtCuadro">Portal Bancario Cliente BBVA Bancomer:
							<br>
							<b>Convenio CIE: 1413325 y Referencia.</b>

							</p>
						</div>
						<div class="cfPago">
							
						</div>
					</div> -->
					
					<div class="cTfPago">
						<div class="cfPago">
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM1EstC3; ?>
									</b>
									</p>
									<p class="txtChico">
									Importe con descuento por pago Anticipado:
									</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenUno; ?>
										<br>
										<?php echo "$".$totM1EstC3; ?>
									</b>
								</p>
							</div>
						</div>
						<div class="cfPago">
							
							<div class="c1FPago">
								<p>
									Línea de Captura o Referencia:
									<br>
									<b>
										<?php echo $lineaM2EstC3; ?>
									</b>
									</p>
									<p class="txtIzq">
									Importe:
								</p>
							</div>
							<div class="c2FPago">
								<p>
									Vence:
									<br>
									<b>
										<?php echo $fechaVenDos; ?>
										<br>
										<?php echo "$".$totM2EstC3; ?>
									</b>
								</p>
							</div>
						
						</div>
					</div>

				</div>
				<div class="cuadroInfo">
					<p>Propuesta de Declaración de Valor Catastral y pago del impuesto Predial que se emite con fundamento en los artículos <b>108, 109 y 112</b> del código Financiero del Estado de México y Municipios.</p>
				</div>

				<div class="cDatosCont">
					<div class="datosC">
						<p class="txtDatosCont">CONTRIBUYENTE: <b><?php echo $propietarioEstC3; ?></b>
						<br>
						UBICACIÓN DEL PREDIO: <b><?php echo $domiciloEstC3; ?></b>
						<br>
						COLONIA: <b><?php echo $coloniaEstC3; ?></b>
						</p>
					</div>
					<div class="promoInfo">
						<p class="txtCPromo">Realiza tu pago anual y obtén un descuento: Del 1 al 31 de <b>Marzo del 4%</b></p>
					</div>
				</div>

				<div class="txtCentradoInfo">
					¡SI YA REALIZO SU PAGO, HAGA CASO OMISO DE LA PRESENTE!
					<br>
					¡IMPORTANTE!
				</div>

				<div class="cuadroInfo2">
				
					<p>El presente estado de cuenta es informativo. Si requiere detalles de adeudos por  favor acuda a las oficinas de la Tesorería Municipal Oficinas Centrales (Plaza Bicentenario), Tel: 53-71-25-00 ext 182. Oficinas en Plaza Town Center, Tel: 22-10-91-72. Oficinas de Colmena, Tel: 22-10-06-37.</p>
				</div>
				
			</article>
			<footer>
				<p>
				<a href="#" class="sociales">
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				H.Aytto.NicolasRomero
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				TesoreríaNicolásRomero
				</a>
				<a href="#" class="sociales">
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_NicolasRomero_
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_@TesoreriaNR
				</a>
				</p>
			</footer>
		</div>
	</div>
	</div>
	<!-- ##############
	inicia segunda hoja
	############## -->
<div id="main-wrapper">
<div class="hojas">

	<div class="hojaCarta">

			<div class="headerDos">

				<div class="c1">
					<img src="css/img/logoUno.svg" class="logo1">
				</div>

				<div class="c2">
					<div class="cabecera1">
						<img src="css/img/logoAno.svg" class="logo2">
					</div>
					
				</div>

				<div class="c3">
					<img src="css/img/logoDos.svg" class="logo2">
				</div>
				<div class="liaPleca">
				<img src="css/img/lieaGris.svg" alt="">
				</div>
			</div>
			

			<article>
			<h1 class="tInfoUsr">COMO OBTENER TU COMPROBANTE FISCAL</h1>	
				<div class="cPInfoUsr">
					<div class="imgInfoUsuario">
						<div class="cPaso1 cTxt">
							<p>
								PAGA EN CUALQUIER OFICINA 
								<br>
								DE TELECOMM TELÉGRAFOS
							</p>
						</div>
						<div class="cPaso2 cTxt">
							<p>
								VALIDA TU PAGO CON LA TESORERÍA MUNICIPAL, A TRAVÉS DE:
								<br>
								Teléfono: 53-71-25-00 ext. 182
								<br>
								Correo Electrónico: tesorerianr@nicolasromero.mx
								<br>
								Facebook: TesoreriaNicolasRomero
							</p>
						</div>
						<div class="cPaso3 cTxt">
							<p>
								PROPORCIONA TU CORREO
								<br>
								ELECTRÓNICO O AGENDA CITA PARA
								<br>
								RECOGER TU CFDI EN LAS OFICINAS MUNICIPALES
							</p>
						</div>
						<div class="cPaso4 cTxt">
							<p>
								<b>
								¡LISTO! AHORRAS TIEMPO
								<br>
								E - GOBIERNO GENTE DE
								<br>
								"TRABAJO Y RESULTADOS"
								</b>
							</p>
						</div>
					</div>
				</div>
			</article>

				
				
			<footer>
				<p>
				<a href="#" class="sociales">
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				H.Aytto.NicolasRomero
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-facebook-square" aria-hidden="true" id="iconSocial"></i>
				TesoreríaNicolásRomero
				</a>
				<a href="#" class="sociales">
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_NicolasRomero_
				</a>
				<a href="#" class="sociales"s>
				<i class="fa fa-twitter-square" aria-hidden="true" id="iconSocial"></i>
				_@TesoreriaNR
				</a>
				</p>
			</footer>
		</div>
</div>
</div>
</div>

<?php 


if (strlen($deCriptClvCat) > 0) {
	echo "<script> 

		setTimeout (".'"'."alert('No hay registro de la clave:   $deCriptClvCat');".'"'.", 800);
	</script>";
}

 ?>
</body>
</html>