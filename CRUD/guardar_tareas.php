<?php 

include("conexion.php");

if (isset($_POST['guardar-tarea'])){
	$titulo=$_POST['titulo'];
	$descripcion=$_POST['descripcion'];


	//realizar consulta
	$query="INSERT INTO tipo_tarea(nombre, descripcion) VALUES('$titulo', '$descripcion')";
	//almacena valores en la tabla
	$resultado=mysqli_query($conexion,$query);
	if(!$resultado){
		die("Fallo la consulta");

		}

	$_SESSION[mensaje]='Tarea guardada satisfactoriamente';
	$_SESSION[mensaje_type]='success';
	header("location:tareas.php");

	}
 ?>