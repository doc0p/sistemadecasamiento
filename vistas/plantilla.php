<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="author" content="NextGenerationDev">
   <title>Wedding, Wedding Planer & Event HTML Template</title>
   <!--Favicon img-->
   <link rel="shortcut icon" href="assets/img/favicon/favicon.png">
   <!--Bootstarp min css-->
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <!--Bootstarp map css-->
   <link rel="stylesheet" href="assets/css/bootstrap.css.map">
   <!--Owl Carousel css-->
   <link rel="stylesheet" href="assets/css/owl.min.css">
   <!--Owl Carousel Theme css-->
   <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
   <!--All min css-->
   <link rel="stylesheet" href="assets/css/all.min.css">
   <!--Animate css-->
   <link rel="stylesheet" href="assets/css/animate.css">
   <!--Magnific popup css-->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!--Swiper min css-->
   <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
   <!--main css-->
   <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!--==== Header Section Here ======= -->
<header class="header-section">
   <div class="container">
      <div class="header-wrapper">
         <div class="logo-menu">
            <a href="index.html" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>

         <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>WepApp 4C - ODMA</title>
          
            <!--Pluggins CSS-->
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
            <!--Pluggins js-->
            <!-- jQuery library -->
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
            <!-- Popper JS -->
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          
            <!-- Latest compiled JavaScript -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://kit.fontawesome.com/7156aa3f07.js" crossorigin="anonymous"></script>
          
          </head>
          
          <body>
            <!-- Logotipo de la empresa-->
            <div class="container-fluid">
              <h3 class="text-center py-3">LOGO</h3>
            </div>
          
            <!--MENU PRINCIPAL DE LA PAGINA NAV -->
          
            <div class="container-fluid bg-light">
              <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">
                  <!--
                    GET: $GET["variable"] Variables que se pasan como paramaetros via URL
                    (Tambien conocidos como cadena de consulta a traves de la url)
                    Cuando es la primera ves se separa con ?
                    la siguiente a continuacion se separan con &
                  -->
          
                  <?php if (isset($_GET['pagina'])) : ?>
                    <?php if ($_GET['pagina'] == "registro") : ?>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                      </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=registro">Registro</a>
                      </li>
                    <?php endif ?>
                  <?php endif ?>
          
                  <?php if (isset($_GET['pagina'])) : ?>
                    <?php if ($_GET['pagina'] == "ingreso") : ?>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=ingreso">Ingreso</a>
                      </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                      </li>
                    <?php endif ?>
                  <?php endif ?>
          
                  <?php if (isset($_GET['pagina'])) : ?>
                    <?php if ($_GET['pagina'] == "inicio") : ?>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a>
                      </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                      </li>
                    <?php endif ?>
                  <?php endif ?>
          
                  <?php if (isset($_GET['pagina'])) : ?>
                    <?php if ($_GET['pagina'] == "salir") : ?>
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php?pagina=salir">Salir</a>
                      </li>
                    <?php else : ?>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                      </li>
                    <?php endif ?>
                  <?php else : ?>
                    <li class="nav-item">
                      <a class="nav-link active" href="index.php?pagina=registro">Registro</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=ingreso">Ingreso</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=inicio">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="index.php?pagina=salir">Salir</a>
                    </li>
                  <?php endif ?>
                </ul>
              </div>
            </div>
            <!--Contenido-->
            <div class="container-fluid">
              <div class="container py-5">
                <?php
                #ISSET: isset() Determina si una variable de tipo GET o POST esta definida
                #y no es NULL
                if (isset($_GET['pagina'])) {
                  //Lista de Paginas blancas o paginas permitidas en nuestro sitio
                  if (
                    $_GET['pagina'] == "registro" ||
                    $_GET['pagina'] == "ingreso" ||
                    $_GET['pagina'] == "inicio" ||
                    $_GET['pagina'] == "editar"||
                    $_GET['pagina'] == "salir"
                  ) {
                    include "paginas/" .  $_GET['pagina'] . ".php";
                  } else {
                    "paginas/error404.php";
                  }
                } else {
                  include "paginas/registro.php";
                }
                ?>
              </div>
            </div>
          </body>

        
         
      </div>
   </div>
</header>
<section class="banner__section">
   <div class="banner-overlay">
       <div class="container">
          <div class="row g-4 justify-content-center">
             <div class="col-lg-12">


                <div class="banner__content center">
               
                   
                  <h5 class="wow fadeInUp" data-wow-duration="2s">Wedding welcomes</h5>
                   
            
                 

             </div>
          </div>
       </div>
   </div>
</section>
<!--=========== Banner Section End ========= -->

</body>
</html>