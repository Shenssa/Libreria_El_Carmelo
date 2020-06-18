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
                        <b>NUESTRA VISION Y MISION</b> Nuestro compromiso
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="movie-list">

                <table align="center" class="fondotabla" width="100%">
                                <tr align="center">
                                    <td colspan="3" width="10%">
                                        <div class="featured-movie">
                                            
                                        </div>
                                    </td>
                                </tr>
                                 <tr align="center">
                                <td colspan="3" style="border-radius: 0px 0px 20px 20px;" width="10%">
                                    <p></p>
                                </td>
                            </tr>
                                <tr align="center">
                                    <td class="transparente" width="10%">
                                        <br>
                                            <br>
                                                <p>
                                                </p>
                                            </br>
                                        </br>
                                    </td>
                                    <td class="transparente" width="80%">
                                        <br>
                                            <br>
                                                <font color="white" size="5">
                                                    <p align="justify">
                                                        VISIÓN
                                                    </p>
                                                    <p align="justify">
                                                        Ser la mejor empresa de distribución de libros a nivel nacional asociados con los mejores proveedor y teniendo los mejores precios.
                                                    </p>
                                                </font>
                                            </br>
                                        </br>
                                    </td>
                                    <td class="transparente" width="10%">
                                        <br>
                                            <br>
                                                <p>
                                                </p>
                                            </br>
                                        </br>
                                    </td>
                                </tr>
                                                
                                
                                <tr align="center">
                                    <td class="transparente" width="10%">
                                        <br>
                                            <br>
                                                <p>
                                                </p>
                                            </br>
                                        </br>
                                    </td>
                                    <td class="transparente" width="80%">
                                        <br>
                                            <br>
                                                <font color="white" size="5">
                                                    <p align="justify">
                                                        MISIÓN
                                                    </p>
                                                    <p align="justify">
                                                        Ser líderes en la distribución de libros brindado servicios físicos y digitales para poder llegar a todos los lugares del mundo y brindando mejores expectativas en los clientes.
                                                    </p>
                                                </font>
                                            </br></br></br></br></br></br></br>
                                        </br>
                                    </td>
                                    <td class="transparente" width="10%">
                                        <br>
                                            <br>
                                                <p>
                                                </p>
                                            </br>
                                        </br>
                                    </td>
                                </tr>
                            
                            </table>

            </div> <!-- movie list -->


        </div> <!-- main -->
        
        <footer><?php require_once("footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>

</body>
</html>
