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
							<a class="navbar-brand" href="index.html"><img src="./img/foto-sis/logo-afel.png" alt="" class="img-nav-active"></a>
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
		<br>
		<br>
		<br>
		<br>







		<div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
			<table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm" action="modificar_equipo.php" method="POST">
				<caption>List of users</caption>
				<thead class="thead-dark|thead-light">
					<tr>
						<th scope="col">#</th>
						<th scope="col">nombre</th>
						<th scope="col">logo</th>
						<th scope="col">fecha de registro</th>
						<th scope="col">fecha de fundacion</th>
						<th scope="col">estatus del sistema</th>
						<th scope="col">estatus del club</th>

						<th scope="col">modificar</th>
					</tr>
				</thead>
				<tbody>
					<?php

					include './modelo/conexion.php';

					$sql = "SELECT `club`.`id_club`, `club`.`nombre_club`, `club`.`fecha_fund`, `club`.`fecha_reg`, `club`.`id_status_sistema`, `status_sistema`.`nombre_status_sistema`,`club`.`tipo_acta`, `club`.`img_acta`, `club`.`tipo_logo`, `club`.`img_logo`, `club`.`id_status_club`, `status_club`.`nombre_status_club` FROM `club`, `status_sistema`, `status_club` WHERE `club`.`id_status_club` = `status_club`.`id_status_club`  AND `club`.`id_status_sistema` = `status_sistema`.`id_status_sistema` ";



					$res = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($res)) {


					?>

						<tr>

							<td><?php echo $row['id_club']; ?></td>
							<td><?php echo $row['nombre_club']; ?></td>
							<td>
								<img class="img_buscar" width="100" height="100"  src="<?php echo $row['img_logo'] ?>">
							</td>
							<td scope="col"><?php echo $row['fecha_reg']; ?></td>
							<td scope="col"><?php echo $row['fecha_fund']; ?></td>
							<td scope="col"><?php echo $row['nombre_status_sistema']; ?></td>
							<td scope="col"><?php echo $row['nombre_status_club']; ?></td>
							<td><a href="./modificar_equipo.php?id_club=<?php echo $row['id_club']; ?>" name="seleccionar"><i class="fa-solid fa-pen-to-square"></i></a></td>
						</tr>

					<?php
					}
					?>


				</tbody>
			</table>
		</div>


	</main>
	<footer class="footer">

	</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script type="text/javascript" src="./js/bootstrap.min.js"></script>
</body>

</html>