<?php
include("conexion.php");
$con = conectar();

$sql= "SELECT * FROM contrato";
$query = mysqli_query($con, $sql);
?>

<html lang="en">
    <head>

        <title>Contratos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"></a>
    <ul>
        <li class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" href="index.php">Contratos</a>
        
        </li>

        <li class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="nav-link active" aria-current="page" href="form.php">Insertar</a>
        
        </li>
        
    </ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>
<!---
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-2">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                <input type="number" class="form-control mb-3" name="id_contrato" placeholder="ID contrato">
                                    <input type="text" class="form-control mb-3" name="nombre_arrendador_propietario" placeholder="Nombre arrendador">

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
                        
-->
                        <div class="col-md-15">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID contrato</th>
                                        <th>Nombre Arrendador</th>
                                        <th>Nombre Arrendatario</th>
                                        <th>Domicilio inmueble arrendar</th>
                                        <th>Domicilio notificaciones</th>
                                        <th>Monto renta</th>
                                        <th>Dia pago renta</th>
                                        <th>Monto de deposito</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_contrato']?></th>
                                                <th><?php  echo $row['nombre_arrendador_propietario']?></th>
                                                <th><?php  echo $row['nombre_arrendatario_inquilino']?></th>
                                                <th><?php  echo $row['domicilio_inmbueblearrendar']?></th>
                                                <th><?php  echo $row['domicilio_notificaciones']?></th>
                                                <th><?php  echo $row['monto_renta']?></th>
                                                <th><?php  echo $row['dia_inicial_pago_renta']?></th> 
                                                <th><?php  echo $row['monto_deposito_garantia']?></th>
                                                <th><a href="plantilla.php?id=<?php echo $row['id_contrato'] ?>" class="btn btn-info">PDF</a></th>
                                                <th><a href="editar.php?id=<?php echo $row['id_contrato'] ?>" class="btn btn-info">Editar</a></th>

                                                <th><a href="eliminar.php?id=<?php echo $row['id_contrato'] ?>" class="btn btn-danger">Eliminar</a></th>
                                                
                                                
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>