<meta charset ="utf-16">
<html>
<head>
    <title>Compra_Feliz></title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <style>
        *{
            margin: 0;
        }
        body{
            background-color:#FF80FF ;
            
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
    background-color: #FF80FF;
    height: 120px;
    background-image: url(img/huellas.png);
    background-repeat: repeat;
  }
  .titulo{
    font-family: Droid Serif;
color: purple;
font-size: 97px;
margin-top: 30px;
margin-left: 382px;
  }
      
        
        
header{
  width: 99%;
  overflow: hidden;
  background: #FF00C6;
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
                input[type="submit"]{
 border: none;
 background: white;
 color: #000000;
 padding: 30px;
 font-size: 18px;
 border-radius: 10px;
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
 background: rgba(255,0,228,0.3);
 border-radius: 5px;
 transition: all 2s ease;
}
input[type="submit"]:hover:before{
 width: 100%;
}
        
#tip{
  font-family: fantasy;
  font-size: 30px;
  color: #FF00FF;
  margin-left:68px ;
  margin-top:-496px ;
  position: absolute;
} 
#supu{
  margin-top:30px ;
  margin-left:340px ;
}
#b1{

  width:32px;
  height:13px; 
 position: absolute;
 background-color:#F7F7F7;
 display: inline-block; 
 padding:-8px;
 padding-left: -3px;
 top:440px;
 left: 60px;
                
            }


            #bb{
width: 32px;
height: 30px;
position: absolute;

display: inline-block;;
padding: -2px;
padding-left: -2px;
top:530px ;
left: 60px;

            }
            #b3{
 width:32px;
height:13px; 
position: absolute;
background-color:#F7F7F7;
display: inline-block; 
padding:-8px;
padding-left:-3px;
top:440px;
 left: 145px;}   
#b4{
 width:32px;
 height:30px; 
 position: absolute;
background-color:#F7F7F7;
 display: inline-block; 
 padding:-2px;
 padding-left: -2px;
  top:530px;
  left: 130px;}   */


            </style>
        </head>
        <body>
        <div class="arriba">
  <h1 class="titulo"><u>Compra Feliz</u></h1>
</div>
<header>
    <div class="wrapper">
      <nav>
        <a href="compra_feliz.php">Home</a>
        <a href="comprafelizlogin.php">Salir</a>
      </nav>
    </div>
  </header class="header2">
<div class="container" id="supu">
      <br>
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="bl.jpg" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="n1.jpg" alt="Chania" width="460" height="345">
          </div>

          <div class="item">
            <img src="S.jpg" alt="Flower" width="460" height="345">
          </div>

          <div class="item">
            <img src="S1.jpg" alt="Flower" width="460" height="345">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
                <div>
                    <p id="tip">Tipo de Ropa</p>
                <form id="b1" method="get" action="nina.php">
                    <input type="submit" value="Niña">
                </form>

                <form id="bb" method="get" action="nino.php">
                    <input type="submit" value="Niño"> 
                </form>

                <form  id="b3" method="get"  action="dama.php">
                    <input type="submit" value="Dama"/>
                </form>

                <form id="b4" method="get" action="caballero.php">
                    <input type="submit" value="Hombre"/>
                </form>

                <div>  

                </div>
                </div>
        </body>
        </html>