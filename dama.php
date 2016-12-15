<!DOCTYPE html>
<html>
<head>
<title>Dama</title>
<style>
@font-face {
    		font-family: "Roboto Slab";
    		src: url(fonts/RobotoSlab-Regular.ttf) format("truetype");
		}
		@font-face {
    		font-family: "Droid Serif";
    		src: url(fonts/DroidSerif.ttf) format("truetype");
		}
	.arriba{
		background-color: #A851FF;
		height: 120px;
		background-image: url(img/huellas.png);
		background-repeat: repeat;
	}
	.titulo{
		font-family: Roboto Slab;
color: #AA00AA;
font-size: 97px;
position: absolute;
top: -15px;
left: 391px;
	}
header{
	width: 100%;
	overflow: hidden;
	background: #A851FF;
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

</style>
</head>
<body>
<div class="arriba">
	<h1 class="titulo">Ropa Dama</h1>
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
<div>
<a href="subir_dama.php"></a>
</div>
<?php
$conexion = mysqli_connect('localhost', 'root', 'jesusfernando', 'compra');

     $subconsulta="SELECT * FROM ropa_dama";
    $filas = mysqli_query($conexion, $subconsulta);
    while ($columnas = mysqli_fetch_assoc($filas) ){
            echo '<div class="">' ;
            echo "<img src='dama/$columnas[archivo]' class='imagen'>";
            echo '</div>';
             echo '<div class="ropa">' ;
            echo "<p>nombre: $columnas[nombre]</p>";
            echo "<p>Descripcion: $columnas[descripcion]</p>";
            echo "<p>Precio: $columnas[precio]</p>";
            echo "<td class='text-center'><a href='dama.php?id=$columnas[id]&idborrar=2'><span class=''>borrar</span></a></td>";
            echo '<a href="https://www.paypal.com/mx/webapps/mpp/home?adgroup=PayPal+1KWC&campaign=PayPal_JOINT_1KWC&kw=[paypal]&gclid=COLg_62659ACFRuewAodlP8Okg&mpch=ads&rftp=7&srce=cnvr&ercc=27724-218523-2056-0&spid=476703663139931668">comprar</a>';
            echo '</div>' ;
        }
        extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM ropa_dama WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='dama.php'</script>";
					}
?>
</body>
</html>