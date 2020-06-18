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
                
                <div class="contenedor">

                        <div class="login">

                            <article class="fondo">
                                
                                    <br>
                                <h3>
                                    Registrate
                                </h3>
                                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>" class="" method="POST" name="login">
                                    <font color="white">
                                        
                                            <input class="inp" id="idemail" name="email" required="" type="email" placeholder="CORREO" />
                                        
                                       
                                            <input class="inp" id="iduser" name="user" required="" type="text" placeholder="DNI" pattern="[0-9]+" maxlength="8"  />
                                        
                                  
                                            <input class="inp" id="idpass" name="pass" required="" type="password" placeholder="CONTRASENA" />
                                        <p align="center">
                                            <input class="boton" name="inicio" type="submit" value="Registrar" ></p>
                                    </input>
                                   <?php
                                   ?>
                                    </font>
                                            <a class="he" href="login_db.php">
                                                Ya estoy registrado.
                                            </a>
                                        </br>
                                    </br>
                                    <?php  if (!empty($errores)){
                                        '<div class="error">';
                                           
                                                echo $errores;
                                            
                                        '</div>';
                                        }
                                    ?>
                                </form>
                            </article>
                        </div>
                        
            <div class="movie-list">

                                

            </div> <!-- movie list -->


        </div> <!-- main -->
        
        <footer><?php require_once("footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>

</body>
</html>
