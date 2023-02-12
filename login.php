<?php 

require './modelo/conexion.php';

session_start();


$id_t_us = $_SESSION['id_t_user'];


switch ($id_t_us) {
	case '6':
	header("location: ./home_club.php");
	break;
	case '4':
	header("location: ./home_ficha.php");
	break;
	case '':
	header("location: ./login.php");;
	break;
}








 ?>










<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AFEL</title>
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="./css/estilos.css">
	
	<link rel="stylesheet" href="./js/bootstrap.js">
	<link rel="stylesheet" href="./css/normalize.css">
	<script src="https://kit.fontawesome.com/f9302dd666.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class="content">
	
		<header>
			<nav class="navbar navbar-dark  fixed-top">
				<div class="container-fluid">

					<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
						<div class="offcanvas-header">
							<a class="navbar-brand" href="index.html"><img src="./img/foto-sis/logo-afel.png" alt="" class="img-nav-active"></a>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
								<li class="mb-1">
									<a href="index.html">
										<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
										Inicio
									</button>
								</a>
									
								</li>
								<li class="mb-1">
									<a href="login.php">
										<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
										Iniciar Sesion
									</button>
								</a>
									
								</li>


								

							</ul>

						</div>
					</div>
				</div>

			</nav>
		</header>

		<main class="form-signin">
			<form class="form-login needs-validation" method="POST" action="./controlador/controlador-login.php" novalidate>
				<img class="mb-4" src="./img/foto-sis/logo-afel.png" alt="" >
				<h1 class="h3 mb-3 fw-normal">Inicio de sesion</h1>

		
				<div class="form-floating">
					
				<div class="col-12">
							
							<div class="input-group has-validation">
								<input type="text" class="form-control" id="inputAddress" placeholder="Nombre de Usuario" name="user" required="">
								<div class="invalid-feedback">
								Ingrese un Usuario
								</div>
							</div>
						</div>
						</div>
						<div class="col-12">
							<div class="form-group">
							
								<input type="password" class="form-control" id="inputAddress" placeholder="Contraseña" name="pass" required="">
							</div>
							<div class="invalid-feedback">
								Ingrese la Contraseña
							</div>
						</div>

				
				<button class="w-100 btn btn-lg btn-primary" type="submit" name="btn-enviar">Iniciar Sesion</button>
			
			</form>
		</main>

		<footer class="footer">

		</footer>
	</div>
	<script src="./js/form-validation.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>
</html>