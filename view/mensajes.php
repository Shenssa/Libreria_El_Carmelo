<?php require_once("conexion.php") ?>
<!DOCTYPE html>
<html lang="en" >
<head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
            <title>
                EL CARMELO
            </title>
            <link href="../css/reset.min.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
            <link rel="stylesheet" href="../css/bootstrap.min.css">
            <link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">

        </meta>
  <title>El Carmelo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="../css/style.css">

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
                require_once("top-bar.php");
                ?>
            </div> <!-- top bar -->


            <div class="featured-movie">
                <img class="cover" src="../imagenes/admin.png" alt="" class="cover" />
                <!-- Info de pagina -->
                <div class="bottom-bar">
                    <div class="title-container">
                        <b>VISUALIZA</b> Todos los mensajes
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                        
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                                <th>ID</th>
                                                <th>NOMBRES</th>
                                                <th>TELEFONO</th>
                                                <th>E-MAIL</th>
                                                <th>ASUNTO</th>
                                                <th>MENSAJE</th>
                                                <th>RESPONDER</th>
                                                <th>ELIMINAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                    $sql="SELECT * from mensajes";
                                                    $result=mysqli_query($conexion,$sql);
                                                    while($mostrar=mysqli_fetch_array($result)){
                                                ?>
                                        <tr>
                                                    <td><?php echo $mostrar['id'] ?></td>
                                                    <td><?php echo $mostrar['nombres'] ?></td>
                                                    <td><?php echo $mostrar['fono'] ?></td>
                                                    <td><?php echo $mostrar['email'] ?></td> 
                                                    <td><?php echo $mostrar['asunto'] ?></td>
                                                    <td><?php echo "<textarea readonly='readonly' rows='2' cols='50' type='text' id='recibido' name='recibido' placeholder='Texto' class='form-control' 
                                                    >".$mostrar['mensaje']."</textarea>" ?></td>
<td class="center"><a class="btn btn-success" href="respuesta.php?id=<?php echo $mostrar['id'] ?>">RESPONDER</a></td>

<td class="center" onclick="return Confirmar()"><a class="btn btn-danger" href="eliminar/eliminar_mensaje.php?id=<?php echo $mostrar['id'] ?>">ELIMINAR</a></td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content --> <!-- movie list -->


        </div> <!-- main -->
        <br><br><br><br>
        
        <footer><?php require_once("footer.php") ?></footer>

    </div> <!-- window -->

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="../script/script.js"></script>
  <script src="../script/datatables.min.js"></script>
<script src="../script/dataTables.bootstrap.min.js"></script>
<script src="../script/datatables-init.js"></script>

</body>
</html>
