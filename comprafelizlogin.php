<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, usr-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <link rel="stylesheet"  href="style.css" />
    
    <style>
 
input:required:invalid {
 
border: 1px solid red;
 
}
 
input:required:valid {
 
border: 1px solid green;
 
}
        #bt{
   margin-left: -1011px;
margin-top: 263px;
          
            
        }
        .arriba{
    background-color: #FF00C6;
    height: 181px;
    
    background-repeat: repeat;
  }
  .titulo{
    font-family: Droid Serif;
    color: #000;
    font-size: 52px;
    position: absolute;
    top: -9px;
    left: 425px;
        }
        form{
            margin-top: 50px;
        }
        #la{
            margin-top: 239px;
margin-left: -997px;
position: absolute;
font-size: x-small;
        }
       
    </style>
</head>
<body>
            <div class="arriba">
  <h1 class="titulo">Ingresa a Compra Feliz</h1>
</div>

    
    <form method="post" action="comprafelizusuarios.php">
        <input type="text" placeholder="&#128272; Usuario" name="Usuario">
              <input type="password" placeholder="&#128272; contraseña" name="password">
        <input type="submit" value="ingresar">
    </form>
                 <form id="bt" method="post" action="comprafelizregistro.php">
                <input type="submit" class="btn btn-success"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" value="Registrar" required/>
                </form>
             <label id="la">Password debe contener (mañuscula,minisculas,@#$% y numero ) deve de ser 8 caracteres</label>
        
</body>
</html>