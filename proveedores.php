<?php
    include('conexion.php');
    $datos = $conexion->query("SELECT * FROM estado");
    if (isset($_POST['guardar_prov'])) {
        $nomemp = $_POST['nomemp'];
        $rfc = $_POST['rfc'];
        $correo = $_POST['correo'];
        $tel = $_POST['tel'];
        $calle = $_POST['calle'];
        $noext = $_POST['noext'];
        $cruza = $_POST['cruza'];
        $colonia = $_POST['colonia'];
        $cp = $_POST['cp'];
        $estado = $_POST['estado'];
        $table2 = 'proveedores';
        $conexion->query("INSERT INTO $table2 (nombreEP, rfcEP, correoEP, telefonoEP, calle,noext, cruzamientos,colonia, cp, idestado) VALUES ('$nomemp','$rfc','$correo','$tel','$calle','$noext','$cruza','$colonia',$cp,$estado)");
        echo '<script> alert("Datos ingresados")</script>';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Winnfed | Proveedores</title>
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
                <a href="proveedores.php" class="nav-link active"><i class="fas fa-dolly-flatbed"></i>Proveedores</a>
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
                        <i class="fas fa-dolly-flatbed"></i>
                        <h4>Agregar Proveedores</h4>
                        <hr>
                    </div>
                    <div class="col-xl-6 col-md-1"></div>
                    <div class="view-client col-xl-6 ">
                        <a href="ver-prov.php"><i class="fas fa-eye"></i>Ir a Proveedores</a>
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto">
                        <form action="proveedores.php" method="POST" class="text-center">
                        <div class="form-group">
                                <label for=""><span>*</span>Nombre de la empresa</label>
                                <input type="text" name="nomemp" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>RFC:</label>
                                <input type="text" name="rfc" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Correo:</label>
                                <input type="text"  name="correo" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Teléfono:</label>
                                <input type="tel" name="tel"  required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Calle:</label>
                                <input type="text" name="calle"  required>
                            </div>
                            <div class="form-group">
                                <label for=""><span>*</span>No. Ext:</label>
                                <input type="text" name="noext"  required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Cruzamiento:</label>
                                <input type="text" name="cruza"  required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Colonia:</label>
                                <input type="text" name="colonia"  required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>C.P:</label>
                                <input type="number" name="cp"  required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Estado:</label>
                                <div class="caja">
                                    <select name="estado" id="" required>
                                        <?php
                                            while ($datestado = mysqli_fetch_array($datos)) {
                                        ?>
                                        <option value="<?php echo $datestado['idestado'] ?>"><?php echo $datestado['nombreEST'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div> 
                            <div class=" botones justify-content-center d-flex ">
                                <button>Cancelar</button>
                                <input type="submit" name="guardar_prov" value="Guardar">
                            </div>
                        </form>
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
