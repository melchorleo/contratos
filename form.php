<?php 
include('conexion.php');
$con = conectar();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-10">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">
                                <label for="">ID Contrato</label>
                                <input type="number" class="form-control mb-3" name="id_contrato" placeholder="ID contrato">
                                <label for="">Nombre arrendador</label>
                                <input type="text" class="form-control mb-3" name="nombre_arrendador_propietario" placeholder="Nombre arrendador">
                                    
                                <label for="">Nombre arrendatario</label>
                                <input type="text" class="form-control mb-3" name="nombre_arrendatario_inquilino" placeholder="Nombre arrendatario">

                                    <input type="text" class="form-control mb-3" name="domicilio_inmbueblearrendar" placeholder="Domicilio inmueble arrendar">

                                    <input type="text" class="form-control mb-3" name="domicilio_notificaciones" placeholder="Domicilio notificaciones">

                                    <input type="number" class="form-control mb-3" name="monto_renta" placeholder="Monto de renta">

                                    <input type="date" class="form-control mb-3" name="dia_inicial_pago_renta" placeholder="Dia pago renta">

                                    <input type="number" class="form-control mb-3" name="monto_deposito_garantia" placeholder="Monto de deposito">

                                    <input type="date" class="form-control mb-3" name="fecha_inicio_vigencia_contrato" placeholder="Fecha inicio de vigencia">

                                    <input type="date" class="form-control mb-3" name="fecha_fin_vigencia_contrato" placeholder="Fecha final de vigencia">

                                    <input type="number" class="form-control mb-3" name="numero_cajones_estacionamiento" placeholder="Cajones">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>
</body>
</html>