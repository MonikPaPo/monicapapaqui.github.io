<?php 
	include("conexion.php");

	if (isset($_POST['guardar-asignatura'])){
		$materia=$_POST['materia'];
		$docente=$_POST['docente'];
		$horario=$_POST['horario'];


		//realizar consulta
		$query="INSERT INTO asignatura(materia, docente,horario) VALUES('$materia', '$docente','$horario')";
		//almacena valores en la tabla
		$resultado=mysqli_query($conexion,$query);
		if(!$resultado){
			die("Fallo la consulta");

			}

		$_SESSION[mensaje]='Datos guardados satisfactoriamente';
		$_SESSION[mensaje_type]='success';
		header("location:asignatura.php");

		}




 ?>