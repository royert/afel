<?php 


require './modelo/conexion.php';







if (isset($_POST['guardar'])) {

	$nombre_club = $_POST['nombre'];

	$sql= "SELECT `id_club`, `nombre_club`, `fecha_fund`, `fecha_reg`, `id_status_sistema`, `tipo_acta`, `img_acta`, `tipo_logo`, `img_logo`, `id_status_club` FROM `club` WHERE nombre_club = '$nombre_club' ";

	$resultado_sql = mysqli_query($conn, $sql);

	if (mysqli_num_rows($resultado_sql) > 0) {
	
		echo "club existente";
		
	}else{
	
	



		$nombre_logo = $_FILES['foto']['name'];
		$nombre_acta = $_FILES['acta']['name'];
		if(isset($nombre_logo) && $nombre_logo != "" || isset($nombre_acta) && $nombre_acta != ""){
			if (strlen($_POST['nombre']) && strlen($_POST['fecha_fund'])) {
				//zona horaria
				date_default_timezone_set('America/Caracas');
			//datos de los campos de texto	
				$name = $_POST['nombre'];
				$fecha_fund = $_POST['fecha_fund'];
				$fecha_reg = date("y/m/d h:i:s");
				$status_sis = '1';
				$status_club = $_POST['select-club'];
				

			//datos de la imagen del logo
				$url_logo = "img/logo/".$nombre_logo;
				$tamano = $_FILES['foto']['size'];
				$tipo_logo = $_FILES['foto']['type'];
				$img_logo = $_FILES['foto']['tmp_name'];

			//datos de la imagen del acta
				$url_acta = "img/acta/".$nombre_acta;
				$tamanoa = $_FILES['acta']['size'];
				$tipo_acta = $_FILES['acta']['type'];
				$img_acta = $_FILES['acta']['tmp_name'];

				if (! ((strpos($tipo_logo, 'jpg') || strpos($tipo_logo, 'jpeg') || strpos($tipo_logo, 'png') && strpos($tipo_acta, 'jpg') || strpos($tipo_acta, 'jpeg') || strpos($tipo_acta, 'png') ))) {

					echo "solo se permiten archivos jpg, jpeg, png";
				}else{

						//consulta sql


					$sql = "INSERT INTO `club`(
						`nombre_club`,
						`fecha_fund`,
						`fecha_reg`,
						`id_status_sistema`,
						`tipo_acta`,
						`img_acta`,
						`tipo_logo`,
						`img_logo`,
						`id_status_club`
					)
					VALUES(
						'".$name."',
						'".$fecha_fund."',
						'".$fecha_reg."',
						'".$status_sis."',
						'".$tipo_acta."',
						'".$url_acta."',
						'".$tipo_logo."',
						'".$url_logo."',
						'".$status_club."'
					) ";
					$res = mysqli_query($conn, $sql);


					if ($res) {
						move_uploaded_file($img_logo, '../img/logo/'.$nombre_logo);
						move_uploaded_file($img_acta, '../img/acta/'.$nombre_acta);
						header("location: ../agregar_equipo.php");
					}else{
						echo mysqli_error($conn);
					}
				}
			}
		}
	}
}


?>