<?php
// Iniciamos la sesión para poder acceder al nombre y al apellido almacenados
session_start();

// Comprobamos si se han guardado las variables de sesión con el nombre y el apellido
if (!isset($_SESSION['nombre']) || !isset($_SESSION['apellido'])) {
	header('Location: form1.php');
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formulario en varias páginas - Página 3</title>
</head>
<body>
	<h1>Formulario en varias páginas</h1>
	<p>Nombre: <?php echo $_SESSION['nombre']; ?></p>
	<p>Apellido: <?php echo $_SESSION['apellido']; ?></p>
</body>
</html>

<?php
// Limpiamos las variables de sesión
session_unset();
