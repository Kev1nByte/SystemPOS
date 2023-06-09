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
        
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

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

            <tbody>

              <tr>

                <td>1</td>
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0001</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>Lorem ipsum </td>
                <td>20</td>
                <td>5.00</td>
                <td>10.00</td>
                <td>2023-06-11 12:05:32</td>

                <td>

                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>

                </td>

              </tr>

              <tr>

                <td>1</td>
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0002</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>Lorem ipsum </td>
                <td>20</td>
                <td>5.00</td>
                <td>10.00</td>
                <td>2023-06-11 12:05:32</td>

                <td>

                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>

                </td>

              </tr>

              <tr>

                <td>1</td>
                <td><img src="views/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                <td>0003</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                <td>Lorem ipsum </td>
                <td>20</td>
                <td>5.00</td>
                <td>10.00</td>
                <td>2023-06-11 12:05:32</td>

                <td>

                  <div class="btn-group">

                    <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>
                    <button class="btn btn-danger"><i class="fa fa-times"></i></button>

                  </div>

                </td>

              </tr>



            </tbody>

        </table>

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

            <!-- Entrada para el código -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCodigo" placeholder="Ingresar código" required>

              </div>

            </div>

            <!-- Entrada para la descripción -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDescripcion" placeholder="Ingresar descripción" id="nuevaDescripcion" required>

              </div>

            </div>         

            <!-- Entrada para seleccionar categoría-->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" name="nuevoCategoria">
                  
                  <option value="">Selecionar categoría</option>

                  <option value="Taladros">Taladros</option>

                  <option value="Andamios">Andamios</option>

                  <option value="Equipos para la construcción">Equipos para la construcción</option>

                </select>

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

                  <input type="number" class="form-control input-lg" id="nuevoPrecioCompra" name="nuevoPrecioCompra" min="0"  placeholder="Precio de compra" required>

                </div>

              </div>

              <!-- Entrada para el precio venta -->         
                
              <div class="col-xs-12 col-sm-6">

                <div class="input-group">
                  
                  <span class="input-group-addon"><i class="fa fa-arrow-down"></i></span> 

                  <input type="number" class="form-control input-lg" id="nuevoPrecioVenta" name="nuevoPrecioVenta" min="0" placeholder="Precio de venta" required>
              
                </div>

                <br>

                <!-- Check box para porcentaje -->

                <div class="col-xs-6">
                    
                  <div class="form-group">
                      
                    <label>
                        
                      <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje

                    </label>

                  </div>

                </div>

                <!-- Entrada para porcentaje -->

                <div class="col-xs-6" style="padding:0">
                    
                  <div class="input-group">
                      
                    <input type="number" class="form-control input-lg nuevoPorcentaje" min="0" value="40" required>

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

    </div>

  </div>

</div>