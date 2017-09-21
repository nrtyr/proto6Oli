function masPredios(){

			var conexion;
			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("masPrediosDiv").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET", "../protected/php/masClaves.php",true);
			conexion.send();
		}
		function menosPredios(){

			var conexion;
			if (window.XMLHttpRequest) {
				conexion = new XMLHttpRequest();
			}else{
				conexion = new ActiveXObject("Microsoft.XMLHTTP");
			}

			conexion.onreadystatechange=function(){
				if (conexion.readyState==4 && conexion.status==200) {
					document.getElementById("masPrediosDiv").innerHTML=conexion.responseText;
				}
			}

			conexion.open("GET", "../protected/php/menosClaves.php",true);
			conexion.send();
		}