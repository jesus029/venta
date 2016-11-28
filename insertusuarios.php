<?php
include("comprafelizconexion.php");

$user=$_POST["nombre"];
$password=$_POST["password"];
$Rol=$_POST["ro"]
$mysqli->query("INSERT INTO usuarios(Username) VALUES ('$user')");
$mysqli->query("INSERT INTO password(password) VALUES ('$password')");
$mysqli->query("INSERT INTO Rol(rol) VALUES ('$Rol')");
?>