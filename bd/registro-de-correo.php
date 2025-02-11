<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="../css/estilos-articulo.css">
    <link rel="stylesheet" href="estilos.css">
    <!--RESPONSIVE-->
    <link rel="stylesheet" href="../css/responsive-articulo.css">
    <!-- MENU CSS-->
    <link rel="stylesheet" href="../css/menu.css">
    <!-- FOOTER CSS-->
    <link rel="stylesheet" href="../css/footer.css">

    <!-- FONT MONTSERRAT-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&display=swap" rel="stylesheet">   
    <!--FONT KARLA-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@200&display=swap" rel="stylesheet">
    <!--FONT ALEGREYA-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@300&display=swap" rel="stylesheet"> 

    <!--Plugins Redes-->
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.1.0/css/all.css'>

    <!--FAVICON-->
    <link  rel="icon"   href="../recursos/favicon-32x32.png" type="image/png" />
    <link rel="apple-touch-icon" sizes="180x180" href="../recursos/favicon/apple-touch-icon.png">

    <!--ETIQUETAS META-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta http-equiv="content-language" content="es" />
	<meta name="keywords" content=""/><!--AÑADE PALABRAS CLAVES-->
	<meta name ="author" content ="Explosivo G, Entertainment"/>
    <meta name="theme-color" content="#000000"/>

    <title>NEWSLETTER | Explosivo G</title>
