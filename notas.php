<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Winnfed | Notas </title>
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
                <a href="clientes.php" class="nav-link"><i class="fas fa-address-book"></i>Clientes</a>
                <a href="proveedores.php" class="nav-link "><i class="fas fa-dolly-flatbed"></i>Proveedores</a>
                <a href="usuarios.php" class="nav-link"><i class="fas fa-user"></i>Usuarios</a>
                <a href="productos.php" class="nav-link "><i class="fas fa-box-open"></i>Productos</a>
                <a href="ventas.php" class="nav-link "><i class="fas fa-shopping-cart"></i>Ventas</a>
                <a href="documentacion.php" class="nav-link active"><i class="fas fa-file-alt"></i>Documentación</a>
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
                    <i class="fas fa-file-alt"></i>
                        <h4>Notas</h4>
                        <hr>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-2 arrow-left">
                                <a href="documentacion.php"><i class="fas fa-arrow-circle-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="container container-form">
                        <div class="row">
                            <div class="col-xl-10 mx-auto">
                                <form action="">
                                    <label for="">Cliente</label>
                                    <div class="caja">
                                        <select name="" id="">
                                            <option value="">cliente 1</option>
                                            <option value="">cliente 2</option>
                                            <option value="">cliente 3</option>
                                            <option value="">cliente 4</option>
                                            <option value="">cliente 5</option>
                                        </select>
                                    </div>
                                    <br>
                                    <a href="" class="btn btn-info mt-5 mb-5 offset-9">Agregar Productos</a>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Producto</th>
                                            <th scope="col">Disponible</th>
                                            <th scope="col">Precio unitario</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">2</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                            </tr>
                                            <tr>
                                            <th scope="row">3</th>
                                            <td colspan="2">Larry the Bird</td>
                                            <td>@twitter</td>
                                            </tr>
                                        </tbody>
                                        </table>
                                        <a href="" class="btn btn-success mt-5 mb-5 offset-4">Generar nota</a>
                                </form>
                            </div>
                        </div>
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
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
