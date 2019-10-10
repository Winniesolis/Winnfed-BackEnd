<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

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
            <a href="" class="nav-link"><i class="fas fa-address-book"></i>Clientes</a>
            <a href="" class="nav-link"><i class="fas fa-dolly-flatbed"></i>Proveedores</a>
            <a href="" class="nav-link"><i class="fas fa-user"></i>Usuarios</a>
            <a href="" class="nav-link"><i class="fas fa-box-open"></i>Productos</a>
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-file-alt"></i>Documentación</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="">Lista de precios</a>
                <a class="dropdown-item" href="">Cotizaciones</a>
                <a class="dropdown-item" href="">Notas de remisión</a>
            </div>
            <a href="" class="nav-link"><i class="fas fa-clipboard-list"></i>Pendientes</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="header dnb">
            <button class="btn btn-primary dnb btn-menu " id="menu-toggle"><i class="fas fa-bars"></i></button>

        </div>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
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
