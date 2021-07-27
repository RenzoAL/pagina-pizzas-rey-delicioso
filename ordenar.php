<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--FAVICON-->
    <link rel="shortcut icon" href="img/LOGO.PNG" type="image/x-icon">

    <title>Pizza | Ordenar</title>

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
            <span class="btn-menu"><i class="fas fa-bars"></i></span>
            </div>
        </nav>


    </header>
    <!--Menú de navegación-->
    
    
    <?php 
    $tipo=$_GET['nombre'];
    $prec=$_GET['prex'];
    
    ?>

         <div class="footer">
        <div class="deg-footer"></div>
    
    <div class="ejeZfooter">
        <div class="footer-content">
            <div class="footer-title">
               <hr>
                <h2>GUARDA TU PEDIDO</h2>
                <hr>
            </div>
        </div>
    </div>
        
    </div>  

    <!--INFORMACIÓN-->
    <section class="contenedor-info">
        <div class="contenedor-informacion">
                    <!--MAPA-->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1951.652356536579!2d-76.9927829442116!3d-11.953392342393274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c54b85673437%3A0x7e8c71a2c4a3eb4c!2sIE%20120%20Manuel%20Robles%20Alarcon!5e0!3m2!1ses-419!2spe!4v1597480090569!5m2!1ses-419!2spe" width="500" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="imagen-about-us">
                </iframe>
                
            <div class="formulario-content">
                <form class="contact_form" id="Formulario" action="registro.php" method="post">
                    <input type="number" id="nombres" name="txtdni" placeholder="DNI" class="input-48" required>
                    <input type="text" id="nombre del dueño" name="txtnombre" placeholder="Escribe tu nombre" class="input-48" required>
                    
                    <input type="text" id="apellidos" name="txtapellido" placeholder="Escribe tu apellido" class="input-48" required>
                    
                    <input type="number" id="apellidos" name="txtcelular" placeholder="#########" class="input-48" required>
                    
                    <input type="text" id="apellidos" name="txttipo" readonly="readonly" class="input-48" value="<?php echo $tipo;?>">
                    
                    <input type="text" id="apellidos" name="txtprecio" readonly="readonly" class="input-48" value="<?php echo $prec?>">
                    
                   <div class="send"><button class="submit" type='submit' value='send' name='send'>Guardar</button></div>
                    

                </form>
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

    <!--Pie de página-->
<!--Scripts-->
<script src="https://kit.fontawesome.com/8a2cb61fee.js" crossorigin="anonymous"></script>
<script src="js/jst.js"></script>
</body>
</html>