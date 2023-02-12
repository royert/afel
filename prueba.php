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
											<li><a href="agregar_equipo.php" class="offcanvas-title">Agregar Equipo</a>
											</li>
											<li><a href="agregar_oficial_club.php" class="offcanvas-title">Agregar
											Oficial</a></li>
											<li><a href="buscar_equipo.php" class="offcanvas-title">Buscar Equipo</a>
											</li>
											<li><a href="buscar_oficial_club.php" class="offcanvas-title">Buscar
											Oficial</a></li>
										</ul>
									</div>
								</li>
								<li class="mb-1">
									<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#jugadores-collapse" aria-expanded="false">
										Jugadores
									</button>
									<div class="collapse" id="jugadores-collapse">
										<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ">

											<li><a href="buscar_jugador_club_ficha.php" class="offcanvas-title">Buscar
											Jugador</a></li>
										</ul>
									</div>
								</li>
								<li class="mb-1">
									<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title" data-bs-toggle="collapse" data-bs-target="#entrenadores-collapse" aria-expanded="false">
										Entrenadores
									</button>
									<div class="collapse" id="entrenadores-collapse">
										<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">

											<li><a href="buscar_entrenador_ficha.php" class="offcanvas-title">Buscar
											Entrenador</a></li>
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
									<li><a class="dropdown-item" href="./controlador/cerrar_sesion.php">Sign out</a>
									</li>
								</ul>
							</div>
						</div>

					</div>
					<form class="d-flex" method="POST" action="./controlador/mostrar.php">
						<input class="form-control me-2 light-table-filter" data-table="table_id" type="text" placeholder="Buscar" name="enviar">
						<hr>
						
					</form>

				</div>
			</div>

		</nav>
	</header>
	<main class="main">
		<div class="div-form row g-5 form">
			<div class="">
				<form method="POST">
					<div class="col-sm-2 form-check">
						<select class="form-select select-sis " category="club" id="country" name="select-sis">
							<option value="1">SELECCIONE</option>
							<?php

							include './modelo/conexion.php';

							$sql = "SELECT
							`id_status_sistema`,
							`nombre_status_sistema`
							FROM
							`status_sistema` ";
							$res = mysqli_query($conn, $sql);



							while ($row = mysqli_fetch_array($res)) {





								echo '<option value="' . $row['id_status_sistema'] . '">' . $row['nombre_status_sistema'] . '</option>';
								?>



								<?php



							}
							?>

						</select>
					</div><div class="col-sm-2 form-check">
						<select class="form-select select-ver " category="club" id="country" name="select-ver">
							<option value="">SELECCIONE</option>
							<?php

							include './modelo/conexion.php';

							$sql = "SELECT
							`id_status_verificacion`,
							`nombre_verificacion`
							FROM
							`status_verificacion`";
							$res = mysqli_query($conn, $sql);



							while ($row = mysqli_fetch_array($res)) {





								echo '<option value="' . $row['id_status_verificacion'] . '">' . $row['nombre_verificacion'] . '</option>';
								?>



								<?php



							}
							?>

						</select>
					</div>
					<div class="col-sm-2 form-check">
						<select class="form-select select-club " category="club" id="country" name="select-club">
							<option value="LIKE '%'">SELECCIONE</option>
							<?php

							include './modelo/conexion.php';

							$sql = "SELECT
							`id_club`,
							`nombre_club`,
							`fecha_fund`,
							`fecha_reg`,
							`id_status_sistema`,
							`tipo_acta`,
							`img_acta`,
							`tipo_logo`,
							`img_logo`,
							`id_status_club`
							FROM
							`club` ";
							$res = mysqli_query($conn, $sql);



							while ($row = mysqli_fetch_array($res)) {





								echo '<option value="' . $row['id_club'] . '">' . $row['nombre_club'] . '</option>';
								?>



								<?php



							}
							?>

						</select>
					</div>
					<div class="col-sm-2 form-check">

						<select class="form-select select-categoria " category="all" id="country" name="select-categoria">
							<option value="LIKE '%'">SELECCIONE</option>
							<?php

							include './modelo/conexion.php';

							$sql = "SELECT
							`categoria`.`id_categoria`,
							`categoria`.`nombre_categoria`
							FROM
							`categoria` ";

							$res = mysqli_query($conn, $sql);



							while ($row = mysqli_fetch_array($res)) {





								echo '<option value="' . $row['id_categoria'] . '">' . $row['nombre_categoria'] . '</option>';
								?>



								<?php



							}
							?>

						</select>
						<button id="buscar" class="btn btn-outline-success" name="buscar" tpe="buttom" >Buscar</button>
					</div>
				</form>
			</div>
		</div>
	</div>






	<div class="table-responsive table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl table_jug">

		<table class="table table-striped table-bordered table-borderless table-hover table_id table-sm">
			<caption>List of users</caption>
			<thead class="thead-dark|thead-light">
				<tr>

					<th scope="col">nombre</th>
					<th scope="col">apellido</th>
					<th scope="col">ci</th>
					<th scope="col">fecha de nacimiento</th>
					<th scope="col">fecha de registro</th>
					<th scope="col">imagen</th>

					<th scope="col">estatus de sistema</th>

					<th scope="col">club</th>
					<th scope="col">categoria</th>
					<th scope="col">verificacion</th>
					<th scope="col">modificar</th>

				</tr>
			</thead>





			<tbody>

				<?php


				include './modelo/conexion.php';
				$tipo_jug = 7;
				//$id_club_us = $_SESSION['id_club']
				$ac = $_POST['select-sis'];
				$club = $_POST['select-club'];
				$cat = $_POST['select-categoria'];
				$ver = $_POST['select-ver'];

				

				$sql = "SELECT
   				 *
				FROM
				`listado`
				WHERE
				`id_status_sistema` = $ac AND $club = $club	 AND `id_categoria` = $cat AND `id_status_verificacion` = $ver";






				$res = mysqli_query($conn, $sql);




				while ($row = mysqli_fetch_assoc($res)) {


					?>

					<tr>


						<td><?php echo $row['nombre_usuario']; ?></td>
						<td scope="col">
							<?php echo $row['apellido']; ?>
						</td>
						<td scope="col"><?php echo $row['ci']; ?></td>
						<td scope="col">
							<?php echo $row['fecha_nac']; ?>
						</td>
						<td scope="col"><?php echo $row['fecha_registro']; ?></td>
						<td>
							<img class="img_buscar img-thumbnail" width="100" height="100" src="<?php echo $row['imagen_us'] ?>">
						</td>
						<td scope="col">
							<?php echo $row['nombre_status_sistema']; ?>
						</td>
						<td scope="col"><?php echo $row['nombre_club']; ?></td>
						<td scope="col">
							<?php echo $row['nombre_categoria']; ?>
						</td>
						<td scope="col"><?php echo $row['nombre_verificacion']; ?></td>


						<td><a href="./modificar_jugador_ficha.php?id_user=<?php echo $row['id_usuario']; ?>" name="seleccionar"><i class="fa-solid fa-pen-to-square"></i></a></td>

					</tr>

					<?php
				}

				?>


			</tbody>
		</table>
	</div>
	<a href="./controlador/carnet_por_club.php">
		<button class="btn btn-toggle align-items-center rounded collapsed offcanvas-title">
			Imprimir Carnet
		</button>
	</a>
</main>
<footer class="footer">

</footer>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script type="text/javascript" src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/buscar_jugador_club_ficha.js"></script>
<script type="text/javascript" src="./js/buscar_filtro.js"></script>

</body>

</html>