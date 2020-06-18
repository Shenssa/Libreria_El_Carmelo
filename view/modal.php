<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="../script/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>

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