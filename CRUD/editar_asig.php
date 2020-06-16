<?php 
	include("conexion.php");

	if(isset($_GET['idm'])){
	$idm=$_GET['idm'];
	$query="SELECT*FROM asignatura WHERE idm=$idm";
	$resultado=mysqli_query($conexion, $query);
		if(mysqli_num_rows($resultado)==1){
			//echo puedes modificar

			$columna=mysqli_fetch_array($resultado);
			$materia= $columna['materia'];
			$docente = $columna['docente'];
			$horario=$columna['horario'];
		}
	}

	if(isset($_POST['actualizar'])){
	$idm= $_GET['idm'];
	$materia= $_POST['materia'];
	$docente= $_POST['docente'];
	$horario=$_POST['horario'];
	


	$query="UPDATE asignatura set materia= '$materia', docente= '$docente', horario='$horario' WHERE idm=$idm";
	mysqli_query($conexion, $query);
	header("location:asignatura.php");

	}
 ?>

 <?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<!--se crea formulario-->
				<h5 class="card-title">Ingresar los datos <i class="fas fa-save"></i> </h5>
				<form action="editar_asig.php?idm=<?php echo $_GET['idm']; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="materia" value="<?php echo $materia; ?>" class="form-control" placeholder="Actualizar nombre de la Asignatura">	
					</div>
					<div class="form-group">
						<input type="text" name="docente" value="<?php echo $docente; ?>" class="form-control" placeholder="Actualizar nombre del docente">	
					</div>
					<div class="form-group">
						<input type="text" name="horario" value="<?php echo $horario; ?>" class="form-control" placeholder="Actualizar horario">	
					</div>

					
					<button class="btn btn-info" name="actualizar"> Actualizar</button>

					
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php")?>