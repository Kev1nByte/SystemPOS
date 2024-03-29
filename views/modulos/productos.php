<?php

if($_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper">
  
  <section class="content-header">
    <h1>
        Administrar Productos
    </h1>
    <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Administrar Productos</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">     

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">

          Agregar Producto

        </button>

      </div>
      
      <div class="box-body">
        
        <table class="table table-bordered table-striped dt-responsive tablaProductos tbody" width="100%">

          <thead>

            <tr>

              <th style="width:10px">#</th>
              <th>Imagen</th>
              <th>Código</th>
              <th>Descripción</th>
              <th>Categoría</th>
              <th>Stock</th>
              <th>Precio de Compra</th>
              <th>Precio de Venta</th>
              <th>Agregado</th>
              <th>Acciones</th>

            </tr>

          </thead>

          </table>

        <input type="hidden" value="<?php echo $_SESSION['perfil']; ?>" id="perfilOculto">

      </div>
    
    </div>
    
  </section>
   
</div>

<!-- Modal Agregar Producto -->

<div id="modalAgregarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!-- Cabeza del modal -->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar producto</h4>

        </div>

        <!-- Cuerpo modal -->

        <div class="modal-body">

          <div class="box-body">

              <!-- Entrada para seleccionar categoría-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="nuevaCategoria" name="nuevaCategoria" required>
                    
                  <option value="">Selecionar categoría</option>

                  <?php

                    $item = null;
                    $valor = null;

                    $categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);

                    foreach ($categorias as $key => $value) {
                      
                      echo '<option value="'.$value["id"].'">'.$value["categoria"].'</option>';

                    }

                    ?>

                </select>

              </div>

            </div>

            <!-- Entrada para el código -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="nuevoCodigo" name="nuevoCodigo" placeholder="Ingresar código" readonly required>

              </div>

            </div>

            <!-- Entrada para la descripción -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" required>
                    
              </div>

            </div>         

            <!-- Entrada para el stock -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" name="nuevoStock" min="0" placeholder="Stock" required>
           
              </div>

            </div>

            <!-- Entrada para el precio compra -->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-6">
                
                <div class="input-group">
                
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 

                  <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0" step="any" placeholder="Precio de compra" required>

                </div>

              </div>

              <!-- Entrada para el precio venta -->         
                
              <div class="col-xs-12 col-sm-6">

                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                  <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" step="any" placeholder="Precio de venta" required>

                </div>

                <br>

                <!-- Check box para porcentaje -->

                <div class="col-xs-12 col-sm-6">
                    
                  <div class="form-group">
                      
                    <label>
                        
                      <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje

                    </label>

                  </div>

                </div>

                <!-- Entrada para porcentaje -->

                <div class="col-xs-12 col-sm-6" style="padding:0">
                    
                  <div class="input-group">
                      
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" step="any" value="40" required>

                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>
                
              </div>

            </div>

             <!-- Entrada para subir imagen -->

             <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="nuevaImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="views/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

            </div>

          </div>

        </div>

        <!-- Pie Modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar producto</button>

        </div>

      </form>

      <?php

      $crearProducto = new ControladorProductos();
      $crearProducto -> ctrCrearProducto();

      ?>  

    </div>

  </div>

</div>

<!-- Modal Editar Producto -->

<div id="modalEditarProducto" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!-- Cabeza del modal -->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar producto</h4>

        </div>

        <!-- Cuerpo modal -->

        <div class="modal-body">

          <div class="box-body">

              <!-- Entrada para seleccionar categoría-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg"  name="editarCategoria" readonly required>
                  
                  <option id="editarCategoria"></option>

                </select>

              </div>

            </div>

            <!-- Entrada para el código -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="editarCodigo" name="editarCodigo" readonly required>

              </div>

            </div>

            <!-- Entrada para la descripción -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" required>

              </div>

            </div>         

            <!-- Entrada para el stock -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-check"></i></span> 

                  <input type="number" class="form-control input-lg" id="editarStock" name="editarStock" min="0" required>

              </div>

            </div>

            <!-- Entrada para el precio compra -->

            <div class="form-group row">

              <div class="col-xs-12 col-sm-6">
                
                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-up"></i></span> 
                  
                  <input type="number" class="form-control input-lg" id="editarPrecioCompra" name="editarPrecioCompra" min="0" step="any" required>

                </div>

              </div>

              <!-- Entrada para el precio venta -->         
                
              <div class="col-xs-12 col-sm-6">

                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                  <input type="number" class="form-control input-lg" id="editarPrecioVenta" name="editarPrecioVenta" min="0" step="any" readonly required>

                </div>

                <br>

                <!-- Check box para porcentaje -->

                <div class="col-xs-12 col-sm-6">
                    
                  <div class="form-group">
                      
                    <label>
                        
                      <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje

                    </label>

                  </div>

                </div>

                <!-- Entrada para porcentaje -->

                <div class="col-xs-12 col-sm-6" style="padding:0">
                    
                  <div class="input-group">
                      
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" step="any" value="40" required>
                    
                    <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                  </div>

                </div>
                
              </div>

            </div>

             <!-- Entrada para subir imagen -->

            <div class="form-group">
              
              <div class="panel">SUBIR IMAGEN</div>

              <input type="file" class="nuevaImagen" name="editarImagen">

              <p class="help-block">Peso máximo de la imagen 2MB</p>

              <img src="views/img/productos/default/anonymous.png" class="img-thumbnail previsualizar" width="100px">

              <input type="hidden" name="imagenActual" id="imagenActual">

            </div>

          </div>

        </div>

        <!-- Pie Modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cambios</button>

        </div>

      </form>

      <?php

        $editarProducto = new ControladorProductos();
        $editarProducto -> ctrEditarProducto();

      ?> 

    </div>

  </div>

</div>

<?php

  $eliminarProducto = new ControladorProductos();
  $eliminarProducto -> ctrEliminarProducto();

?>      

