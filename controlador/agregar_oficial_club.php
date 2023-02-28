<?php 
session_start();

require '../modelo/conexion.php';


if(isset($_POST['guardar'])){




	if (strlen($_POST['nombre_usuario']) &&  strlen($_POST['apellido_usuario']) && strlen($_POST['segundo_nombre_usuario']) && strlen($_POST['segundo_apellido_usuario']) && strlen($_POST['ci_usuario']) && strlen($_POST['fecha_nac']) && strlen($_POST['usuario']) && strlen($_POST['contraseña']) && strlen($_POST['select-club']) ) {


		$id_carnet_jug = 1;
		$nombre_us = $_POST['nombre_usuario'];
		$apellido_us = $_POST['apellido_usuario'];
		$segundoN_us = $_POST['segundo_nombre_usuario'];
		$segundoA_us = $_POST['segundo_apellido_usuario'];
		$ci_us = $_POST['ci_usuario'];
		$fecha_nac_us = $_POST['fecha_nac'];
		$fecha_reg_us = date("y/m/d h:i:s");
		$tipo_foto = $_FILES['foto']['type'];
		$nombre_img_us = $_FILES['foto']['name'];
		$url_img_us = "img/foto-jug/".$nombre_img_us;
		$imagen_us = $_FILES['foto']['tmp_name'];
		$tipo_foto_dt = $_FILES['foto_dt']['type'];
		$nombre_img_us_dt = $_FILES['foto_dt']['name'];
		$url_img_us_dt = "img/papeles-jug/" . $nombre_img_us_dt;
		$imagen_us_dt = $_FILES['foto_dt']['tmp_name'];
		$usuario_us = $_POST['usuario'];
		$clave_us = md5($_POST['contraseña']);
		$id_t_us = 6;
		$id_status_sistema_us = '1';
		$id_categoria = 8;
		$id_club = $_POST['select-club'];
		$id_status_verificacion = 1;


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
		`ci` = '$ci_us' ";



		$resul_ver_us = mysqli_query($conn, $sql_ver_us);
		$resul_ver_ci = mysqli_query($conn, $sql_ver_ci);


		
		if (mysqli_num_rows($resul_ver_us) > 0) {
			echo'<script type="text/javascript">
			alert("Usuario existente");
			window.location.href="../agregar_oficial_club.php";
			</script>';
		} elseif (mysqli_num_rows($resul_ver_ci) > 0) {
			echo'<script type="text/javascript">
			alert("Cedula existente");
			window.location.href="../agregar_oficial_club.php";
			</script>';
		} else {


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
			$res = mysqli_query($conn, $sql);

			if ($res) {

				move_uploaded_file($imagen_us, '../img/foto-jug/'.$nombre_img_us);
				move_uploaded_file($imagen_us_dt, '../img/foto-jug/' . $nombre_img_us_dt);
				echo'<script type="text/javascript">
				alert("Se ha registrado correctamente");
				window.location.href="../agregar_oficial_club.php";
				</script>';
			}else{
				echo mysqli_error($conn);
			}
		}
	}
}
}else{
	echo'<script type="text/javascript">
	alert("Debe llenar todos los campos");
	window.location.href="../agregar_oficial_club.php";
	</script>';
}



?>