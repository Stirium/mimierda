<?php
		// Credeciais base de datos
		$servername = "localhost";
		$username = "alan";
		$password = "turing";
		
		// Crear conexion MySQL
	$conn = mysqli_connect($servername, $username, $password, "ENIGMA");

	// Comprobar conexión, si flla mostrar error
	if (!$conn) {
		die('<p>Fallo la conexión con la base de datos: </p>' . mysqli_connect_erorr());
	}
	
	echo '<p>Conexión ¡OK!</p>';
?>
