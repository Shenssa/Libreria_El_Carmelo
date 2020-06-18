<?php
require_once("conexion.php");
$palabra=$_REQUEST["palabra"];
$sql="SELECT * FROM libros WHERE nombre or autor LIKE '%".$palabra."%'";
$result=mysqli_query($conexion,$sql);
$mostrar=mysqli_fetch_array($result);
//header('Location: ../index_admin.php');
?>
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
				<input type="text" placeholder="Buscar libro..."/>
				<p class="fa fa-search"></p>
			</div>

			<menu class="menu">
                            <p class="menu-name">
                                GÉNEROS LITERARIOS
                            </p>
                            <ul>
                                <li>
                                    <a href="educacion.php">
                                        EDUCACIÓN
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="">
                                                INICIAL
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                PRIMARIA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                SECUNDARIA
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                SUPERIOR
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="accion_aventuras.php">
                                        ACCIÓN / AVENTURAS
                                    </a>
                                </li>
                                <li>
                                    <a href="poesia.php">
                                        POESÍA
                                    </a>
                                </li>
                                <li>
                                    <a href="fantasia.php">
                                        FANTASÍA
                                    </a>
                                </li>
                                <li>
                                    <a href="terror.php">
                                        TERROR
                                    </a>
                                </li>
                                <li>
                                    <a href="drama.php">
                                        DRAMA
                                    </a>
                                </li>
                                <li>
                                    <a href="cuentos.php">
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
						<b>COLECCIÓN</b> Todos nuestros libros
					</div>	
				</div> <!-- Fin info de pagina -->
			</div> <!-- featured -->


			<div class="movie-list">


				<ul class="list">
								<?php 
								$palabra=$_REQUEST["palabra"];
								$sql="SELECT * FROM libros WHERE nombre or autor LIKE '%".$palabra."%'";
								$result=mysqli_query($conexion,$sql);

                                while($mostrar=mysqli_fetch_array($result)){
                                ?>

					           <li>
                                    <td><?php echo "<img alt='' class='cover' src='".$mostrar["portada"]."'>"; ?></td>
                                    <p class="title"><?php echo $mostrar['nombre'] ?></p>
                                    <p class="title">S/<?php echo $mostrar['precio'] ?></p>
                                    <p class="genre"><?php echo "<a style='color:#85929E;' href='".$mostrar["genero"].".php'>".$mostrar['genero']."</a>"?></p>
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
