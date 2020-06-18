<?php require_once("conexion.php")?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>El Carmelo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="../script/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

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
                                <li class="active">
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
                        <b>FANTASIA</b> Todos nuestros libros
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="movie-list">


                <ul class="list">
                                <?php 
                                $sql="SELECT * from libros where genero='fantasia'";
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){
                                ?>
                                   <li>
                                    <td><?php echo "<img alt='' class='cover' src='".$mostrar["portada"]."'>"; ?></td>
                                    <p class="title"><?php echo $mostrar['nombre'] ?></p>
                                    <p class="title">S/<?php echo $mostrar['precio'] ?></p>
                                    <p class="genre"><?php echo "<a style='color:#85929E;' href='".$mostrar["genero"].".php'>".$mostrar['genero']."</a>"?></p>
                                    <?php echo
"
<!--
<!-- Button trigger modal -->
<button type='button' class='btn btn-primary btn-block' data-toggle='modal' data-target='#".$mostrar['id']."'>
  Ver mas detalles
</button>

<!-- Modal -->

<div class='modal fade' id='".$mostrar['id']."' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
  <div class='modal-dialog modal-lg' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h3 class='modal-title' id='exampleModalLongTitle'>".$mostrar['nombre']."</h3>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>

        <table id='bootstrap-data-table' class='table table-striped table-bordered'>
            <tbody>
                <tr>
                    <td><img width='10px' src='".$mostrar['portada']."'></td>
                    <td>".$mostrar['descripcion']."</td>
                <tr>  
                <tr>
                    <b><td align='right'>Autor:</td></b>
                    <td>".$mostrar['autor']."</td>
                <tr>  
                <tr>
                    <b><td align='right'>Genero:</td></b>
                    <td><u><a style='color:#000000;' href='".$mostrar["genero"].".php'>".$mostrar['genero']."</a></u></td>
                <tr>  
                <tr>
                    <b><td align='right'>Precio:</td></b>
                    <td>".$mostrar['precio']."</td>

                <tr>   

                
            </tbody>
        </table>




      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>
        <button type='button' class='btn btn-success'>COMPRAR</button>
      </div>
    </div>
  </div>
</div>"
?>
                                </li>

                                <?php 
                                }
                                ?>
                </ul>

            </div> <!-- movie list -->


        </div> <!-- main -->
        
        <footer><?php require_once("footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>

</body>
</html>
