function aviso(){

			var conexion;
			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("continuar").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET", "../protected/php/privacidad.php",true);
			conexion.send();
		}

function aviso2(){

			var conexion;
			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("continuar").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET", "../protected/php/privacidad2.php",true);
			conexion.send();
		}		