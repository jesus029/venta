<?php
session_start();
include("comrafelizconexion.php");

$user=$_POST["usuario"];
$pass=$_POST["password"];

$resultados = $mysqli->query("SELECT*FROM usuarios WHERE password = '$pass' AND nombre='$user'");

$filas=$resultados->fetch_all();


if(count($filas)==0){
    
    echo"EL usuario o la contraseña son incorrectos";
      $_SESSION["VIP"]=$NULL;
}
else{
    echo"Bienvenido a compra Feliz";
        $_SESSION["VIP"]=$user;
    $url="comprafeliz1.php";
    header("Location".$url);
    die();
}

?>