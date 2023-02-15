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
		
		$tipo_foto = $_FILES['foto']['type'];
		$nombre_img_us = $_FILES['foto']['name'];
		$url_img_us = "img/foto-jug/".$nombre_img_us;
		$imagen_us = $_FILES['foto']['tmp_name'];
		
	
		$id_status_sistema_us = $_POST['select-status'];
		$id_club = $_POST['select-club'];
		$id_categoria = 9;
		$id_status_verificacion = 1;


if (isset($imagen_us) && $imagen_us != "" ) 
	{
$sql = "UPDATE `usuario` SET `nombre_usuario`='$nombre_us',`segundoN`='$segundoN_us',`apellido`='$apellido_us',`segundoA`='$segundoA_us',`ci`='$ci_us',`fecha_nac_us`='$fecha_nac_us', `imagen_us`='$url_img_us', `tipo_imagen`='$tipo_foto', `id_status_sistema`='$id_status_sistema_us', `id_club` = '$id_club',`id_categoria`='$id_categoria',`id_status_verificacion`='$id_status_verificacion' WHERE `id_usuario` = '$id_us' ";

		$res = mysqli_query($conn, $sql);

		if ($res) {

			move_uploaded_file($imagen_us, '../img/foto-jug/'.$nombre_img_us);
			
			
			header("location: ../buscar_oficial_club.php");
		}else{
			echo mysqli_error($conn);
		}
	
}
else{

	$sql = "UPDATE `usuario` SET `nombre_usuario`='$nombre_us',`segundoN`='$segundoN_us',`apellido`='$apellido_us',`segundoA`='$segundoA_us',`ci`='$ci_us',`fecha_nac_us`='$fecha_nac_us',  `id_status_sistema`='$id_status_sistema_us', `id_club` = '$id_club',`id_categoria`='$id_categoria',`id_status_verificacion`='$id_status_verificacion' WHERE `id_usuario` = '$id_us'";
	
	$res = mysqli_query($conn, $sql);
	if ($res) {
		
		header("location: ../buscar_oficial_club.php");
	}else{
		echo mysqli_error($conn);
	}
}







 ?>