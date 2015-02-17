<!DOCTYPE html>
<html lang="es">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8">
	<title>Document</title>
 	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	<?php
		echo "<h1> Bienvenido ".$nombre. "</h1>";
		echo "<h2>Hola mundo </h2>";
		echo "<h2> Hoy es:".date("d-m-Y")."</h2> <br>";
	?>
	<a href="index.php/prueba/opcion1">Opcion 1</a>
	<a href="index.php/prueba/opcion2">Opcion 2</a>
	<a href="index.php/prueba/opcion3">Opcion 3</a>
	<?php
	?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>