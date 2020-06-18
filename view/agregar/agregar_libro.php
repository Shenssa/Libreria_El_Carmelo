<?php
require_once("../conexion.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
            <title>
                EL CARMELO
            </title>
            <link href="../../css/reset.min.css" rel="stylesheet">
            <link href="../../css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="../../css/bootstrap.min.css">
            <link rel="stylesheet" href="../../css/dataTables.bootstrap.min.css">

        </meta>
  <title>El Carmelo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../../css/style.css">

</head>
<script type="text/javascript">
        function Confirmar()
        {
          var respuesta=confirm("¿Está seguro de eliminar el libro?");
          if (respuesta==true)
          {
            return true;
          }     
          else
          {
            return false;
          }
        }

    </script>
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

            <menu class="menu">
                            <p class="menu-name">
                                CONTROLES
                            </p>
                            <ul>
                                <li>
                                    <a href="index_admin.php">
                                        STOCK
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        VENTAS
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        PROVEEDORES
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="mensajes.php">
                                        MENSAJES
                                    </a>
                                </li>
                                
                            </ul>
                            <div class="separator">
                            <ul>
                                <li>
                                    <a href="index.php">
                                        CERRAR SESION
                                    </a>
                                </li>  
                            </ul>
                            </div>
                        </menu>
        </aside>
        <div class="main" role="main">

            <!-- top bar -->
            <div class="top-bar">
                <?php
                require_once("../top-bar.php");
                ?>
            </div> <!-- top bar -->


            <div class="featured-movie">
                <img class="cover" src="../../imagenes/admin.png" alt="" class="cover" />
                <!-- Info de pagina -->
                <div class="bottom-bar">
                    <div class="title-container">
                        <b>RESPUESTA</b> Al mensaje
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                        
                            <div class="card-body">
                              <CENTER><div class="col-lg-6">
                        <div class="card">
                            <div class="card-header"> <strong>Información del libro</strong> </div>
                               
                                   <!-- FORMULARIOS -->
                                    <div class="card-body card-block">
                                        
                                        <!-- EDITAR -->
                                        <form action="agregar_libro2.php" method="post" class="form-horizontal">
                                              <input type="hidden" value="1" name="cod">
                                              <input type="hidden" value="" name="idenvase">

                                                    
                                                <div class="control-group">
                                                <label class="col-12 col-md-9"><b>Nombre</b></label>
                                                <div class="col-12 col-md-9">
                                                <input type='text' id='nombre' name='nombre' placeholder='Texto' class='form-control' value=''>
                                                </div>
                                                </div>


                                                <div class="control-group">
                                                <label class="col-4 col-md-4"><b>Genero</b></label>
                                                <div class="col-12 col-md-4">
                                                <select name="genero" class="form-control" >
                                                  <?php 
                                                    $sql1="SELECT DISTINCT genero FROM libros";
                                                    $result1=mysqli_query($conexion,$sql1);
                                                    while($mostrar1=mysqli_fetch_array($result1)){
                                                    ?>
                                
                                                    <?php echo "<option value='".$mostrar1['genero']."'>".$mostrar1['genero']."</option>" ?>

                                                     <?php
                                                    }
                                                    ?>
                                                </select>

                                                </div>
                                                </div>


                                                <div class="control-group">
                                                <label class="col-12 col-md-9"><b>Autor</b></label>
                                                <div class="col-12 col-md-9">
                                                <input type='text' id='autor' name='autor' placeholder='Texto' class='form-control' value=''>
                                                </div>
                                                </div>

                                                <div class="control-group">
                                                <label class="col-12 col-md-9"><b>Descripción</b></label>
                                                <div class="col-12 col-md-9">
                                                <textarea rows='6' type='text' id='descripcion' name='descripcion' placeholder='Texto' class='form-control'></textarea>
                                                </div>
                                                </div>

                                                <div class="control-group">
                                                <label class="col-12 col-md-9"><b>Portada</b></label>
                                                <div class="col-12 col-md-9">
                                                <input type='text' id='portada' name='portada' placeholder='Texto' class='form-control' value=''>
                                                </div>
                                                </div>

                                                <div class="control-group">
                                                <label class="col-12 col-md-9"><b>Precio</b></label>
                                                <div class="col-12 col-md-9">
                                                <input type='number' id='precio' name='precio' placeholder='Texto' class='form-control' value=''>
                                                </div>
                                                </div>
 
                                    
                                                <hr>
                 
                                                <div class="form-actions">
                                                   <button type="submit" class="btn btn-success btn-lg btn-block">Guardar</button>
                                                </div>
                                        </form>
                                    </div>
                    </div>
           </div></CENTER>  
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content --> <!-- movie list -->


        </div> <!-- main -->
        <br><br><br><br>
        
        <footer><?php require_once("../footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>
  <script src="../script/datatables.min.js"></script>
<script src="../script/dataTables.bootstrap.min.js"></script>
<script src="../script/datatables-init.js"></script>

</body>
</html>
