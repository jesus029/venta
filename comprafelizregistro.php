<!doctype html>
<html>
<head>
    <meta charset='UTF-8'>
    <title>Registro</title>
     <link  href='bootstrap.css' rel="stylesheet"/>
    <style>
        #boton{
           margin-left: 110px;
        position: absolute;
            margin-top: -24px;
        }
    
    </style>
    </head>
 <body>
    <form class="form-horizontal" method="POST" action="insertusuarios.php">
        <fieldset>
        <div>
            <legend>Registro</legend>
            </div>
            <div class="control-group">
                <label class="control-label">Nombre</label>
                <div class="controls">
                <input type="text" id="nombre" name="nombre" class="input-xlarge">
                    <p class="help-block">Nombre del cliente</p>
                </div>
             </div>
                <div class="control-group">
                <label class="control-label">Apellido</label>
                <div class="controls">
                <input type="text" id="apellido" name="apellido" class="input-xlarge">
                    <p class="help-block">Apellido del cliente</p>
                </div>
                     </div>
                <div class="control-group">
                <label class="control-label">Usuario</label>
                <div class="controls">
                <input type="text" id="usuario" name="usuario" class="input-xlarge">
                    <p class="help-block">Nombre del usuario</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Correo</label>
                <div class="controls">
                <input type="text" id="Correo" name="Correo" class="input-xlarge">
                    <p class="help-block">Correo del usuario</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                <input type="text" id="usuario" name="usuario" class="input-xlarge">
                    <p class="help-block">Password del usurio</p>
                </div>
            </div>
            <div class="control-group">
            <div class="controls">
                <input type="submit" class="btn btn-success" value="Registrar"/>
               
                </div>
            </div>
             <div class="control-group">
            <div class="controls">
                <input id="boton" type="submit" class="btn btn-success" value="Cancelar"/>
               <div class="btn btn-success id=can"
                </div>
            </div>
        </fieldset>
        </form>
    
    </body>

</html>