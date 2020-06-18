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
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="../script/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

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
                                <li class="active">
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
                                <li>
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
                        <b>ADMINISTRA</b> Todos nuestros libros
                    </div>  
                </div> <!-- Fin info de pagina -->
            </div> <!-- featured -->


            <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            
                                <div class="card-header" align="center">
                                <form action="agregar/agregar_libro.php">
                                                <div class="form-actions">
                                                   <a href="agregar/agregar_libro.php" class="btn btn-success  btn-lg btn-block">AGREGAR UN NUEVO LIBRO</a>
                                                </div>
                                        </form>
                            </div>
                        
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>id</th>
                                                <th>Nombre</th>
                                                <th>Género</th>
                                                <th>Autor</th>
                                                <th>Portada</th>
                                                <th>Precio</th>
                                                <th>Descripción</th>
                                                <th>EDITAR</th>
                                                <th>ELIMINAR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                                    $sql="SELECT * from libros";
                                                    $result=mysqli_query($conexion,$sql);
                                                    while($mostrar=mysqli_fetch_array($result)){
                                                ?>
                                        <tr>
                                                    <td><?php echo $mostrar['id'] ?></td>
                                                    <td><?php echo $mostrar['nombre'] ?></td>
                                                    <td><?php echo $mostrar['genero'] ?></td>
                                                    <td><?php echo $mostrar['autor'] ?></td>    
                                                    
                                                    <td><center><?php echo "<img align='center' width='50' height='65' src='".$mostrar["portada"]."'>"; ?></center></td>
                                                    <td>S/<?php echo $mostrar['precio'] ?></td>
                                                    <td><?php echo
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
                    <td><img  width='150' height='195' src='".$mostrar['portada']."'></td>
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
                   </td>
<td class="center"><a class="btn btn-success" href="editar/editar_libro.php?id=<?php echo $mostrar['id'] ?>">EDITAR</a></td>

<td class="center" onclick="return Confirmar()"><a class="btn btn-danger" href="eliminar/eliminar_libro.php?id=<?php echo $mostrar['id'] ?>">ELIMINAR</a></td>
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
