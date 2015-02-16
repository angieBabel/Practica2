<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
		echo "<h1> Vista Tres </h1>";
		echo "<h2>Hola mundo </h2>";
		echo "<h2> Hoy es:".date("d-m-Y")."</h2> <br>";
	?>
	<a href="index.php/prueba/opcion1">Opcion 1</a>
	<a href="index.php/prueba/opcion2">Opcion 2</a>
	<a href="index.php/prueba/opcion3">Opcion 3</a>
	<?php
	?>
</body>
</html>