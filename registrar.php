<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['Nombre']) >= 1 && strlen($_POST['Apellido']) >= 1 &&
		strlen($_POST['Email']) >= 1 && strlen($_POST['Edad']) >= 1 &&
		strlen($_POST['CURP']) >= 1) {
	    $Nombre = trim($_POST['Nombre']);
		$Apellido = trim($_POST['Apellido']);
		$Email = trim($_POST['Email']);
	    $Edad = trim($_POST['Edad']);
		$CURP = trim($_POST['CURP']);
	    $consulta = "INSERT INTO empleados(Nombre, Apellido, Email, Edad, CURP) VALUES ('$Nombre', '$Apellido', '$Email', '$Edad', '$CURP')";
        $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">Parece que ocurrido un error</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Recuerde completar todos los campos</h3>
           <?php
    }
}

?>