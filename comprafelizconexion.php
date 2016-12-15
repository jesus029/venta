<?php
$con= mysqli_connect("localhost", "root", "jesusfernando", "compra");

if($con){
    
    echo"no se pudo establecer la conexion a Mysql";
        
}
else{
    echo'conectado';
}

?>