<html>
	<head>
		<title>jazmin está muuuyyyy aburrida</title>
	</head>
	<body>
		<?php
			include("conexion.php");
			$n=$_POST["nom"];
			$d=$_POST["dire"];
			$c=$_POST["cor"];
			$t=$_POST["tel"];
			echo "<fieldset>";
			echo "<legend>Datos del producto</legend>";
			echo "NOMBRE: ".$n."<br>";
			echo "DIRECCION: ".$d."<br>";
			echo "CORREO: ".$c."<br>";
			echo "TELEFONO: ".$t."<br>";
			echo "</fieldset>";
			$link=conectarse();
			$sql="INSERT INTO datos(nombre, direccion, correo, telefono) VALUES('$n', '$d', '$c', '$t')";
			$result=mysqli_query($link, $sql);
			echo "<p>la informacion ha sido guardada correctamente";
			mysqli_close($link);
		?>
	</body>
</html>