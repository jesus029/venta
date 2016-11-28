<html>
<head>
    <meta charset='UTF-8'>
    <title>Login</title>
    <link  href='bootstrap.css' rel="stylesheet"/>
    
    <style>
        #nombre{
            margin-left: 420px;
             position: absolute;
             margin-top: 97px;
        }
          #pass{
            margin-left: 420px;
             position: absolute;
             margin-top: 159px;
        }
          #entrar{
            margin-left: 395px;
             position: absolute;
             margin-top: 217px;
        }
          #registrar{
            margin-left: 512px;
             position: absolute;
             margin-top: 217px;
        
         }
          #u{
            margin-left: 346px;
             position: absolute;
             margin-top: 100px;
        
         }
          #p{
            margin-left: 337px;
             position: absolute;
             margin-top: 159px;
        }
    </style>
</head>
<body>
     
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <form method="post" action="comprafelizusuarios.php">
        
        <div class="form-group">
        <label id="u" for="usuario">Usuario</label>
            <input id="nombre" type="text" name="usuario" class="form-control"/>
        </div>
        <div class="form-group">
        <label id="p" for="password">password</label>
            <input id="pass" type="password" name="password" class="form-control"/>
        </div>
        <input id="entrar" type="submit" value="Entrar" class="btn btn-primary">
        <input id="registrar" type="submit" value="Registrarse" class="btn btn-secundary">
            
        </form>
    </div>
    </div>

</body>

</html>