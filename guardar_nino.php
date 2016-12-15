<?php
$conexion = mysqli_connect('localhost', 'root', 'jesusfernando', 'compra');

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$archivo = $_POST['archivo'];
    $nombre_file = mktime() .'.jpg';
    $posicion = 0;

    $consulta = <<<SQL
INSERT INTO
    ropa_niño
SET
    nombre='$nombre',
    descripcion='$descripcion',
    precio='$precio',
    archivo='$nombre_file'
SQL;
    mysqli_query($conexion, $consulta);

        $origen = $_FILES['archivo']['tmp_name'];
        $destino = "nino/$nombre_file";
     
        move_uploaded_file ($origen, $destino);

        header("Location: nino.php");    
?>