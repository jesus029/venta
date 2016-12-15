<?php   

$enlace=new mysqli("localhost","root","jesusfernando","compra");

if(!$enlace){
    echo"no se puede conectar a la base de datos" .$mysqli->connect_error;
}

?>