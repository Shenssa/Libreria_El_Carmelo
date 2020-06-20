<?php require_once("conexion.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>El Carmelo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
    <link rel="stylesheet" href="../css/style2.css">

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
                    <input type="text" name="palabra" required="" placeholder="Buscar libro..." />
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

                        <div class="login-wrap">
                            <div class="login-html" >
                                <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">USUARIO</label>
                                <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">ADMINISTRADOR</label>
                                <div class="login-form">
                                    <div class="sign-in-htm">
                                        <div class="group">
                                            <label for="pass" class="label">Dirección e-mail</label>
                                            <input id="pass" type="text" class="input">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Contraseña</label>
                                            <input id="pass" type="password" class="input" data-type="password">
                                        </div>
                                        <div class="group">
                                            <input id="check" type="checkbox" class="check" checked>
                                            <label for="check"><span class="icon"></span> Mantener mi sesión iniciada</label>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Iniciar Sesión">
                                        </div>
                                        <div class="foot-lnk">
                                            <a href="#forgot">Aún no estoy registrado</a>
                                        </div>
                                    </div>
                                    <div class="sign-up-htm">
                                        <div class="group">
                                            <label for="pass" class="label">Dirección e-mail</label>
                                            <input id="pass" type="text" class="input">
                                        </div>
                                        <div class="group">
                                            <label for="pass" class="label">Contraseña</label>
                                            <input id="pass" type="password" class="input" data-type="password">
                                        </div>
                                        <div class="group">
                                            <input id="check" type="checkbox" class="check" checked>
                                            <label for="check"><span class="icon"></span> Mantener mi sesión iniciada</label>
                                        </div>
                                        <div class="group">
                                            <input type="submit" class="button" value="Iniciar Sesión">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="movie-list">



                </div> <!-- movie list -->


            </div> <!-- main -->

            <footer><?php require_once("footer.php") ?></footer>

        </div> <!-- window -->

        <!-- partial -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="../script/script.js"></script>

</body>

</html>