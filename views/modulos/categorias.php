<div class="content-wrapper">
  
  <section class="content-header">

    <h1>
      Administrar Categoría
    </h1>

    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar Categorías</li>
    </ol>

  </section>

  <section class="content">

    <div class="box">     

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarCategoria">

          Agregar Categoría

        </button>

      </div>
      
      <div class="box-body">
        
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

            <thead>

              <tr>

                <th style="width:10px">#</th>
                <th>Categoría</th>
                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>
       
            <!-- CATEGORIAS -->        

            <?php

              $item = null;
              $valor = null;

              $categorias = ControladorCategorias::ctrMostrarCategorias($item,$valor);

              // CATGEORIAS EN MAYUSCULAS class="text-uppercase"

              foreach ($categorias as $key => $value) {
           
                echo ' <tr>
    
                        <td>'.($key+1).'</td>

                        <td class="text-uppercase">'.$value["categoria"].'</td>
    
                        <td>
    
                          <div class="btn-group">
                              
                            <button class="btn btn-warning btnEditarCategoria" idCategoria="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarCategoria"><i class="fa fa-pencil"></i></button>
    
                            <button class="btn btn-danger btnEliminarCategoria" idCategoria="'.$value["id"].'"><i class="fa fa-times"></i></button>
    
                          </div>  
    
                        </td>
    
                      </tr>';
              }

            ?>     

            </tbody>

        </table>

      </div>
    
    </div>
    
  </section>
   
</div>

<!-- Modal Agregar Categoría -->

<div id="modalAgregarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!-- Cabeza del modal -->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar categoría</h4>

        </div>

        <!-- Cuerpo modal -->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre categoría -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaCategoria" placeholder="Ingresar categoría" required>

              </div>

            </div>

          </div>

        </div>

        <!-- Pie Modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar categoría</button>

        </div>

        <?php

          $crearCategoria = new ControladorCategorias();
          $crearCategoria -> ctrCrearCategoria();

        ?>

      </form>

    </div>

  </div>

</div>

<!-- Modal Editar Categoría -->

<div id="modalEditarCategoria" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!-- Cabeza del modal -->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar categoría</h4>

        </div>

        <!-- Cuerpo modal -->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para editar la categoría -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <input type="text" class="form-control input-lg" name="editarCategoria" id="editarCategoria"  required>

                <input type="hidden"  name="idCategoria" id="idCategoria" required>

              </div>

            </div>

          </div>

        </div>

        <!-- Pie Modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Cambios</button>

        </div>

        <?php

          $editarCategoria = new ControladorCategorias();
          $editarCategoria -> ctrEditarCategoria();

        ?>

      </form>

    </div>

  </div>

</div>


<?php

  $borrarCategoria = new ControladorCategorias();
  $borrarCategoria -> ctrBorrarCategoria();

?>
