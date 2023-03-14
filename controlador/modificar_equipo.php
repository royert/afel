<?php 

require '../modelo/conexion.php';

//datos de los campos de texto	
$id_club = $_POST['id_club'];
$name = $_POST['nombre'];
$fecha_fund = $_POST['fecha_fund'];
$status = $_POST['select-status'];
$status_af = $_POST['select-club'];




			//datos de la imagen del logo
$nombre_logo = $_FILES['foto']['name'];
$url_logo = "img/logo/".$nombre_logo;
$tamano = $_FILES['foto']['size'];
$tipo_logo = $_FILES['foto']['type'];
$img_logo = $_FILES['foto']['tmp_name'];

			//datos de la imagen del acta
$nombre_acta = $_FILES['acta']['name'];
$url_acta = "img/acta/".$nombre_acta;
$tamanoa = $_FILES['acta']['size'];
$tipo_acta = $_FILES['acta']['type'];
$img_acta = $_FILES['acta']['tmp_name'];

if (isset($img_logo) && $img_logo != "" && isset($img_acta) && $img_acta != "") 
	{
		$sql = "UPDATE `club` SET `nombre_club`='$name',`fecha_fund`='$fecha_fund',`id_status_sistema`='$status', `tipo_acta`='$tipo_acta',`img_acta`='$url_acta',`tipo_logo`='$tipo_logo',`img_logo`='$url_logo', `id_status_club` = '$status_af' WHERE `id_club`= '$id_club' ";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			move_uploaded_file($img_logo, '../img/logo/'.$nombre_logo);
			move_uploaded_file($img_acta, '../img/acta/'.$nombre_acta);
			echo " bien";
			header("location: ../buscar_equipo.php");
		}else{
			echo mysqli_error($conn);
		}
	
}elseif (isset($img_logo) && $img_logo != "" && isset($img_acta) && $img_acta == "") {
			$sql = "UPDATE `club` SET `nombre_club`='$name',`fecha_fund`='$fecha_fund',`id_status_sistema`='$status', `tipo_logo`='$tipo_logo',`img_logo`='$url_logo', `id_status_club` = '$status_af' WHERE `id_club`= '$id_club' ";
		$res = mysqli_query($conn, $sql);
		if ($res) {
			move_uploaded_file($img_logo, '../img/logo/'.$nombre_logo);
			
			echo " bien";
			header("location: ../buscar_equipo.php");
		}else{
			echo mysqli_error($conn);
		}
}elseif (isset($img_logo) && $img_logo != "" && isset($img_acta) && $img_acta != "") {
			$sql = "UPDATE `club` SET `nombre_club`='$name',`fecha_fund`='$fecha_fund',`id_status_sistema`='$status', `tipo_acta`='$tipo_acta',`img_acta`='$url_acta', `id_status_club` = '$status_af' WHERE `id_club`= '$id_club' ";
		$res = mysqli_query($conn, $sql);
		if ($res) {

			move_uploaded_file($img_acta, '../img/acta/'.$nombre_acta);
			echo " bien";
			header("location: ../buscar_equipo.php");
		}else{
			echo mysqli_error($conn);
		}
	
}
else{

	$sql = "UPDATE `club` SET `nombre_club`='$name',`fecha_fund`='$fecha_fund',`id_status_sistema`='$status', `id_status_club` = '$status_af' WHERE `id_club`= '$id_club' ";
	$res = mysqli_query($conn, $sql);
	if ($res) {
		echo " bien";
		header("location: ../buscar_equipo.php");
	}else{
		echo mysqli_error($conn);
	}
}


?>