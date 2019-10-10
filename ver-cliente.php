<?php
    include('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Winnfed | Ver Clientes</title>
    <link rel="shortcut icon" href="img//logo-pestaña.svg">
<!-- Bootstrap core CSS -->
    <link href="js/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex" id="wrapper">
<!-- Sidebar -->
        <div class="bg-light border-right cont-menu" id="sidebar-wrapper">
            <div class="img-men text-center">
                <img  class="" src="img/logo2.svg" alt="Logo">
            </div>
            <div class="mn-user text-center">
                <img src="img/ico-us.svg" alt="user">
                <br>
                <h4><?php echo'Administrador' ?></h4>
                <a href=""><i class="fas fa-power-off"></i></a>
            </div>
            <div class="list-group list-group-flush">
                <a href="" class="nav-link"><i class="fas fa-home"></i>Inicio</a>
                <a href="clientes.php" class="nav-link active"><i class="fas fa-address-book"></i>Clientes</a>
                <a href="proveedores.php" class="nav-link"><i class="fas fa-dolly-flatbed"></i>Proveedores</a>
                <a href="usuarios.php" class="nav-link"><i class="fas fa-user"></i>Usuarios</a>
                <a href="productos.php" class="nav-link"><i class="fas fa-box-open"></i>Productos</a>
                <a href="ventas.php" class="nav-link "><i class="fas fa-shopping-cart"></i>Ventas</a>
                <a href="documentacion.php" class="nav-link"><i class="fas fa-file-alt"></i>Documentación</a>
                <a href="" class="nav-link"><i class="fas fa-clipboard-list"></i>Pendientes</a>
            </div>  
        </div>
<!-- /#sidebar-wrapper -->
<!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="header dnb">
                <button class="btn btn-sdw dnb btn-menu " id="menu-toggle"><i class="fas fa-bars"></i></button>
            </div>
            <div class="container-fluid content-client">
                <div class="row header-client">
                    <div class="col-xl-12 col-12 ">
                        <i class="fas fa-address-book"></i>
                        <h4>Ver Clientes</h4>
                        <hr>
                    </div>
                    <div class="col-xl-6 col-md-1"></div>
                    <div class="view-client col-xl-6 ">
                        <a href="clientes.php"><i class="fas fa-eye"></i>Agregar Clientes</a>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-12 col-sm-12 mx-auto">
                        <table class="table Tcliente table-responsive">
                            <thead class="thead-dark">
                                <tr  class="text-center">
                                    <th scope="col">#</th>
                                    <th scope="col">Nombres</th>
                                    <th scope="col">Apellidos</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Ver</th>
                                    <th scope="col">Opciones</th>
                                </tr>
                                <?php
                                    $query = mysqli_query($conexion, "SELECT * FROM clientes INNER JOIN estado WHERE clientes.idestado = estado.idestado");
                                    $result = mysqli_num_rows($query);
                                    if($result > 0){
                                        while($Mclient2 = mysqli_fetch_array($query)){
                                    ?>
                                    <tr class="text-center">
                                        <td><?php echo $Mclient2['idcliente'] ?></td>
                                        <td><?php echo $Mclient2['nombres'] ?></td>
                                        <td><?php echo $Mclient2['apellidos'] ?></td>
                                        <td><?php echo $Mclient2['nombreEST'] ?></td>
                                        <td><?php echo $Mclient2['telefono'] ?></td>
                                        <td><?php echo $Mclient2['correo'] ?></td>
                                        <td><button type="button" class="btn btn-info">Ver contacto</button></td>
                                        <td class="text-center btn-table">
                                            <button type="button" class="btn btn-success">Editar</button>
                                            <button type="button" class="btn btn-danger mt-1605-1">Eliminar</button>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                }
                                ?>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<!-- /#page-content-wrapper -->

    </div>
<!-- /#wrapper -->
<!-- Bootstrap core JavaScript -->
<script src="js/jquery/jquery.min.js"></script>
<script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Menu Toggle Script -->
<script src="js/menu.js"></script>
</body>
</html>