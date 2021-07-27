<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Rey | Pizzas</title>

    <!--FAVICON-->
    <link rel="shortcut icon" href="img/LOGO.PNG" type="image/x-icon">

    <!--Estilos-->
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <!--MENÚ DE NAVEGACIÓN-->
<header id="header">

        <nav class="menu">

            <div class="logo-box">
            <img class="logoGGSC" src="img/pizza_logos.png">
            </div>


            <!--CONTENEDORES DEL MENÚ-->
            <div class="list-container">
                <ul class="lists">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="nosotros.php">NOSOTROS</a></li>
                <li><a href="pizzas.php">PIZZA</a></li>
                <li><a href="pedidos.php">VER PEDIDOS</a></li>
            </ul>
            </div>
        </nav>

        <!--IMG Header--> 
        <div class="img-header3">
            <div class="welcome">
                <h2>NUESTRA</h2>
                <hr><hr>
                <h1>CARTA</h1>
                
            </div>
        </div>

    </header>
    <!--Menú de navegación-->
</body>

<!--TITULO-->
<section class="lineas-negocio">
    <div class="contenedor-linNeg"> 
        <h1>Pizzas de Queso</h1>
    </div>

<!--GALERIA-->
    <div class="galeria">
        <div class="item">
            <img src="img/piza_pica.jpg" alt="" class="item-img-pizza">
                <div class="item-text">                 
                 <h3>Pizza Pica Queso</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                  <div class="about-more"><a href="ordenar.php?nombre=Pizza Pica Queso&prex=30.00"><button>Pedir</button></a></div>
                </div>
            </div>

            <div class="item">
            <img src="img/pizza_queso1.jpg" alt="" class="item-img-pizza">
                <div class="item-text">
                <h3>Pizza 4 Quesos</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                 <div class="about-more"><a href="ordenar.php?nombre=Pizza 4 Quesos&prex=35.00"><button>Pedir</button></a></div>
                </div>
            </div>

            <div class="item">
            <img src="img/pizza_queto.jpg" alt="" class="item-img-pizza">
                <div class="item-text">
                 <h3>Pizza Tomate y Queso</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                 <div class="about-more"><a href="ordenar.php?nombre=Pizza Tomate y Queso&prex=50.00"><button>Pedir</button></a></div>
                </div>
            </div>
    </div>
</section>

<section class="lineas-negocio">
    <div class="contenedor-linNeg"> 
        <h1>Pizzas de Carne</h1>
    </div>

<!--GALERIA-->
    <div class="galeria">
        <div class="item">
            <img src="img/pizza_carni.jpg" alt="" class="item-img-pizza1">
                <div class="item-text">
                 <h3>Pizza Carnivora</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                 <div class="about-more"><a href="ordenar.php?nombre=Pizza Carnivora&prex=42.00">
                 <button>Pedir</button></a></div>
                </div>
            </div>

            <div class="item">
            <img src="img/pizza_carne.jpg" alt="" class="item-img-pizza1">
                <div class="item-text">
                 <h3>Pizza de Carne</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                 <div class="about-more"><a href="ordenar.php?nombre=Pizza de Carne&prex=60.00"><button>Pedir</button></a></div>
                </div>
            </div>

            <div class="item">
            <img src="img/pizza_bacons.png" alt="" class="item-img-pizza1">
                <div class="item-text">
                 <h3>Pizza de Bacon</h3>
                 <p>Lorem ipsum dolor sit amet, conectetur.</p>
                 <div class="about-more"><a href="ordenar.php?nombre=Pizza de Bacon&prex=55.00"><button>Pedir</button></a></div>
                </div>
            </div>
    </div>
</section>



<!--Pie de página-->
    <footer>
        <!--Redes Sociales-->
        <div class="redes-sociales">
            <a href="https://www.facebook.com/" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="https://twitter.com/" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>

            <a href="https://www.youtube.com/" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </div>

            <h6 class="titulo-final">&copy; Todos los derechos | reservados  </h6>
    </footer>

<!--Scripts-->
<script src="https://kit.fontawesome.com/8a2cb61fee.js" crossorigin="anonymous"></script>
<script src="js/jst.js"></script>

</html>