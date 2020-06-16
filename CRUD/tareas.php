<?php include("conexion.php") ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CRUD PHP MYSQL</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web\css\all.min.css">
</head>
<body>
	<?php include("header_tareas.php")?>
	
	<br>
	<div class="container">
		
			<!--Formulario-->
			<h2>TAREAS</h2>
			<h5>Semestre A, ciclo escolar 2019-2020</h5>

			<div class="row">
				<div class="col-m-4">
					<?php if(isset($_SESSION['mensaje'])) { ?>
						<div class="alert alert-warning alert-dismissible fade show" role="alert">
							<?=$_SESSION['mensaje']?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								 <span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php session_unset();} ?>
					
					<div class="card card-body">
						<h5 class="card-title">Ingresar los datos <i class="fas fa-save"></i> </h5>
						<form action="guardar_tareas.php" method="POST">
							<div class="form-group">
								<input type="text" name="titulo" class="form-control" placeholder="Titulo tarea" autofocus>
							</div>
							<div class="form-group">
								<textarea type=text name="descripcion" rows="2" class="form-control" placeholder="Descripcion"></textarea>
							</div>
							<input type="submit" class="btn btn-primary" name="guardar-tarea" value="Guardar Tarea">

							
							
						</form>
					</div>
				</div>

				<!--Seccion tabla-->
				<div class="col-md-8">
					<table class="table table-bordered table-hover">
						<thead class="thead-dark"">
							<tr>
								<th>Título</th>
								<th>Descripcion</th>
								<th>Fecha</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php //realizar la consulta de los datos de la tabla tarea
							$query="SELECT * FROM tipo_tarea";
							$resultado_tarea=mysqli_query($conexion,$query);
							while ($fila=mysqli_fetch_array($resultado_tarea)) { ?>
								<tr>
									<td><?php echo $fila["nombre"] ?></td>
									<td><?php echo $fila["descripcion"] ?></td>
									<td><?php echo $fila["fecha"] ?></td>
									<td>
										<a href="editar.php?id=<?php echo $fila['id']?>">
										 	<button class="btn btn-outline-dark"><i class="fas fa-pen"></i></button>
										</a>
										<a href="borrar.php?id=<?php echo $fila['id']?>">
											<button class="btn btn-outline-dark"><i class="fas fa-trash"></i></button>
										</a>
									</td>
								</tr>
							<?php  }?>
						</tbody>
						
					</table>
					
				</div>
				
			</div>

			
	</div>
	<br>
	<?php include("footer.php")?>

</body>
</html>

