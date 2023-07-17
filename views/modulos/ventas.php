<div class="content-wrapper">
  
  <section class="content-header">
    <h1>
      Agregar Ventas
    </h1>
    <ol class="breadcrumb">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Agregar Ventas</li>
    </ol>
  </section>

  <section class="content">

    <div class="box">     

      <div class="box-header with-border">

        <a href="crear-venta">

          <button class="btn btn-primary">

            Agregar Venta

          </button>

        </a>

      </div>
      
      <div class="box-body">
        
          <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

            <thead>

              <tr>

                <th style="width:10px">#</th>
                <th>Código factura</th>
                <th>Cliente</th>
                <th>Vendedor</th>
                <th>Forma de pago</th>
                <th>Neto</th>
                <th>Total</th>
                <th>Fecha</th>
                <th>Acciones</th>

              </tr>

            </thead>

            <tbody>

            <!-- CLIENTES -->

            <?php

              $item = null;
              $valor = null;

              $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

              foreach ($clientes as $key => $value) {
                

                echo '<tr>

                        <td>'.($key+1).'</td>

                        <td>'.$value["nombre"].'</td>

                        <td>'.$value["documento"].'</td>

                        <td>'.$value["email"].'</td>

                        <td>'.$value["telefono"].'</td>

                        <td>'.$value["direccion"].'</td>

                        <td>'.$value["fecha_nacimiento"].'</td>             

                        <td>'.$value["compras"].'</td>

                        <td>'.$value["ultima_compra"].'</td>

                        <td>'.$value["fecha"].'</td>

                        <td>

                          <div class="btn-group">

                            <button class="btn btn-warning btnEditarCliente" data-toggle="modal" data-target="#modalEditarCliente" idCliente="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                            <button class="btn btn-danger btnEliminarCliente" idCliente="'.$value["id"].'"><i class="fa fa-times"></i></button>

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

