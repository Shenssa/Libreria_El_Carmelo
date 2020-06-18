<?php require_once("conexion.php") ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>El Carmelo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->

    <div class="window">

        <aside class="sidebar">
            <a href="index.php">
                            <div class="top-bar card-title">
                                <p class="logo">
                                    EL CARMELO
                                </p>
                            </div>
                        </a>

            <div class="search-box">
                <form action="buscar_libro.php" class="" method="post" name="busqueda">
                <input type="text" name="palabra" required="" placeholder="Buscar libro..."/>
                <p class="fa fa-search"></p>
                </form>
            </div>

            <menu class="menu">
                            <p class="menu-name">
                                GÉNEROS LITERARIOS
                            </p>
                            <ul>
                                <li>
                                    <a href="Educacion.php">
                                        EDUCACIÓN
                                    </a>
                                </li>
                                <li>
                                    <a href="Accion-Aventuras.php">
                                        ACCIÓN / AVENTURAS
                                    </a>
                                </li>
                                <li>
                                    <a href="Poesia.php">
                                        POESÍA
                                    </a>
                                </li>
                                <li>
                                    <a href="Fantasia.php">
                                        FANTASÍA
                                    </a>
                                </li>
                                <li>
                                    <a href="Terror.php">
                                        TERROR
                                    </a>
                                </li>
                                <li>
                                    <a href="Drama.php">
                                        DRAMA
                                    </a>
                                </li>
                                <li>
                                    <a href="Cuentos.php">
                                        CUENTOS
                                    </a>
                                </li>
                                <li>
                                    <a href="lista.php">
                                        LISTA A-Z
                                    </a>
                                </li>
                            </ul>
                            <div class="separator">
                            </div>
                            
                        </menu>
        </aside>
        <div class="main" role="main">

            <!-- top bar -->
            <div class="top-bar">
                <?php
                require_once("top-bar.php");
                ?>
            </div> <!-- top bar -->


            <div class="featured-movie">
                <img class="cover" src="../imagenes/educacion.png" alt="" class="cover" />
                <!-- Info de pagina -->
                <div class="bottom-bar">
                    <div class="title-container">
                        <b>UBICANOS</b> En Gogle Maps
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="movie-list">

                <div class="contenedor">
                        <div class="mensaje">
                            <article class="fondo">
                                <br>
                                <h3>
                                    Enviar un Mensaje
                                </h3>

                               <script language="JavaScript">
                                function alertas() {
                                alert("Mensaje enviado");
                                }
                                </script>
    
    <form action="enviar/enviar_mensaje.php" class="" method="post" name="contacto">

    <input class="inp" name="nombres" type="text" value="" required="" placeholder="NOMBRES">

    <br>

    <input class="inp" id="dni" name="dni" type="text" placeholder="DNI (Opcional)" maxlength="8" size="8" pattern="\d*"/>

    <br>

    <input class="inp" type="tel" id="fono" name="fono" placeholder="Telefono (Opcional)">

    <br>

    <input class="inp" name="email" type="email" value="" required="" placeholder="CORREO">

    <br>

    <input class="inp" name="asunto" type="text" value="" required="" placeholder="ASUNTO">

    <br>

    <textarea class="textarea" name="mensaje" type="text" value="" required="" placeholder="ESCRIBE AQUÍ UN MENSAJE" rows="50" cols="50"></textarea>
                                            
    <input class="boton" name="inicio" type="submit"  value="ENVIAR"></input>
                                                    
                                                        
                                            </input>
                                        
                                    </input>
                                </form>
                            </article>
                        </div>
                    </div>

                        </div>
                        

            </div> <!-- movie list -->


        </div> <!-- main -->
        
        <footer><?php require_once("footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>

</body>
</html>
