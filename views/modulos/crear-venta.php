<div class="content-wrapper">
  
  <section class="content-header">

    <h1>

        Crear Venta
    </h1>

    <ol class="breadcrumb">

        <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
        
        <li class="active">Crear Venta</li>
   
    </ol>

  </section>

  <section class="content">

    <div class="row">

      <!-- EL FORMULARIO -->

      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success">  

          <div class="box-header with-border"></div>

          <div class="box-body">

            <form role="form" method="post">

              <div class="box">

                <!-- ENTRADA DEL VENDEDOR -->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>" readonly>

                    <input type="hidden" id="nuevoVendedor" name="nuevoVendedor" value="Usuario Administrador" readonly>

                  </div>

                </div> 

                <!-- ENTRADA DEL CÓDIGO -->

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-key"></i></span>

                    <input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly>
                                    
                  </div>
                
                </div>

                <!-- ENTRADA DEL CLIENTE -->

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

                      <option value="">Seleccionar cliente</option>

                    </select>
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>
                  
                  </div>
                
                </div>

                <!-- ENTRADA PARA AGREGAR PRODUCTO -->

                <div class="form-group row nuevoProducto">

                  <!-- DESCRIPCION DEL PRODUCTO -->

                  <div class="col-xs-6" style="padding-right:0px">
                    
                    <div class="input-group">

                      <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></span></button></span>

                      <input type="text" class="form-control" id="agregarProducto" name="agregarProducto" placeholder="Descripción del producto" required>

                    </div>

                  </div>

                  <!-- CANTIDAD DEL PRODUCTO -->

                  <div class="col-xs-3">

                    <input type="number" class="form-control" id="nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" placeholder ="0" required>

                  </div>

                  <!-- PRECIO DEL PRODUCTO -->

                  <div class="col-xs-3" style="padding-left:0px">
                    
                    <div class="input-group">

                      <input type="number" class="form-control" id="nuevaPrecioProducto" name="nuevaPrecioProducto" min="1" placeholder="000000" readonly required>

                      <span class="input-group-addon"><i class="ion ion-social-usd"></i></span> 

                    </div>

                  </div>
          
                </div>

                <!-- BOTON PARA AGREGAR PRODUCTO -->

                <button type="button" class="btn btn-default hidden-lg">Agregar producto</button>

                <hr>

                <div class="row">

                  

                </div>

              </div>

            </form>

          </div>

        </div>
      
      </div>

      <!-- LA TABLA DE PRODUCTOS -->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">
        
        <div class="box box-warning"> 



        </div>

      </div>

    </div>
   
  </section>

</div>

<!-- Modal Agregar Usuario -->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!-- Cabeza del modal -->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!-- Cuerpo modal -->

        <div class="modal-body">

          <div class="box-body">

            <!-- Entrada para el nombre -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- Entrada para el documento ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- Entrada para el email -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- Entrada para el teléfono -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono"
                data-inputmask="'mask':'(99) 999-999-999'" data-mask required>

              </div>

            </div>

            <!-- Entrada para la dirección -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

            <!-- Entrada para la fecha de nacimiento -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!-- Pie Modal -->
        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

      <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>