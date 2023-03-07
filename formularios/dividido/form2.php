<?php
// Iniciamos la sesión para poder acceder al nombre almacenado
session_start();

// Comprobamos si se ha enviado el formulario con el apellido
if (isset($_POST['apellido'])) {
	$_SESSION['apellido'] = $_POST['apellido'];
	header('Location: form3.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario en varias páginas - Página 2</title>
</head>
<body>
	<h1>Formulario en varias páginas</h1>
	<form method="POST">
		<label>Apellido:</label>
		<input type="text" name="apellido" required>
		<input type="hidden" name="nombre" value="<?php echo $_SESSION['nombre']; ?>">
		<br><br>
		<input type="submit" value="Siguiente">
	</form>
</body>
</html>
