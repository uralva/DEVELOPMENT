<!doctype html>
<html lang="es_MX">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    
</head>
<body>
	<div id="contenedor">
	</div>
    <input type="text" id="text_1" placeholder="datos">
	<button id="boton1" onClick="Ejecutar_Ajax()">GET</button>
	<script>
		function Ejecutar_Ajax(){
    	var conexion;
        var texto = document.getElementById("text_1").value;
    	var contenedor = document.getElementById("contenedor");
    	var boton = document.getElementById("boton1");
    	if(window.XMLHttpRequest){
    		conexion = new XMLHttpRequest(); 
    	}
    	else{
    		conexion = new ActiveXObject("Microsoft.XMLHTTP");
    	}
    	conexion.onreadystatechange=function(){
    		if((conexion.readyState==4) && (conexion.status==200)){
    			contenedor.innerHTML=conexion.response;
    		}
    	}
    	conexion.open("GET","accion.php?valor="+texto,true);
    	conexion.send();
    }
   </script>
</body>
</html>