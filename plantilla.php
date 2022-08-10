<?php
include ("conexion.php");
$con = conectar();

$id_contrato = $_GET['id'];

$sql= "SELECT * FROM contrato WHERE id_contrato='$id_contrato'";
$query = mysqli_query($con, $sql);
$row=mysqli_fetch_array($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


Lorem ipsum dolor, <b><?php echo $row['nombre_arrendador_propietario']?> </b> sit amet consectetur adipisicing elit. 
Officiis voluptatibus labore voluptates. Dignissimos, optio aliquam. Esse, iste sequi 
necessitatibus fuga architecto fugit eaque  delectus optio. Consecteturb <b> <?php echo $row['dia_inicial_pago_renta'] ?> </b> adipisci sunt quibusdam 
libero.


   
    
</body>
</html>