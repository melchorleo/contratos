<?php
include("conexion.php");
$con = conectar();

$id_contrato = $_GET['id'];

$sql="DELETE FROM contrato WHERE id_contrato = '$id_contrato'";
$query = mysqli_query($con, $sql);

if($query){
    header("Location:index.php");
}



?>