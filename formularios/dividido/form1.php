<?php
// Iniciamos la sesión para poder guardar el nombre
session_start();

// Comprobamos si se ha enviado el formulario con el nombre
if (isset($_POST['nombre'])) {
	$_SESSION['nombre'] = $_POST['nombre'];
	header('Location: form2.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario en varias páginas - Página 1</title>
</head>
<body>
	<h1>Formulario en varias páginas</h1>
	<form method="POST">
		<label>Nombre:</label>
		<input type="text" name="nombre" required>
		<br><br>
		<input type="submit" value="Siguiente">
	</form>
</body>
</html>
