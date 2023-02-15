<?php 

session_start();


require '../modelo/conexion.php';

require('../reportes/fpdf.php');



class PDF extends FPDF
{
	// Cabecera de página
	function Header()
	{
    // Logo
		//Imagen lleva: ruta, posicion x, posicion y, alto, ancho, tipo, link
    $this->Image('../img/foto-sis/logo-afel.png',30,8,33);
    // Arial bold 15
		$this->SetFont('Arial','B',12);
		// Salto de línea
		$this->Ln(5);
    // Movernos a la derecha
		$this->Cell(120);
    // Título
		$this->Cell(30,10,'Carnets del Club',0,0,'C');
    // Salto de línea
		$this->Ln(25);
    // Movernos a la derecha
		$this->Cell(10);
	}

// Pie de página
	function Footer()
	{
    // Posición: a 1,5 cm del final
		$this->SetY(-15);
    // Arial italic 8
		$this->SetFont('Arial','I',8);
    // Número de página
		$this->Cell(0,10,utf8_decode('Págna ').$this->PageNo().'/{nb}',0,0,'C');
	}

}














/*El primer parámetro 'L' significa la orientación de la página, que en este caso es Landscape (acostada).
El segundo parámetro define las unidades de mendida, que en este caso particular son Milímetros.
El tercer parámetro define el tamaño de la página, que en este caso particular es Carta*/
$pdf = new PDF('L','mm','Letter');

$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 12);

$id_us = $_GET['id_user'];
$id_club_us = $_SESSION['id_club'];
$sql = "SELECT
    `representante_to_usuario`.`id_r_t_u`,
    `representante_to_usuario`.`id_representante`,
    `representante_to_usuario`.`id_usuario`,
    `usuario`.`id_usuario`,
    `usuario`.`nombre_usuario`,
    `usuario`.`segundoN`,
    `usuario`.`apellido`,
    `usuario`.`segundoA`,
    `usuario`.`ci`,
    `usuario`.`fecha_nac_us`,
    `usuario`.`fecha_registro_us`,
    `usuario`.`imagen_us`,
    `usuario`.`tipo_imagen`,
    `usuario`.`usuario`,
    `usuario`.`clave`,
    `usuario`.`id_t_usuario`,
    `usuario`.`id_status_sistema`,
    `usuario`.`id_club`,
    `usuario`.`id_categoria`,
    `usuario`.`id_status_verificacion`,
    `usuario`.`id_carnet_jug`,
    `representante`.`id_representante`,
    `representante`.`nombre_representante`,
    `representante`.`segundoN_representante`,
    `representante`.`apellido_representante`,
    `representante`.`segundoA_representante`,
    `representante`.`ci_representante`,
    `representante`.`fecha_nac`,
    `representante`.`fecha_registro`,
    `representante`.`tlf`,
    `representante`.`direccion`,
    `representante`.`id_status_sistema`,
    `club`.`id_club`,
    `club`.`nombre_club`,
    `club`.`fecha_fund`,
    `club`.`fecha_reg`,
    `club`.`id_status_sistema`,
    `club`.`tipo_acta`,
    `club`.`img_acta`,
    `club`.`tipo_logo`,
    `club`.`img_logo`,
    `club`.`id_status_club`,
    `categoria`.`id_categoria`,
    `categoria`.`nombre_categoria`,
    `categoria`.`edad_max`,
    `categoria`.`id_status_sistema`,
    `status_sistema`.`id_status_sistema`,
    `status_sistema`.`nombre_status_sistema`,
    `status_verificacion`.`id_status_verificacion`,
    `status_verificacion`.`nombre_verificacion`,
    `carnets`.`id_carnet_jug`,
    `carnets`.`nombre_carnet`,
    `carnets`.`carnet_front`,
    `carnets`.`carnet_back`,
    `carnets`.`tipo_carnet_front`,
    `carnets`.`tipo_carnet_back`,
    `tipo_usuario`.`id_t_usuario`,
    `tipo_usuario`.`nombre_tipo_usuario`,
    `tipo_usuario`.`id_status_sistema`
FROM
    `representante_to_usuario`,
    `usuario`,
    `representante`,
    `club`,
    `categoria`,
    `status_sistema`,
    `status_verificacion`,
    `carnets`,
    `tipo_usuario`
WHERE
    ( `usuario`.`id_usuario` = $id_us
    )AND
    (
        `usuario`.`id_club` = $id_club_us AND `club`.`id_club` = `usuario`.`id_club`
    ) AND(
        `carnets`.`id_carnet_jug` = 1 AND `carnets`.`id_carnet_jug` = `usuario`.`id_carnet_jug`
    ) AND(
        `usuario`.`id_t_usuario` = 7 AND `tipo_usuario`.`id_t_usuario` = `usuario`.`id_t_usuario`
    ) AND(
        `status_sistema`.`id_status_sistema` = `usuario`.`id_status_sistema`
    ) AND(
        `status_verificacion`.`id_status_verificacion` = `usuario`.`id_status_verificacion`
    ) AND(
        `categoria`.`id_categoria` = `usuario`.`id_categoria`
    ) AND(
        `representante_to_usuario`.`id_representante` = `representante`.`id_representante`
    ) AND(
        `usuario`.`id_usuario` = `representante_to_usuario`.`id_usuario`
    )";


$res = mysqli_query($conn, $sql);




while ($row = mysqli_fetch_assoc($res)) {

/*Despues del row los valores son: Border, Salto de linea, Justificacion, Relleno*/

$img_front = $row['carnet_front'];
$img_back = $row['carnet_back'];
	
$pdf->Image('../'.$img_front, 50, 50, 100, 50);
$pdf->Image('../'.$img_back, 154, 50, 100, 50);
$pdf->Cell(165, 42, $row['nombre_usuario'], 0, 0, 'C', 0);
$pdf->Cell(-100, 42, $row['apellido'], 0, 1, 'C', 0);
$pdf->Cell(190, -23, 'V- '.$row['ci'], 0, 1, 'C', 0);
$pdf->Cell(185, 43, $row['fecha_nac_us'], 0, 1, 'C', 0);
$pdf->Cell(187, -22, $row['nombre_club'], 0, 1, 'C', 0);
$pdf->Image('../'.$row['imagen_us'], 53, 62, 33, 33);


	


										
}

$pdf->Close();
$pdf->Output();







?>