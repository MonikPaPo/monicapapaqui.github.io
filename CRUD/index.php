<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>CRUD PHP MYSQL</title>
	<link rel="stylesheet" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo3.css">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Inicio</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid text-center">
			<div class="bg-light">
				<h1 class="display-1">Control Escolar:
				<small class="text-muted">Inicio</small></h1>
			</div>	
	</div>

			<nav class="navbar navbar-expand-sm bg-dark">
				<button class="navbar-toggler bg-sucess navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    				<span class="navbar-toggler-icon"></span>
  				</button>
  				<div class="collapse navbar-collapse" id="navbarNav">
	 			 <ul class="navbar-nav">
	   				 <li class="nav-item active">
	    				  <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
	    			</li>
	    			<li class="nav-item">
	     				 <a class="nav-link" href="tareas.php">Tareas</a>
	   			 	</li>
	    			<li class="nav-item">
	     				 <a class="nav-link" href="asignatura.php">Asignaturas</a>
	   			 	</li>
	  			</ul>
	  			</div>
			</nav>
	<br>
	
	<!--columnas-->
	<div class="container-fluid">

		<div class="row">
			<div class="col">
				<div class="row">
					<div class="col-lg-12 card-body">
					<nav class="caja1 navbar navbar-expand-sm navbar-dark">
						<form class="form-inline" action="/action_page.php">
    						<input class="form-control mr-sm-2" type="text" placeholder="Buscar">
    						<button class="btn btn-dark" type="submit">Buscar</button>
  						</form>
  					</nav>
					</div>

					

					<!--Carrusel de imagenes-->

					<div class="col-lg-12 card-body">
						<div id="demo" class="carousel slide" data-ride="carousel">
							  <ul class="carousel-indicators">
							    <li data-target="#demo" data-slide-to="0" class="active"></li>
							    <li data-target="#demo" data-slide-to="1"></li>
							    <li data-target="#demo" data-slide-to="2"></li>
							  </ul>
							  <div class="carousel-inner">
							    <div class="carousel-item active">
							      <img src="img/dos.jpg" alt="Los Angeles" width="400" height="400">
							      <div class="carousel-caption">
							        <h3>Eventos</h3>
							   
							      </div>   
							    </div>
							    <div class="carousel-item">
							      <img src="img/tres.jpg" alt="Chicago" width="400" height="400">
							      <div class="carousel-caption">
							        <h3>Calendario Escolar</h3>
							        
							      </div>   
							    </div>
							    <div class="carousel-item">
							      <img src="img/cuatro.jpg" alt="New York" width="400" height="400">
							      <div class="carousel-caption">
							        <h3>Opiniones</h3>
							        
							      </div>   
							    </div>
							  </div>
							  <a class="carousel-control-prev" href="#demo" data-slide="prev">
							    <span class="carousel-control-prev-icon"></span>
							  </a>
							  <a class="carousel-control-next" href="#demo" data-slide="next">
							    <span class="carousel-control-next-icon"></span>
							  </a>
						</div>
					</div>
					
				</div>
			</div>

			<div class="col">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
							<h2>Video post.</h2>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga. Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.</div>
						</div>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-body">
								<img src="img/uno.png" alt="Chicago" width="400" height="250" style="margin-bottom: 15px;">

							<h2>Post.</h2>

						Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.Lorem ipsum dolor sit amet, consectetur adipisicing elit. At perspiciatis repudiandae, sit magnam minima, eveniet debitis pariatur assumenda! Vitae suscipit, quaerat consequuntur. Possimus error, corporis laudantium autem necessitatibus aliquam fuga.</div>
						</div>
					</div>

				</div>
			</div>
		</div>


		
		 <!--Paginacion-->
		 <ul class="pagination justify-content-center" style="margin:20px 0">
		 	 <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
			  <li class="page-item"><a class="page-link" href="#">1</a></li>
			  <li class="page-item"><a class="page-link" href="#">2</a></li>
			  <li class="page-item"><a class="page-link" href="#">3</a></li>
			  <li class="page-item"><a class="page-link" href="#">Next</a></li>
		</ul> 	
	</div>
		<!--Pie de pagina-->
		<div class="card card-body text-white bg-dark">
	<div class="row">
			<div class="col">
				<div class="parrafo card-body">
					<h2>Informacion del Sitio</h2>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.
				</div>
			</div>

			<div class="col">
				<div class="parrafo card-body">
					<h2> Creditos</h2>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div>
			</div>

			<div class="col">
				<div class="parrafo card-body">
					<h2>Redes Sociales</h2>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div> 
			</div>
		
	</div>
	</div>
				
			</div>
		
	</div>

		<script type="text/javascript" src="js\jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js\bootstrap.min.js"></script>
		<script type="text/javascript" src="js\popper.min.js"></script>
	
</body>
</html>