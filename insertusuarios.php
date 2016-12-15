<?php
include("conexionoo.php");

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$password=$_POST["password"];
$rol=$_POST["rol"];

if($enlace->query("INSERT INTO usuarios(nombre,apellido,usuario,correo,password,rol) VALUES ('".$nombre."', '".$apellido."', '".$usuario."', '".$correo."', '".$password."','".$rol."')")==TRUE)
{
    echo '<script>
    alert("Fuiste registrado exitosamente");
    </script>';
    header("Location: comprafelizlogin.php");
}
else
{
    echo 'Error al registrarse';
}

/*$enlace = mysqli_query($enlace, "");
if($enlace){
   
    
}else{
      
}



if(filter_var($correo, FILTER_VALIDATE_CORREO)){

}*/

mysqli_close($enlace);

?>