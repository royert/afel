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
        $this->Image('../img/foto-sis/logo-afel.png',25,8,33);
    // Arial bold 17
        $this->SetFont('Arial','B',20);
        // Salto de línea
        $this->Ln(7);
    // Movernos a la derecha
        $this->Cell(120);
    // Título
        $this->Cell(30,10,'ASOCIACION DE FUTBOL DEL ESTADO LARA',0,0,'C');
    // Salto de línea
        $this->Ln(27);}

// Pie de página
        function Footer()
        {
 // Posición: a 1 cm del final
            $this->SetY(-5);
    // Arial italic 8
            $this->SetFont('Arial','I',8);
    // Número de página
       // $this->Cell(0,10,utf8_decode('Págna ').$this->PageNo().'/{nb}',0,0,'C');
            $this->Cell(0, 5, utf8_decode('Págna ').$this->PageNo(), 'T', 0, 'C');

        }
    }

// Creación del objeto de la clase heredada
    $pdf = new PDF('L','mm','Letter');
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial', '', 9);
    $pdf->SetMargins(30, 25, 30);
    #Establecemos el margen inferior:
    $pdf->SetAutoPageBreak(true,25); 


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
    `usuario`.`fecha_nac`,
    `usuario`.`fecha_registro`,
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
    `historico_fichaje`.`id_h_fichaje`,
    `historico_fichaje`.`id_club`,
    `historico_fichaje`.`id_usuario`,
    `historico_fichaje`.`id_status_sistema`,
    `historico_fichaje`.`fecha_i`,
    `historico_fichaje`.`fecha_f`,
    `historico_fichaje`.`id_status_verificacion`,
    `historico_fichaje`.`direccion`
    FROM
    `representante_to_usuario`,
    `usuario`,
    `representante`,
    `club`,
    `categoria`,
    `status_sistema`,
    `status_verificacion`,
    `carnets`,
    `historico_fichaje`
    WHERE
    (
    `usuario`.`id_usuario` = $id_us AND `representante_to_usuario`.`id_usuario` = `usuario`.`id_usuario`
) AND(
`representante_to_usuario`.`id_representante` = `representante`.`id_representante`
) AND(
`club`.`id_club` = $id_club_us AND `usuario`.`id_club` = `club`.`id_club`
) AND(
`categoria`.`id_categoria` = `usuario`.`id_categoria`
) AND(
`status_sistema`.`id_status_sistema` = `usuario`.`id_status_sistema`
) AND(
`status_verificacion`.`id_status_verificacion` = `usuario`.`id_status_verificacion`
) AND(
`usuario`.`id_carnet_jug` = `carnets`.`id_carnet_jug`
)AND (`historico_fichaje`.`id_club` = $id_club_us AND `historico_fichaje`.`id_club` = `club`.`id_club`) 
AND (`historico_fichaje`.`id_usuario` = $id_us AND `historico_fichaje`.`id_usuario` = `usuario`.`id_usuario`)";


$res = mysqli_query($conn, $sql);




while ($row = mysqli_fetch_assoc($res)) {

    $pdf->Cell(20);
   $pdf->Cell(32,7,utf8_decode('PRIMER APELLIDO: '),0,0,'L');
   $pdf->Cell(40,7,utf8_decode($row['apellido']),0,0,'L');


   $pdf->Cell(40,7,utf8_decode('FECHA DE NACIMIENTO: '),0,0,'L');
   $pdf->Cell(30,7,utf8_decode($row['fecha_nac']),0,1,'L');


   $pdf->Cell(35,7,utf8_decode('SEGUNDO APELLIDO: '),0,0,'L');
   $pdf->Cell(37,7,utf8_decode($row['segundoA']),0,0,'L');


   $pdf->Cell(37,7,utf8_decode('FECHA DE REGISTRO: '),0,0,'L');
   $pdf->Cell(30,7,utf8_decode($row['fecha_reg']),0,1,'L');


   $pdf->Cell(30,7,utf8_decode('PRIMER NOMBRE: '),0,0,'L');
   $pdf->Cell(42,7,utf8_decode($row['nombre_usuario']),0,0,'L');


   $pdf->Cell(53,7,utf8_decode('NOMBRE DEL REPRESENTANTE: '),0,0,'L');
   $pdf->Cell(30,7,utf8_decode($row['nombre_representante']),0,1,'L');


   $pdf->Cell(32,7,utf8_decode('SEGUNDO NOMBRE: '),0,0,'L');
   $pdf->Cell(40,7,utf8_decode($row['segundoN']),0,0,'L');


   $pdf->Cell(53,7,utf8_decode('APELLIDO DEL REPRESENTANTE: '),0,0,'L');
   $pdf->Cell(30,7,utf8_decode($row['apellido_representante']),0,1,'L');


   $pdf->Cell(5,7,utf8_decode('CI: '),0,0,'L');
   $pdf->Cell(67,7,utf8_decode($row['ci']),0,0,'L');


   $pdf->Cell(20,7,utf8_decode('DIRECCION: '),0,0,'L');
   $pdf->Cell(30,7,utf8_decode($row['direccion']),0,1,'L');


   $pdf->Cell(21,7,utf8_decode('CATEGORIA: '),0,0,'L');
   $pdf->Cell(17,7,utf8_decode($row['nombre_categoria']),0,0,'L');



       $pdf->Ln(20);

       $pdf->Cell(55,7,utf8_decode('CLUB: '),0,0,'L');


       $pdf->Cell(70,7,utf8_decode('ORGANIZACION: '),0,0,'L');


       $pdf->Cell(70,7,utf8_decode('FECHA DESDE: '),0,0,'L');


       $pdf->Cell(60,7,utf8_decode('FECHA HASTA: '),0,1,'L');


   

       $pdf->Cell(55,7,utf8_decode($row['nombre_club']),0,0,'L');


       $pdf->Cell(70,7,utf8_decode('ASOCIACION DE FUTBOL DE LARA'),0,0,'L');


       $pdf->Cell(70,7,utf8_decode($row['fecha_i']),0,0,'L');


       $pdf->Cell(17,7,utf8_decode($row['fecha_f']),0,1,'L');


       $pdf->Ln(15);


       $pdf->Cell(65,0,utf8_decode('_____________________'),0,0,'L');


       $pdf->Cell(65,0,utf8_decode('__________________________'),0,0,'L');


       $pdf->Cell(65,0,utf8_decode('_____________________'),0,0,'L');


       $pdf->Cell(60,0,utf8_decode('_______________________'),0,1,'L');




       $pdf->Cell(65,7,utf8_decode('FIRMA DEL JUGADOR'),0,0,'L');


       $pdf->Cell(65,7,utf8_decode('FIRMA DEL REPRESENTANTE'),0,0,'L');


       $pdf->Cell(65,7,utf8_decode('FIRMA DEL CLUB'),0,0,'L');


       $pdf->Cell(60,7,utf8_decode('FIRMA DE LA ASOCIACION'),0,0,'L');









       $pdf->Image('../'.$row['imagen_us'], 240, 25, 25, 40);
   
}

$pdf->Output();
