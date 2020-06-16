<?php 

include("conexion.php");

if (isset($_GET['id'])) {
	$id=$_GET['id'];

	$query= "DELETE FROM tipo_tarea WHERE id=$id";
	$resultado= mysqli_query($conexion, $query);




	if (!$resultado) {
		die("falló busqueda");
	}



	$_SESSION['message']='Tarea borrada';
	$_SESSION['message_type']='Danger';
	header("location:tareas.php");

}

?>