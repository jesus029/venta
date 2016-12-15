<?php
session_start();
include("conexionoo.php");

$Usuario=$_POST["Usuario"];
$password=$_POST["password"];

$conex=$enlace->query("SELECT*FROM usuarios WHERE  Usuario='$Usuario' and password = '$password'");

$filas=$conex->fetch_all();

if(count($filas)!=0){
    
    header("location:compra_feliz.php");
}
else{
    echo"Error en password o usuario";
    header("location:comprafelizlogin.php");
}
?>