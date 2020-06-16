<?php  include("conexion.php")?>
<!DOCTYPE html>
<html lang="esp">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.11.2-web\css\all.min.css">
	<title>Asignatura</title>
</head>
<body>
	<?php include("header.php")?>
	<br>
	<div class="container">
		<h2>ASIGNATURA</h2>
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
				</div>

				<div class="card card-body">
					<h5 class="card-title">Ingresar los datos <i class="fas fa-save"></i> </h5>
						<form action="guardar_asig.php" method="POST">
							<div class="form-group">
								<input type="text" name="materia" class="form-control " placeholder="Nombre de la asignatura" autofocus>
							</div>
							<div class="form-group">
								<input type="text" name="docente" class="form-control" placeholder="Nombre del docente" autofocus>
							</div>
							<div class="form-group">
								<input type="text" name="horario" class="form-control" placeholder="Horario" autofocus>
							</div>
							<input type="submit" class="btn btn-primary" name="guardar-asignatura" value="Guardar datos">
						</form>
					</div>


				<!--Tabla-->
				<div class="col-md-8">
					<table class="table table-bordered table-hover">
						<thead class="thead-dark"">
							<tr>
								<th>Materia</th>
								<th>Docente</th>
								<th>Horario</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php //realizar la consulta de los datos de la tabla tarea
							$query="SELECT * FROM asignatura";
							$resultado_asig=mysqli_query($conexion,$query);
							while ($fila=mysqli_fetch_array($resultado_asig)) { ?>
								<tr>
									<td><?php echo $fila["materia"] ?></td>
									<td><?php echo $fila["docente"] ?></td>
									<td><?php echo $fila["horario"] ?></td>
									<td>
										<a href="editar_asig.php?idm=<?php echo $fila['idm']?>">
										 	<button class="btn btn-outline-dark"><i class="fas fa-pen"></i> Editar</button>
										</a>
										<a href="borrar_asig.php?idm=<?php echo $fila['idm']?>">
											<button class="btn btn-outline-dark"><i class="fas fa-trash"></i>Borrar</button>
										</a>
									</td>
								</tr>
							<?php  }?>
						</tbody>
						
					</table>
					
				</div>
	    </div>
	<br>

	
</div>


	<?php include("footer.php")?>
</body>
</html>
