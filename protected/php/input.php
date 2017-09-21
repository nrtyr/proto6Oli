<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>autocomplete demo</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

<script type="text/javascript">
	
	function ajaxAutoCompete2(){
		$( "#autocomplete2" ).autocomplete({
		  delay: 0,
		  source: "autoClave.php"
		});
	}
	function ajaxAutoCompete3(){
		$( "#autocomplete3" ).autocomplete({
		  delay: 0,
		  source: "autoClave.php"
		});
	}
</script>

  <script type="text/javascript">

  	function ejecutarAjax(){

			var conexion;

			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("midiv").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET","input2.php",true);
			conexion.send();

		}
  </script>
</head>
<!-- <style>
	.ui-autocomplete{
    font-size: 1em;
}
</style> -->
<style>
	*{
		margin: 0px;
		padding: 0px;
	}
	html,body{
	height: 100%;
	
	}
	body{
		background-attachment: fixed;
	display: -webkit-flex;
	display: -ms-flexbox;
	display: -webkit-box;
	display: flex;
		-webkit-justify-content: center;
		    -ms-flex-pack: center;
		    -webkit-box-pack: center;
		        justify-content: center;
		    -webkit-align-items: center;
		            -ms-flex-align: center;
		        -webkit-box-align: center;
		            align-items: center;
	min-height: 100vh;
	background-color: #E6E6E6;
	}
	.ui-autocomplete{
	    font-size: 2.8em;
	    text-align: center;
	    padding: 0px;
	    margin: 0px;
	}
	.txtCuadro{
		padding: 0px 20px 0px 20px;
		height: 60px;
		border-width: 1px;
		-webkit-border-radius: 3px;
		        border-radius: 3px;
		font-size: 3em;
		text-align: center;
	}
</style>
<body>
<div class="cCentral"> 
	<input type="text" id="autocomplete" value="099" class="txtCuadro" />
	<br>
	<div id="midiv"></div>
	<br>
	<button type="button" onclick="ejecutarAjax()">Ejecutar</button>
</div>
<script>
$( "#autocomplete" ).autocomplete({
  delay: 0,
  source: "autoClave.php"
});
</script>




</body>
</html>