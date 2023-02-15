	<?php
	session_start();

	require '../modelo/conexion.php';


	if (isset($_POST['guardar'])) {




		if (strlen($_POST['nombre_usuario']) &&  strlen($_POST['apellido_usuario']) && strlen($_POST['segundo_nombre_usuario']) && strlen($_POST['segundo_apellido_usuario']) && strlen($_POST['ci_usuario']) && strlen($_POST['fecha_nac']) && strlen($_POST['usuario']) && strlen($_POST['contraseña']) && strlen($_POST['select-categoria'])) {


			//JUGADORES

			$id_carnet_jug = 1;
			$nombre_us = $_POST['nombre_usuario'];
			$apellido_us = $_POST['apellido_usuario'];
			$segundoN_us = $_POST['segundo_nombre_usuario'];
			$segundoA_us = $_POST['segundo_apellido_usuario'];
			$ci_us = $_POST['ci_usuario'];
			$fecha_nac_us = $_POST['fecha_nac'];
			$fecha_ven_us = $_POST['fecha_ven'];
			$fecha_reg_us = date("y/m/d h:i:s");
			$tipo_foto = $_FILES['foto']['type'];
			$nombre_img_us = $_FILES['foto']['name'];
			$url_img_us = "img/foto-jug/" . $nombre_img_us;
			$imagen_us = $_FILES['foto']['tmp_name'];
			$tipo_foto_dt = $_FILES['foto_dt']['type'];
			$nombre_img_us_dt = $_FILES['foto_dt']['name'];
			$url_img_us_dt = "img/papeles-jug/" . $nombre_img_us_dt;
			$imagen_us_dt = $_FILES['foto_dt']['tmp_name'];
			$usuario_us = $_POST['usuario'];
			$clave_us = md5($_POST['contraseña']);
			$id_t_us = 7;
			$id_status_sistema_us = 1;
			$id_club_us = $_SESSION['id_club'];
			$id_categoria = $_POST['select-categoria'];
			$id_status_verificacion = 2;


			//REPRESENTANTE


			$nombre_us_representante = $_POST['nombre_usuario_representante'];
			$apellido_us_representante = $_POST['apellido_usuario_representante'];
			$segundoN_us_representante = $_POST['segundo_nombre_usuario_representante'];
			$segundoA_us_representante = $_POST['segundo_apellido_usuario_representante'];
			$ci_us_representante = $_POST['ci_usuario_representante'];
			$fecha_nac_us_representante = $_POST['fecha_nac_representante'];
			$fecha_reg_us_representante = date("y/m/d h:i:s");
			$id_status_sistema_us_representante = 1;
			$tlf_representante =  $_POST['tlf_representante'];
			$direccion_representante = $_POST['direccion_representante'];
			$tipo_foto_ci = $_FILES['foto_ci']['type'];
			$nombre_img_us_ci = $_FILES['foto_ci']['name'];
			$url_img_us_ci = "img/papeles-repre/" . $nombre_img_us_ci;
			$imagen_us_ci = $_FILES['foto_ci']['tmp_name'];

			$id_status_repre = 1;

			//control categoria y club
			$c_cat = 8;
			$c_club = 2;
			//control status sistema y verificacion para fichaje
			$v_status = 2;
			$s_status = 2;


			$sql_ver_us = "SELECT
			`id_usuario`,
			`nombre_usuario`,
			`segundoN`,
			`apellido`,
			`segundoA`,
			`ci`,
			`fecha_nac_us`,
			`fecha_registro_us`,
			`imagen_us`,
			`tipo_imagen`,
			`tipo_imagen_dt`,
			`image_dt`,
			`usuario`,
			`clave`,
			`id_t_usuario`,
			`id_status_sistema`,
			`id_club`,
			`id_categoria`,
			`id_status_verificacion`,
			`id_carnet_jug`
			FROM
			`usuario`
			WHERE
			`usuario` = '$usuario_us' ";

			$sql_ver_ci = "SELECT
			`id_usuario`,
			`nombre_usuario`,
			`segundoN`,
			`apellido`,
			`segundoA`,
			`ci`,
			`fecha_nac_us`,
			`fecha_registro_us`,
			`imagen_us`,
			`tipo_imagen`,
			`tipo_imagen_dt`,
			`image_dt`,
			`usuario`,
			`clave`,
			`id_t_usuario`,
			`id_status_sistema`,
			`id_club`,
			`id_categoria`,
			`id_status_verificacion`,
			`id_carnet_jug`
			FROM
			`usuario`
			WHERE
			`ci` = '$ci_us'";

			



			$resul_ver_us = mysqli_query($conn, $sql_ver_us);
			$resul_ver_ci = mysqli_query($conn, $sql_ver_ci);
			


			if (mysqli_num_rows($resul_ver_us) > 0) {
				echo'<script type="text/javascript">
				alert("Usuario existente");
				window.location.href="../agregar_jugador_club.php";
				</script>';
			} elseif (mysqli_num_rows($resul_ver_ci) > 0) {
				echo'<script type="text/javascript">
				alert("Cedula existente");
				window.location.href="../agregar_jugador_club.php";
				</script>';
			}elseif ($id_categoria == $c_cat){

				echo'<script type="text/javascript">
				alert("Debe seleccionar una categoria valida");
				window.location.href="../agregar_jugador_club.php";
				</script>';

			} elseif ($id_club_us == $c_club) {
				echo'<script type="text/javascript">
				alert("Usted no tiene acceso a esta accion");
				window.location.href="../agregar_jugador_club.php";
				</script>';			
			}else {


					if (!((strpos($tipo_foto, 'jpg') || strpos($tipo_foto, 'jpeg') || strpos($tipo_foto, 'png') || strpos($tipo_foto_ci, 'jpg') || strpos($tipo_foto_ci, 'jpeg') || strpos($tipo_foto_ci, 'png') || strpos($tipo_foto_dt, 'jpg') || strpos($tipo_foto_dt, 'jpeg') || strpos($tipo_foto_dt, 'png')))) {

						echo'<script type="text/javascript">
						alert("Solo se permiten archivos JPG, PNG, JPEG");

						</script>';
					} else {


						$sql = "INSERT INTO usuario(
						
						`nombre_usuario`,
						`segundoN`,
						`apellido`,
						`segundoA`,
						`ci`,
						`fecha_nac_us`,
						`fecha_registro_us`,
						`imagen_us`,
						`tipo_imagen`,
						`tipo_imagen_dt`,
						`image_dt`,
						`usuario`,
						`clave`,
						`id_t_usuario`,
						`id_status_sistema`,
						`id_club`,
						`id_categoria`,
						`id_status_verificacion`,
						`id_carnet_jug`
						)
						VALUES(
						'" . $nombre_us . "',
						'" . $segundoN_us . "',
						'" . $apellido_us . "',
						'" . $segundoA_us . "',
						'" . $ci_us . "',
						'" . $fecha_nac_us . "',
						'" . $fecha_reg_us . "',
						'" . $url_img_us . "',
						'" . $tipo_foto . "',
						'" . $tipo_foto_dt . "',
						'" . $url_img_us_dt . "',
						'" . $usuario_us . "',
						'" . $clave_us . "',
						'" . $id_t_us . "',
						'" . $id_status_sistema_us . "',
						'" . $id_club_us . "',
						'" . $id_categoria . "',
						'" . $id_status_verificacion . "',
						'" . $id_carnet_jug . "'
					)";



					$sql_repre = "INSERT INTO `representante`(


					`nombre_representante`,
					`segundoN_representante`,
					`apellido_representante`,
					`segundoA_representante`,
					`ci_representante`,
					`fecha_nac`,
					`fecha_registro`,
					`tlf`,
					`direccion`,
					`ci_imagen_representante`,
					`tipo_imagen_representante`,
					`id_status_sistema`,
					`id_status_representante`
					)
					VALUES(

					'" . $nombre_us_representante . "',
					'" . $segundoN_us_representante . "',
					'" . $apellido_us_representante . "',
					'" . $segundoA_us_representante . "',
					'" . $ci_us_representante . "',
					'" . $fecha_nac_us_representante . "',
					'" . $fecha_reg_us_representante . "',
					'" . $tlf_representante . "',
					'" . $direccion_representante . "',
					'" . $url_img_us_ci . "',
					'" . $tipo_foto_ci . "',
					'" . $id_status_sistema_us_representante . "',
					'" . $id_status_repre . "'
				)";





				$res = mysqli_query($conn, $sql);
				$res_repre = mysqli_query($conn, $sql_repre);






				if ($res && $res_repre) {

					$sql_itu = "SELECT
					`usuario`.`id_usuario`,
					`usuario`.`nombre_usuario`,
					`usuario`.`segundoN`,
					`usuario`.`apellido`,
					`usuario`.`segundoA`,
					`usuario`.`ci`,
					`usuario`.`fecha_nac`,
					`usuario`.`fecha_registro`,
					`usuario`.`imagen_us`,
					`usuario`.`tipo_imagen`,
					`usuario`.`tipo_imagen_dt`,
					`usuario`.`image_dt`,
					`usuario`.`usuario`,
					`usuario`.`clave`,
					`usuario`.`id_t_usuario`,
					`usuario`.`id_status_sistema`,
					`usuario`.`id_club`,
					`usuario`.`id_categoria`,
					`usuario`.`id_status_verificacion`,
					`usuario`.`id_carnet_jug`,
					`representante`.`id_representante`,
					`representante`.`ci_representante`
					FROM
					`usuario`,
					`representante`
					WHERE
					`usuario`.`ci` = $ci_us AND `representante`.`ci_representante` = $ci_us_representante ";

					$res_itu = mysqli_query($conn, $sql_itu);

					while ($rows = mysqli_fetch_assoc($res_itu)) {

						$id_us = $rows['id_usuario'];
						$id_repre = $rows['id_representante'];

						$sql_t_us =
						"INSERT INTO `representante_to_usuario`(

						`id_representante`,
						`id_usuario`
						)
						VALUES('$id_repre', '$id_us')";


						$sql_fichaje = "INSERT INTO `fichaje`(

						`id_club`,
						`id_usuario`,
						`id_status_sistema`,
						`fecha_i`,
						`fecha_f`,
						`id_status_verificacion`,
						`direccion`
						)
						VALUES(

						'" . $id_club_us . "',
						'" . $id_us . "',
						'" . $id_status_sistema_us . "',
						'" . $fecha_reg_us . "',
						'" . $fecha_ven_us . "',
						'" . $id_status_verificacion . "',
						'" . $direccion_representante . "'
					)";

					$sql_historico_fichaje = "INSERT INTO `historico_fichaje`(

					`id_club`,
					`id_usuario`,
					`id_status_sistema`,
					`fecha_i`,
					`fecha_f`,
					`id_status_verificacion`,
					`direccion`
					)
					VALUES(

					'" . $id_club_us . "',
					'" . $id_us . "',
					'" . $id_status_sistema_us . "',
					'" . $fecha_reg_us . "',
					'" . $fecha_ven_us . "',
					'" . $id_status_verificacion . "',
					'" . $direccion_representante . "'
				)";


				$insert_sql_t_us = mysqli_query($conn, $sql_t_us);
				$insert_sql_fichaje = mysqli_query($conn, $sql_fichaje);
				$insert_sql_historico_fichaje = mysqli_query($conn, $sql_historico_fichaje);

				if ($insert_sql_t_us) {
					move_uploaded_file($imagen_us, '../img/foto-jug/' . $nombre_img_us);
					move_uploaded_file($imagen_us_dt, '../img/papeles-jug/' . $nombre_img_us_dt);
					move_uploaded_file($imagen_us_ci, '../img/papeles-repre/' . $nombre_img_us_ci);
					
					echo'<script type="text/javascript">
					alert("Se ha registrado correctamente");
					window.location.href="../agregar_jugador_club.php";
					</script>';
				}
			}
		} else {
			echo mysqli_error($conn);
		}
	}
}
} else {
	echo'<script type="text/javascript">
	alert("Debe llenar todos los campos");
	window.location.href="../agregar_jugador_club.php";
	</script>';
}
}










		