<?php 

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>pets</title>
	<!--<link rel="stylesheet" href="css/bootstrap.css">-->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	body{

	}
	@font-face {
    		font-family: "Ravi Prakash";
    		src: url(fonts/RaviPrakash-Regular.ttf) format("truetype");
		}
	.arriba{
		background-color: #F59C02;
		height: 120px;
		background-image: url(img/huellas.png);
		background-repeat: repeat;
	}
	.titulo{
		font-family: Ravi Prakash;
		color: #ffffff;
		font-size: 97px;
		position: absolute;
		top: 0px;
		left: 30px;
	}
	.imagen{
		width: 175px;
		height: 195px;
		padding: .5em;
		float: left;
	}
	.perro{
		color: #000000;
		font-size: 17px;
		border-style: solid;
		border-color: #FD9B00;
	}
	header{
	width: 100%;
	overflow: hidden;
	background: #F59C02;
}

.wrapper{
	width: 90%;
	max-width: 1000px;
	margin: auto;
	overflow: hidden;
}

header .logo{
	color: #f2f2f2;
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
	background: #f56f3a;
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

	</style>
</head>
<body>
<div class="arriba">
	<h1 class="titulo">Ropa</h1>
</div>
<header>
		<div class="wrapper">
			<nav>
				<a href="home.php">Home</a>
				<a href="index2.php">Subir ropa</a>
				<a href="contacta.php">Contactanos</a>
				<a href="comprafelizlogin.php">Salir</a>
			</nav>
		</div>
	</header class="header2">
<div>
<?php
$conexion = mysqli_connect('localhost', 'root', 'teresamolina', 'cuartoa');

     $subconsulta="SELECT * FROM ropa";

    $filas = mysqli_query($conexion, $subconsulta);
    while ($columnas = mysqli_fetch_assoc($filas) ){
            echo '<div class="">' ;
            echo "<img src='fotos/$columnas[archivo]' class='imagen'>";
            echo '</div>';
             echo '<div class="ropa">' ;
            echo "<p>nombre: $columnas[nombre]</p>";
            echo "<p>Descripcion: $columnas[descripcion]</p>";
            echo "<p>Precio: $columnas[precio]</p>";
            echo "<td class='text-center'><a href='home.php?id=$columnas[id]&idborrar=2'><span class=''>borrar</span></a></td>";
            echo '</div>' ;
        }
        extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM foto WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='home.php'</script>";
					}
?>
<a href=""></a>
</div>
</body>
</html>