</head>
<body>
    	<!-- caja contenedor de logo, menu, redes -->
        <header class="header">
            <div class="header_content d-flex align-items-center justify-content-center">
                <!--Logo-->
                <div class="logo"><a href="https://explosivog.com"><img src="../recursos/logo.png"></a></div>
                <!--Menu ordenador-->
                <form id="Menu-ordenador" v-cloak>
                    <nav class="menu_ordenador">
                        <ul class="d-flex d-flex align-items-center justify-content-center justify-content">
                            <li v-for="article in filteredArticles">
                                <a href="#" v-bind:href="article.url">
                                   <p>{{article.title}}</p>
                                </a>
                            </li> 
                        </ul>
                    </nav>      
                </form>
                <!-- Hamburguesa -->
                <div class="hamburger ml-auto">
                   MENÚ 
                    <div class="d-flex flex-column align-items-end justify-content-between">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
                <!--redes-->
                <div class="redes-escritorio">	
                    <section>
                        <div class="social"> 
                            <div class="margen-responsive-redes-4x4">   
                                <a href="https://www.instagram.com/explosivog/?hl=es-la" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a> 
                                <a href="https://www.facebook.com/explosivog/" target="_blank">
                                   <i class="fab fa-facebook-f"></i></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCcKdOMQykOmAls4bJX2moOg" target="_blank">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="https://open.spotify.com/user/apwdmpx6lr962qnukmk3chluc" target="_blank">
                                   <i class="fab fa-spotify"></i></i>
                                </a>
                            </div>
                        </div>
                    </section>	
                </div>
            </div>
        </header>
        <!--Menu Responsive-->
        <div class="menu">
            <div>
                <div class="menu_overlay"></div>
                <div class="menu_container">
                    <nav class="caja-redes-responsive">
                       <!--redes-->
                        <div class="redes-responsive">	
                            <section>
                                <div class="social"> 
                                    <a href="https://www.instagram.com/explosivog/?hl=es-la" target="_blank">
                                      <i class="fab fa-instagram"></i>
                                    </a> 
                                    <a href="https://www.facebook.com/explosivog/" target="_blank">
                                       <i class="fab fa-facebook-f"></i></i>
                                    </a>
                                    <a href="https://www.youtube.com/channel/UCcKdOMQykOmAls4bJX2moOg" target="_blank">
                                      <i class="fab fa-youtube"></i>
                                    </a>
                                    <a href="https://open.spotify.com/user/apwdmpx6lr962qnukmk3chluc" target="_blank">
                                      <i class="fab fa-spotify"></i></i>
                                    </a>
                                </div>
                            </section>	
                        </div>
                    </nav>
                    <nav class="menu_responsive">
                        <ul class="flex-column">
                            <form id="Menu-responsive" v-cloak>            
                                <li v-for="article in filteredArticles">
                                    <a href="#" v-bind:href="article.url">
                                       <p>{{article.title}}</p>
                                    </a>
                                </li>       
                            </form>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    <br>
    <div class="container">
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');
            include 'conexion.php';
            $correo = $_POST["correo"];
            
            $insertar = "INSERT INTO boletines(correo) VALUES ('$correo')";
            $resultado = mysqli_query($conexion, $insertar);
            if (!$resultado){
                echo"<div class='contenido404'>";
                echo"<h1>!HUBO UN ERROR¡</h1>";
                echo"<h2>No logramos conectarnos con el servidor y agregar tu correo</h2>";
                echo"<br>";
                echo"<h2>$correo</h2>";
                echo"<br>";
                echo"<h2>en nuestra base de datos, revisa tu conexion a internet.</h2>";
                echo"<br>";
                echo"</div"; 
            }
            else{
                echo"<div class='contenido1'>";
                echo"<h1>!BIENVENIDO/A¡</h1>";
                echo"<h2>Ya te encuentras inscrito en nuestro NEWSLETTER con tu correo</h2>";
                echo"<br>";
                echo"<h2>$correo</h2>";
                echo"<br>";
                echo"<h2>Recibiras NOVEDADES cada semana de todo nuestro CONTENIDO.</h2>";
                echo"<br>";
                echo"</div";
            }
            mysqli_close($conexion);
        ?>
        <h2><a href="https://explosivog.com/">Volver al Inicio</a></h2>
    </div>
    
    <br><br>
    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer_container">
            <div class="newsletter_container">
                <div class="newsletter_title"><h2>Suscribete y mantente al tanto de todo lo nuevo.</h2></div>
                <form action="#" id="newsletter_form" class="newsletter_form">
                    <input type="email" class="newsletter_input" placeholder="Número de WhatsApp O Correo Electrónico" required="required">
                    <button class="newsletter_button">ENVIAR</button>
                </form>
            </div>
                <!-- NUESTROS LINKS -->
                <div class="footer_list">
                    <div class="footer_list_title">NUESTROS <br>LINKS</div>
                    <form id="nuestros-links" v-cloak>
                        <ul>
                            <li v-for="article in filteredArticles">
                                <a href="#" v-bind:href="article.url">
                                   <p>{{article.title}}</p>
                                </a>
                           </li> 
                       </ul>
                   </form>
                </div>
                <!-- CANALES -->
                <div class="footer_list">
                    <div class="footer_list_title">CANALES</div>
                    <form id="nuestros-canales" v-cloak>
                        <ul>
                            <li v-for="article in filteredArticles">
                                <a href="#" v-bind:href="article.url">
                                   <p>{{article.title}}</p>
                                </a>
                           </li> 
                       </ul>
                   </form>
                </div>
                <!-- CONNECTIVIDAD -->
                <div class="footer_list">
                    <div class="footer_list_title">CONTACTO</div>
                     <form id="contacto" v-cloak>
                        <ul>
                            <li v-for="article in filteredArticles">
                                <a href="#" v-bind:href="article.url">
                                   <p>{{article.title}}</p>
                                </a>
                           </li> 
                       </ul>
                   </form>
                </div>
            
        </div>
        <div class="copyright_bar">
            <span>
               &copy;2020 Explosivo G Entertainment | Todos los Derechos Reservados.
            </span>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.0.5/vue.min.js"></script>
    <script src="js/menu-scroll.js"></script>
    <script src="js/MENU-URLS.js"></script>
</body>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f35ca466d4a930012f564c8&product=inline-share-buttons' async='async'></script>
</html>