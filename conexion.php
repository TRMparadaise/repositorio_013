<html>
	<head>
		<title>jazmin no sabe que hacer</title>
	</head>
	<body>
		<?php
			$host="localhost";
			$usuario="root";
			$contrasena="";
			$basedatos="directorio";
			$tabla="datos";
			
			function conectarse(){
				global $host, $usuario, $contrasena, $basedatos, $tabla;
				
				if (!($link=mysqli_connect($host, $usuario, $contrasena))){
					echo "Error conectando a la base de datos.<br>";					
					exit();
				}
				else {
					echo "¡LISTO! Estamos conectados<p>";
				}
				if (!mysqli_select_db($link,$basedatos)) {
					echo "error seleccionando la base de datos".$basedatos."<br>";
				}
				else {
					echo "Obtuvimos la base de datos".$basedatos."<br>";
				}
			return $link;	
			}
			$link=conectarse();
			mysqli_close($link);	
		?>
	</body>
</html>