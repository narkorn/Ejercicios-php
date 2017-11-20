<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Ejercicio 1</h1>
	<form action="#" method="POST">
		<div>
			<label for="Nombre:"></label>
			<input type="text" name="nombre" id="name">
		</div>
		<div>
			<label for="Apellido1:"></label>
			<input type="text" name="apellido1" id="apellido1">
		</div>
		<div>
			<label for="Apellido2:"></label>
			<input type="text" name="apellido2" id="apellido2">
		</div>
		<div>
			<input type="submit">
		</div>
	</form>
	<?php
	if (isset($_POST["nombre"])) {
		if (empty($_POST["nombre"])) {
			echo "<p>El nombre está vacio</p>";
		}
		if (empty($_POST["apellido1"])) {
			echo "<p>El apellido 1 está vacio</p>";
		}	
			if (empty($_POST["apellido2"])) {
			echo "<p>El apellido 2 está vacio</p>";
		}	
	}	

     ?>
</body>
</html>