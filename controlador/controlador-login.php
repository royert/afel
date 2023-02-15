<?php
session_start();

require '../modelo/conexion.php';

$user = $_POST["user"];
$pas = md5($_POST["pass"]);


$sql_adm = "SELECT
`id_adm`,
`nombre_admin`,
`segundoN`,
`apellido`,
`segundoA`,
`usuario_adm`,
`contraseña`,
`id_status_sistema`
FROM
`admin`
WHERE
usuario_adm = '$user' AND contraseña = '$pas' ";

$resultado_adm = mysqli_query($conn, $sql_adm);


$sql_user = "SELECT
`id_usuario`,
`nombre_usuario`,
`segundoN`,
`apellido`,
`segundoA`,
`ci`,
`fecha_nac_us`,
`fecha_registro_us`,
`imagen_us`,
`usuario`,
`clave`,
`id_t_usuario`,
`id_status_sistema`,
`id_club`,
`id_categoria`
FROM
`usuario`
WHERE
usuario = '$user' AND clave = '$pas' ";



$resultado_user = mysqli_query($conn, $sql_user);




if (mysqli_num_rows($resultado_adm) > 0) {

	while ($row = mysqli_fetch_assoc($resultado_adm)) {
		header("location: ../home.php");

		$_SESSION['user'] = $row['nombre_admin'];
	}
} else {
	echo'<script type="text/javascript">
    alert("Datos Incorrectos");
    window.location.href="../login.php";
    </script>';
}


if (mysqli_num_rows($resultado_user) > 0) {

	while ($row = mysqli_fetch_assoc($resultado_user)) {

		$_SESSION['user'] = $row['nombre_usuario'];
		$_SESSION['img'] = $row['imagen_us'];
		$_SESSION['id_club'] = $row['id_club'];
		$_SESSION['id_t_user'] = $row['id_t_usuario'];
		
		switch ($_SESSION['id_t_user']) {
			case '6':
				header("location: ../home_club.php");
				break;
			case '4':
				header("location: ../home_ficha.php");
				break;
			case 'usuario':
				require_once('cabecera_usuario.php');
				break;
		}
	


		
	}
} else {
	echo'<script type="text/javascript">
    alert("Datos Incorrectos");
    window.location.href="../login.php";
    </script>';
}


mysqli_close($conn);
