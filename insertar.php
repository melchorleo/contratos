<?php
include("conexion.php");
$con = conectar();

$id_contrato = $_POST['id_contrato'];
$nombre_arrendador_propietario = $_POST['nombre_arrendador_propietario'];
$nombre_arrendatario_inquilino = $_POST['nombre_arrendatario_inquilino'];
$domicilio_inmueblearrendar = $_POST['domicilio_inmbueblearrendar'];
$domicilio_notificaciones = $_POST['domicilio_notificaciones'];
$monto_renta = $_POST['monto_renta'];
$dia_inicial_pago_renta = $_POST['dia_inicial_pago_renta'];
$monto_deposito_garantia = $_POST['monto_deposito_garantia'];
$fecha_inicio_vigencia_contrato = $_POST['fecha_inicio_vigencia_contrato'];
$fecha_fin_vigencia_contrato = $_POST['fecha_fin_vigencia_contrato'];
$numero_cajones_estacionamiento = $_POST['numero_cajones_estacionamiento'];


$sql = "INSERT INTO contrato (id_contrato, nombre_arrendador_propietario, nombre_arrendatario_inquilino,domicilio_inmbueblearrendar,domicilio_notificaciones,monto_renta,dia_inicial_pago_renta,monto_deposito_garantia,fecha_inicio_vigencia_contrato,fecha_fin_vigencia_contrato,numero_cajones_estacionamiento) VALUES ('$id_contrato','$nombre_arrendador_propietario', '$nombre_arrendatario_inquilino', '$domicilio_inmueblearrendar', '$domicilio_notificaciones', '$monto_renta', '$dia_inicial_pago_renta', '$monto_deposito_garantia', '$fecha_inicio_vigencia_contrato', '$fecha_fin_vigencia_contrato', '$numero_cajones_estacionamiento')";



$query= mysqli_query($con,$sql);


if($query){
    Header("Location: index.php");
    
}else {
}


?>