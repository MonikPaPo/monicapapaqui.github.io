<?php 

include("conexion.php");

if (isset($_GET['idm'])) {
	$idm=$_GET['idm'];

	$query= "DELETE FROM asignatura WHERE idm=$idm";
	$resultado= mysqli_query($conexion, $query);




	if (!$resultado) {
		die("falló busqueda");
	}



	$_SESSION[message]='Asignatura borrada';
	$_SESSION[message_type]='Danger';
	header("location:asignatura.php");

}

?>