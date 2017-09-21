<?php
echo '
<div class="ocultar">
<div class="animated fadeInDown">
	<p class="infoTxtInput">Clave Catastral 2:</p>
	<input type="text" name="txtClvCat2" placeholder="16 Dígitos" class="formText" maxlength="16" minlength="16" id="autocomplete2" value="099" required oninput="ajaxAutoCompete2()"/>
	<br>
	
	<p class="infoTxtInput">Clave Catastral 3:</p>
	<input type="text" name="txtClvCat3" placeholder="16 Dígitos" class="formText" maxlength="16" minlength="16" id="autocomplete3" value="099" required oninput="ajaxAutoCompete3()"/>
	<br>
	<br>
	<div class="plus2" onclick="menosPredios()">
						<i class="fa fa-minus centrado" aria-hidden="true" onclick="masPredios()"></i>
					</div>
</div>
	</div>

'
?>	
<html>
	<style>
		.plus{
			display: none;
		}

	</style>
</html>