<?php 
session_start();
require '../modelo/conexion.php';


$id_us = $_POST['id_us'];

$nombre_us = $_POST['nombre_usuario'];
$apellido_us = $_POST['apellido_usuario'];
$segundoN_us = $_POST['segundo_nombre_usuario'];
$segundoA_us = $_POST['segundo_apellido_usuario'];
$ci_us = $_POST['ci_usuario'];
$fecha_nac_us = $_POST['fecha_nac'];

		//foto carnet
$tipo_foto = $_FILES['foto']['type'];
$nombre_img_us = $_FILES['foto']['name'];
$url_img_us = "img/foto-ent/".$nombre_img_us;
$imagen_us = $_FILES['foto']['tmp_name'];

		//foto cedula

$tipo_foto_dt = $_FILES['foto_dt']['type'];
$nombre_img_us_dt = $_FILES['foto_dt']['name'];
$url_img_us_dt = "img/papeles-jug/" . $nombre_img_us_dt;
$imagen_us_dt = $_FILES['foto_dt']['tmp_name'];


$id_status_sistema_us = $_POST['select-status'];
$id_club_us = $_SESSION['id_club'];
$id_categoria = $_POST['select-categoria'];
$id_status_verificacion = $_POST['select-status-verificacion'];


if (isset($imagen_us) && $imagen_us != "" || isset($imagen_us) && $imagen_us != "") 
{
	$sql = "UPDATE
    `usuario`
SET
    `nombre_usuario` = '$nombre_us',
    `segundoN` = '$segundoN_us',
    `apellido` = '$apellido_us',
    `segundoA` = '$segundoA_us',
    `ci` = '$ci_us',
    `fecha_nac` = '$fecha_nac_us',
    `imagen_us` = '$url_img_us',
    `tipo_imagen` = '$tipo_foto',
    `tipo_imagen_dt` = '$tipo_foto_dt',
    `image_dt` = '$url_img_us_dt',
    `id_status_sistema` = '$id_status_sistema_us',
    `id_categoria` = '$id_categoria',
    
WHERE
    `id_usuario` = '$id_us'";

	$res = mysqli_query($conn, $sql);

	if ($res) {

		move_uploaded_file($imagen_us, '../img/foto-ent/'.$nombre_img_us);
		move_uploaded_file($imagen_us_dt, '../img/papeles-ent/'.$nombre_img_us_dt);

		echo'<script type="text/javascript">
		alert("Se ha modificado correctamente");
		window.location.href="../buscar_entrenador_club.php";
		</script>';
	}else{
		echo mysqli_error($conn);
	}
	
}
else{

	$sql = "UPDATE
    `usuario`
SET
    `nombre_usuario` = '$nombre_us',
    `segundoN` = '$segundoN_us',
    `apellido` = '$apellido_us',
    `segundoA` = '$segundoA_us',
    `ci` = '$ci_us',
    `fecha_nac` = '$fecha_nac_us',
    `id_status_sistema` = '$id_status_sistema_us',
    `id_categoria` = '$id_categoria',
  
WHERE
    `id_usuario` = '$id_us'";
	
	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo'<script type="text/javascript">
		alert("Se ha modificado correctamente");
		window.location.href="../buscar_entrenador_club.php";
		</script>';
	}else{
		echo mysqli_error($conn);
	}
}







?>