<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            body{
                background-color: #101417;
                color:azure;
                font-family: "Gotham Narrow SSm",sans-serif,Arial;
                margin: 0;
                padding: 0;
            }
            .headerTop{
                background-color: #000000;
            }
            
            
            .menu1{
                background-color : red;
                float: left;
            }
           
           
        </style>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/templatefixs.js" type="text/javascript"></script>
        
        <link href="base.css" rel="stylesheet" type="text/css"/>
        <!--[if gte IE 9]>
            <style type="text/css">
            .gradient {
               filter: none;
            }
        </style>
      <![endif]-->
    </head>
    <body>
        <header class="header">
            <h1 class="logo">
                <a href="#">DevTics.com.mX</a>
            </h1>
            <nav>
                <ul>
                    <li>
                        <a href="#">Home</a>
                        <ul style="display:none">
                            <li><a href="#"> Acerca de mi</a></li>
                            <li><a href="#">Educación</a></li>
                            <li><a href="#">Empresas</a></li>
                            <li><a href="#">Proyectos</a></li>
                            <li><a href="#">Técnologias</a></li>
                            <li><a href="#">Contacto</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog</a>
                        <ul style="display:none">
                            <li>PHP</li>
                            <li>JavaScript</li>
                            <li>Doctrine</li>
                            <li>MySql</li>
                            <li>Java</li>
                            <li>MySql</li>
                        </ul>
                    </li>
                    <li><a href="#"> Acerca de</a></li>
                    <li><a href="#">Cotacto</a></li>
                </ul>
            </nav>
            <div class="clean"></div>
        </header>
        <section class="main">            
            <section class="content">
                <?php for($i=0;$i<1000;$i++) :?>
                <p> Contenido Aqui</p>
                <?php endfor;?>
                 <div class="clean"></div>
            </section>
            <div class="clean"></div>
        </section>
    </body>
</html>