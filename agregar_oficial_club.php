<?php

session_start();

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
							<a class="navbar-brand" href="home_ficha.php"><img src="./img/foto-sis/logo-afel.png" alt="" class="img-nav-active"></a>
							<button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
						</div>
						<div class="offcanvas-body">
							<ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
								<li class="mb-1">
									<a href="home_ficha.php">
										<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
											Inicio
										</button>
									</a>

								</li>
								<li class="mb-1">
									<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#equipos-collapse" aria-expanded="false">
										Equipos
									</button>
									<div class="collapse" id="equipos-collapse">
										<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
											<li><a href="agregar_equipo.php" class="offcanvas-title">Agregar Equipo</a></li>
											<li><a href="agregar_oficial_club.php" class="offcanvas-title">Agregar Oficial</a></li>
											<li><a href="buscar_equipo.php" class="offcanvas-title">Buscar Equipo</a></li>
											<li><a href="buscar_oficial_club.php" class="offcanvas-title">Buscar Oficial</a></li>
										</ul>
									</div>
								</li>
								<li class="mb-1">
									<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#jugadores-collapse" aria-expanded="false">
										Jugadores
									</button>
									<div class="collapse" id="jugadores-collapse">
										<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ">

											<li><a href="buscar_jugador_club_ficha.php" class="offcanvas-title">Buscar Jugador</a></li>
										</ul>
									</div>
								</li>
								<li class="mb-1">
									<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#entrenadores-collapse" aria-expanded="false">
										Entrenadores
									</button>
									<div class="collapse" id="entrenadores-collapse">
										<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

											<li><a href="buscar_entrenador_ficha.php" class="offcanvas-title">Buscar Entrenador</a></li>
										</ul>
									</div>
								</li>


							</ul>
							<div class="dropdown border-top">
								<a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none dropdown-toggle" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
									<?php echo $_SESSION['user']; ?>

									<img src="<?php echo $_SESSION['img']; ?>" alt="mdo" width="50" height="50" class="rounded-circle">
								</a>
								<ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
									<li><a class="dropdown-item" href="#">New project...</a></li>
									<li><a class="dropdown-item" href="#">Settings</a></li>
									<li><a class="dropdown-item" href="#">Profile</a></li>
									<li>
										<hr class="dropdown-divider">
									</li>
									<li><a class="dropdown-item" href="./controlador/cerrar_sesion.php">Sign out</a></li>
								</ul>
							</div>
						</div>

					</div>
				</div>
	</div>

	</nav>
	</header>
	<main class="main">



		<div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="./img/foto-sis/logo-afel.png" alt="" width="72" height="57">
			<h2>REGISTRO DE OFICIALES DEL CLUB</h2>
			<p class="lead">EN ESTA AREA SE REGISTRA TODOS LOS OFICIALES AL CLUB CORRESPONDIENTE</p>
		</div>

		<div class="row g-5 form">
			<div class="col-md-7 col-lg-8 form-h">
				<h4 class="titulo-at mb-3">Datos del Oficial</h4>
				<form class="needs-validation" enctype="multipart/form-data" method="POST" action="./controlador/agregar_oficial_club.php" novalidate>
					<div class="row g-5">
						<div class="col-sm-6">
							<label for="inputAddress">Primer Nombre</label>
							<input type="text" class="form-control" id="inputAddress" onkeyup="this.value=Text(this.value)" placeholder="Primer Nombre" name="nombre_usuario" required="">
							<div class="invalid-feedback">
								Ingrese el primer nombre
							</div>
						</div>

						<div class="col-sm-6">
							<label for="inputAddress">Segundo Nombre</label>
							<input type="text" class="form-control" id="inputAddress"  onkeyup="this.value=Text(this.value)" placeholder="Segundo Nombre" name="segundo_nombre_usuario" required="">
							<div class="invalid-feedback">
								Ingrese el segundo nombre
							</div>
						</div>
						<div class="col-sm-6">
							<label for="inputAddress">Primer Apellido</label>
							<input type="text" class="form-control" id="inputAddress"  onkeyup="this.value=Text(this.value)" placeholder="Primer Apellido" name="apellido_usuario" required="">
							<div class="invalid-feedback">
								Ingrese el primer apellido
							</div>
						</div>

						<div class="col-sm-6">
							<label for="inputAddress">Segundo Apellido</label>
							<input type="text" class="form-control" id="inputAddress" onkeyup="this.value=Text(this.value)" placeholder="Segundo Apellido" name="segundo_apellido_usuario" required="">
							<div class="invalid-feedback">
								Ingrese el segundo apellido
							</div>
						</div>
						<div class="col-sm-6">
							<label for="inputAddress">Cedula</label>
							<input type="text" class="form-control" id="inputAddress" onkeyup="this.value=Numeros(this.value)" placeholder="Cedula" name="ci_usuario" required="">
							<div class="invalid-feedback">
								Ingrese la cedula
							</div>
						</div>
						<div class="col-sm-6">
							<label for="inputAddress2">Fecha de Nacimiento</label>
							<input type="date" class="form-control" id="inputAddress2" name="fecha_nac" required="">
							<div class="invalid-feedback">
								Ingrese una fecha de nacimiento
							</div>
						</div>

						<div class="col-12">
							<label for="username" class="form-label">Nombre de Usuario</label>
							<div class="input-group has-validation">


								<input type="text" class="form-control" id="inputAddress" placeholder="Nombre de Usuario" name="usuario" required="">
								<div class="invalid-feedback">
									Ingrese un Usuario
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="inputAddress">Contraseña</label>
								<input type="password" class="form-control" id="inputAddress" placeholder="Contraseña" name="contraseña" required="">
							</div>
							<div class="invalid-feedback">
								Ingrese la Contraseña
							</div>
						</div>


						<div class="col-md-5">
							<label for="country" class="form-label">CLUB</label>
							<select class="form-select select-club" id="country" name="select-club" required="">
								<option value="">SELECCIONE</option>
								<?php

								include './modelo/conexion.php';

								$sql = "SELECT `id_club`, `nombre_club`, `fecha_fund`, `fecha_reg`, `id_status_sistema`, `tipo_acta`, `img_acta`, `tipo_logo`, `img_logo`, `id_status_club` FROM `club` ";

								$res = mysqli_query($conn, $sql);



								while ($row = mysqli_fetch_array($res)) {





									echo '<option value="' . $row['id_club'] . '">' . $row['nombre_club'] . '</option>';
								?>



								<?php



								}
								?>

							</select>
							<div class="invalid-feedback">
								Seleccione el club
							</div>
						</div>


						<div class="col-md-7">
							<label for="file">FOTO CARNET</label>
							<input class="form-control" name="foto" type="file" required="">
							<div class="invalid-feedback">
								Ingrese una foto
							</div>
						</div>
						
							<div class="col-md-7">
							<label for="file">FOTO DE LA CEDULA </label>
							<input class="form-control" name="foto_dt" type="file" required="">
							<div class="invalid-feedback">
								Ingrese una foto
							</div>
						</div>
					</div>

					<button class="w-100 btn btn-primary btn-lg" type="submit" name="guardar">GUARDAR</button>

				</form>

			</div>
		</div>




	</main>
	<footer class="footer">

	</footer>
	</div>
	<script src="./js/main.js"></script>
	<script src="./js/form-validation.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>

</html>