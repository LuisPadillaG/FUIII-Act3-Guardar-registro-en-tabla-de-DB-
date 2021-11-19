<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alta de empleados </h1>
    	<input type="text" name="Nombre" placeholder="Nombre">
    	<input type="text" name="Apellido" placeholder="Apellido">
    	<input type="email" name="Email" placeholder="Email">
    	<input type="number" name="Edad" placeholder="Edad">
    	<input type="text" name="CURP" placeholder="CURP">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrar.php");
        ?>
</body>
</html>