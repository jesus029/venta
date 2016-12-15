<?php
$conexion = mysqli_connect('localhost', 'root', 'jesusfernando', 'compra');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
        input:required:invalid {
 
border: 1px solid red;
 
}
 
input:required:valid {
 
border: 1px solid green;
 
}
	@font-face {
    		font-family: "Roboto Slab";
    		src: url(fonts/RobotoSlab-Regular.ttf) format("truetype");
		}
		@font-face {
    		font-family: "Droid Serif";
    		src: url(fonts/DroidSerif.ttf) format("truetype");
		}
	.arriba{
		background-color: #FFFF80;
		height: 120px;
		background-image: url(img/huellas.png);
		background-repeat: repeat;
	}
	.titulo{
		font-family: Roboto Slab;
		color: saddlebrown;
		font-size: 97px;
		position: absolute;
		top:-59px;
		left:583px;
	}
header{
	width: 100%;
	overflow: hidden;
	background:#FFFF80;
}

.wrapper{
	width: 90%;
	max-width: 1000px;
	margin: auto;
	overflow: hidden;
}

header .logo{
	color: #4A0047;
	font-size: 50px;
	line-height: 200px;
	float: left;
}

header nav{
	float: right;
	line-height: 200px;
}

header nav a{
	display: inline-block;
	color: #fff;
	text-decoration: none;
	padding: 10px 20px;
	line-height: normal;
	font-size: 20px;
	font-weight: bold;
	-webkit-transition: all 500ms ease;
	-o-transition: all 500ms ease;
	transition: all 500ms ease;
}

header nav a:hover{
	background: #3C0045;
	border-radius: 50px;
}

.header2{
	position: fixed;
	height: 100px;
}

.header2 .logo{
	line-height: 100px;
	font-size: 30px;
}

.header2 nav{
	line-height: 100px;
}
input[type="text"]{
    background-color: #FFFFFF;
    border: 1px solid #CCCCCC;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    transition: border 0.2s linear 0s, box-shadow 0.2s linear 0s;
    border-radius: 4px 4px 4px 4px;
    color: #555555;
    display: inline-block;
    font-size: 14px;
    height: 30px;
    line-height: 20px;
    margin-bottom: 10px;
    padding: 4px 6px;
    vertical-align: middle;
}
input[type="text"]:focus {
    border-color: rgba(237, 0, 282, 0.8);
    outline: 0 none;
    -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(237,0,282,.6);
    -moz-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(237,0,282,.6);
    box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(237,0,282,.6);
}
input[type="file"]{
 border: none;
 background: #FFFFFF;
 color: #FFFF4A;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}
input[type="file"]:before{
 content:'';
 position: absolute;
 top: 0px;
 left: 0px;
 width: 0px;
 height: 42px;
 background: rgba(128,128,128,0.3);
 border-radius: 5px;
 transition: all 2s ease;
}
input[type="file"]:hover:before{
 width: 100%;
}
input[type="submit"]{
 border: none;
 background: #FFFE80;
 color: #000;
 padding: 10px;
 font-size: 18px;
 border-radius: 5px;
 position: relative;
 box-sizing: border-box;
 transition: all 500ms ease;
}
input[type="submit"]:before{
 content:'';
 position: absolute;
 top: 0px;
 left: 0px;
 width: 0px;
 height: 42px;
 background: rgba(128,128,128,0.3);
 border-radius: 5px;
 transition: all 2s ease;
}
input[type="submit"]:hover:before{
 width: 100%;
}
</style>
</head>
<body>
<div class="arriba">
	<h1 class="titulo">Ropa</h1>
</div>
<header>
		<div class="wrapper">
			<nav>
				<a href="compra_feliz.php">Home</a>
				<a href="subir_dama.php">Subir ropa</a>
				<a href="comprafelizlogin.php">Salir</a>
			</nav>
		</div>
	</header class="header2">
<form class="form" method="post" enctype="multipart/form-data" action="guardar_dama.php">
        <div>
            <h3>Subir Foto</h3>
            <input type="text" placeholder="nombre" pattern="[A-Za-z]{5}"  name="nombre" required/><br>
            <input type="text" placeholder="descripcion" pattern="[A-Za-z]{5}"  name="descripcion" required/><br>
            <input type="text" placeholder="precio" name="precio" /><br>
            <input type="file" name="archivo" accept="image/gif, image/jpeg, image/png"/>
        </div>
         <br>
        <input type="submit" name="Almacenar" value="Almacenar" />
</body>
</html>