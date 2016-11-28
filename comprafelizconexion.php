<?php   

$mysqli=new mysqli("localhost","root","jesusfernando","compra");

if($mysqli->connect_errno){
    echo"no se puede conectar a la base de datos" .$mysql->connect_error;
}
else{
    echo "Estas conectado a MYSQL!";
}

?>