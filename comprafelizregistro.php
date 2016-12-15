<!doctype html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Registro</title>
     <link  href='bootstrap.css' rel="stylesheet"/>
    <style>
 
input:required:invalid {
 
border: 1px solid red;
 
}
 
input:required:valid {
 
border: 1px solid green;
 
}
               .arriba{
    height: 181px;
    background-image: url(img/huellas.png);
    background-repeat: repeat;
  }
  
        #boton{
           margin-left: 110px;
        position: absolute;
            margin-top: -24px;
        }
    
    </style>
    </head>
 <body>
       <div class="arriba">
  <h1 class="titulo">Bienvenido al Registro</h1>
    <form class="form-horizontal" method="POST" action="insertusuarios.php">
        <fieldset>
        <div>
            
            </div>
            <div class="control-group">
                <label class="control-label">Nombre</label>
                <div class="controls">
                <input type="text" id="nombre" name="nombre" pattern="[A-Za-z]{5}" class="input-xlarge" required/>
                    <p class="help-block">Nombre del cliente</p>
                </div>
             </div>
                <div class="control-group">
                <label class="control-label">Apellido</label>
                <div class="controls">
                <input type="text" id="apellido" name="apellido" pattern="[A-Za-z]{5}" class="input-xlarge" required/>
                    <p class="help-block">Apellido del cliente</p>
                </div>
                     </div>
                <div class="control-group">
                <label class="control-label">Usuario</label>
                <div class="controls">
                <input type="text" id="usuario" name="usuario" class="input-xlarge" required/>
                    <p class="help-block">Nombre del usuario</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Correo</label>
                <div class="controls">
                <input type="text" id="correo" name="correo" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="input-xlarge" required/>
                    <p class="help-block">ejemplo20@hotmail.com</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="input-xlarge" required/>
                    <p class="help-block">Password debe contener (mañuscula,minisculas,@#$% y numero ) deve de ser 8 caracteres </p>
                </div>
            </div>
            <div class="control-group">
            <div class="controls">
                 <form id="reg" method="get" action="comprafelizlogin.php">
                <input type="submit" class="btn btn-success" value="Registrar"/>
                </form>
                </div>
            </div>
             <div class="control-group">
            <div class="controls">
                <form id="boton" method="get" action="comprafelizlogin.php">
                    <input type="submit" class="btn btn-success" value="Cancelar"> 
                </form>
                </div>
            </div>
        </fieldset>
        </form>
    
    </body>

</html>