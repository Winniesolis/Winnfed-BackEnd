<?php
    include('conexion2.php');
    $datos = $conection->query("SELECT * FROM proveedores");

    if (!empty($_POST)) 
    {
        $alert='';
        if(empty($_POST['nombre']) || empty($_POST['descripcion']) || empty($_POST['precio']) || $_POST['cantidad'] <= 0 || empty($_POST['proveedor']))
        {
        $alert='<p class="msg_error">Faltaron algunos campos.</p>';
        }
        else{
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $existencia = $_POST['cantidad'];
            $proveedor = $_POST['proveedor'];
            $estatus = 1;

            $foto       = $_FILES['foto'];
            $nom_foto   = $foto['name'];
            $type       = $foto['type'];
            $url_temp   = $foto['tmp_name'];

            $imgProducto = 'img_producto.png';
            if ($nom_foto != '') 
            {
                $destino        = 'img/uploads/';
                $img_nombre     = 'img_'.md5(date('d-m-Y H:m:s' ));
                $imgProducto    = $img_nombre.'.jpg';
                $src            = $destino.$imgProducto;
            }
            $query_insert = mysqli_query($conection, "INSERT INTO productos (nombrePD, descripcionPD, idproveedor, fotoPD, precio,idstock,estatusPD) 
            VALUES ('$nombre','$descripcion',$proveedor,'$imgProducto',$precio,$existencia,$estatus)");
            if ($query_insert) {
                if ($nom_foto != '') {
                    move_uploaded_file($url_temp, $src);
                }
                $alert='<p class="msg_save">Producto guardado corectamente.</p>';
            }else{
                $alert='<p class="msg_save">Error al guardar.</p>';
            }
        }    
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Winnfed | Productos</title>
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
                <a href="productos.php" class="nav-link active"><i class="fas fa-box-open"></i>Productos</a>
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
                        <i class="fas fa-box-open"></i>
                        <h4>Agregar Productos</h4>
                        <hr>
                    </div>
                    <div class="col-xl-6 col-md-1"></div>
                    <div class="view-client col-xl-6 ">
                        <a href=""><i class="fas fa-box-open"></i>Ir a Productos</a>
                    </div>
                    <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12 mx-auto mt-767-40 ">
                        <form action="productos.php" class="text-center" method="POST"  enctype="multipart/form-data">
                            <div class="form-group">
                                <label for=""><span>*</span>Nombre:</label>
                                <input type="text" name="nombre" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Descripción:</label>
                                <textarea name="descripcion" id="" cols="29" rows="4"></textarea>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Precio:</label>
                                <input type="number" name="precio" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Existencia:</label>
                                <input type="number" name="cantidad" required>
                            </div> 
                            <div class="form-group">
                                <label for=""><span>*</span>Proveedor:</label>
                                <div class="caja">
                                <select name="proveedor" id="" required>
                                    <?php
                                        while ($daprov = mysqli_fetch_array($datos)) {
                                    ?>
                                    <option value="<?php echo $daprov['idproveedor'] ?>"><?php echo $daprov['nombreEP'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div> 
                            <div class="photo">
                        <label for="foto">Foto</label>
                        <div class="prevPhoto">
                        <span class="delPhoto notBlock">X</span>
                        <label for="foto"></label>
                        </div>
                        <div class="upimg">
                        <input type="file" name="foto" id="foto">
                        </div>
                        <div id="form_alert"></div>
                </div>
                            <div class=" botones justify-content-center d-flex ">
                                <button>Cancelar</button>
                                <input type="submit" name="g_producto" value="Guardar">
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
    <script type="text/javascript" src="js/jquery-1.12.0.min.js"></script><!-- Importa la libreria -->
    <script src="js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/functions.js"></script>
<!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
