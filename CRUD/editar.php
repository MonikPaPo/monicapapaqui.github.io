<?php  
include("conexion.php");
//Obtener datos

if(isset($_GET['id'])){
	$id=$_GET['id'];
	$query="SELECT*FROM tipo_tarea WHERE id=$id";
	$resultado=mysqli_query($conexion, $query);
		if(mysqli_num_rows($resultado)==1){
			//echo puedes modificar

			$columna=mysqli_fetch_array($resultado);
			$titulo= $columna['nombre'];
			$descripcion = $columna['descripcion'];
		}
}

if(isset($_POST['actualizar'])){
	$id= $_GET['id'];
	$titulo= $_POST['Nombre'];
	$descripcion= $_POST['Descripcion'];
	


	$query="UPDATE tipo_tarea set nombre= '$titulo', descripcion= '$descripcion' WHERE id=$id";
	mysqli_query($conexion, $query);
	header("location:tareas.php");

}
?>

<?php include("header.php")?>
<div class="container p-4">
	<div class="row">
		<div class="col-md-4 mx-auto">
			<div class="card card-body">
				<h5 class="card-title">Ingresar los datos <i class="fas fa-save"></i> </h5>
				<!--se crea formulario-->
				<form action="editar.php?id=<?php echo $_GET[id]; ?>" method="POST">
					<div class="form-group">
						<input type="text" name="Nombre" value="<?php echo $titulo; ?>" class="form-control" placeholder="Actualizar el titulo">	
					</div>

					<div class="form-group">
						<textarea name="Descripcion" rows="2" class="form-control" placeholder="Actualiza la descripcion"><?php echo $descripcion;?></textarea>
					</div>
					<button class="btn btn-info" name="Actualizar"> Actualizar</button>

					
				</form>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php")?>
