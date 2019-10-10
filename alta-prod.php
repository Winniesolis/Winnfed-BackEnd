<?php
 include 'conexion2.php';
if (!empty($_POST)) {
    $alert;
    if(empty($_POST['nombre']) || empty($_POST['descripcion']) ||empty($_POST['precio']) ||empty($_POST['nomexistenciabre']) ||  empty($_POST['proveedor'])){
        $alert ='<p> class="msg_error">Todos los campos son necesarios</p>';
    }else{
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $existencia = $_POST['existencia'];
        $proveedor = $_POST['proveedor'];
        $estatus = 1;
        $foto = $_FILES['foto'];
        $nombref = $foto['name'];
        $type = $foto['type'];
        $url_temp = $foto['tmp_name'];
        $imgProducto = 'img_producto.svg';
        $table2 = 'productos';
        if($nombref != ''){
            $destino ='img/uploads/';
            $img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
            $imgProducto = $img_nombre.'.jpg';
            $src = $destino.$imgProducto;
        }
        $query_insert = mysqli_query($conection, "INSERT INTO $table2 (nombrePD, descripcionPD, idproveedor, fotoPD, precio,idstock,estatusPD) 
        VALUES ('$nombre','$descripcion',$proveedor,'$imgProducto',$precio,$existencia,$estatus)");

        if($query_insert){
            if($nombref != ''){
                move_uploaded_file($url_temp, $src);
            }
            $alert = '<p class="msg_save> Producto guardado exisosamente.</p>';
        }else{
            $alert = '<p class="msg_error> Error al guardar el producto.</p>';
        }
    }
}
?>