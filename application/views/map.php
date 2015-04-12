
    <!-- Page Content -->

<div class="row-offcanvas">
  <div id="sidebar" class="sidebar-offcanvas">
      <div class="col-md-12" id="sidebar-inside">

          <ul class="nav nav-tabs">
          <li class="active"><a href="#pane1" data-toggle="tab">Resultados</a> </li>
          <li><a href="#pane2" data-toggle="tab">Soluciones</a></li>
        </ul>
         <div class="tab-content">
           <div id="pane1" class="tab-pane active">
             <label  id="text">Filtrar:</label>


             <form id="searchTestForm" class="form-group"  method="post" action="<?php echo site_url('/test/update'); ?>"> 
                  <!--  -->
                    <div class="form-group">
                        <label id="text">Nombres</label>
                        <div >
                            <input type="text" class="form-control"  
                            name="res_username" id="res_username" />
                             <!-- placeholder="Nombre Usuario"  -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label  id="text">Tipo de Prueba</label>
                         <div >
                          <select class="form-control" name="id_test" id="id_test" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label  id="text">Latitud</label>
                        <div >
                            <input type="text" class="form-control" name="res_lat" id="res_lat"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  id="text">Longitud</label>
                        <div >
                            <input type="text" class="form-control" name="res_long" id="res_long"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label  id="text">Tipo de fuente</label>
                        <div >
                            
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio1" value="option1"> Agua de caño
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio2" value="option2"> Tanque
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio3" value="option3"> Fuente principal
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-3">
                            <button type="submit" id="button" class="btn btn-default"  disabled="disabled" >Buscar</button>
            
                        </div>
                    </div>

                </form>





           </div>
           <div id="pane2" class="tab-pane">
                <label  id="text">Filtrar:</label>
           </div>
        </div>


      </div>
  </div>
    <div class="container" id="map-wrapper">
      <!-- Botón slider -->
       <button type="button" id="btn-map"  class="btn btn-link btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i><img src="<?php echo base_url();?>assets/img/test_tube.png">
       </button>
      
      <!-- Contenedor encima del mapa -->
      <div class="well row" id="well-top">

       
          <div class="col-md-3"  >
            <button class="btn btn-warning btn-lg" data-toggle="modal" data-target="#loginModal" >Agregar <br>resultados</button> <br>

            <button class="btn btn-info btn-lg">Agregar <br>soluciones</button>
          </div>
          <div class="col-md-9" >
          <!-- <button id="btn-location">loc</button> -->
            <label id="textlat">Latitud: </label>
             <br>
            <label id="textlng">Longitud: </label>
          </div>
        
     </div>

     <!-- Mapa -->
      <div id="map"> </div>
      
      <div id="main">
       
      </div>
    </div>
  
</div>

 <!-- Modal: Insertar Resultados -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"  >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Agregar resultados</h4>
            </div>
              

              <div class="modal-body">
           

                <!-- The form is placed inside the body of modal -->
                <div id="alertBox" class="alert alert-warning fade in hide" role="alert">
                  <button type="button" class="close" data-dismiss="alert">
                      <span aria-hidden="true">×</span>
                      <span class="sr-only">Cerrar</span>
                  </button>
                  <p>Gracias por añadir tus resultados.</p>
                </div>


                <form id="loginForm" class="form-horizontal"  method="post" action="<?php echo site_url('/test/update'); ?>"> 
                  <!--  -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Nombres</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control"  
                            name="res_username" id="res_username" />
                             <!-- placeholder="Nombre Usuario"  -->
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Tipo de Prueba</label>
                         <div class="col-md-5">
                          <select class="form-control" name="id_test" id="id_test" >
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                          </select>
                          </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Latitud</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="res_lat" id="res_lat"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Longitud</label>
                        <div class="col-md-5">
                            <input type="text" class="form-control" name="res_long" id="res_long"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Tipo de fuente</label>
                        <div class="col-md-5">
                            
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio1" value="option1"> Agua de caño
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio2" value="option2"> Tanque
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="result_source" id="inlineRadio3" value="option3"> Fuente principal
                        </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" id="text">Descripción</label>
                        <div class="col-md-5">
                            <textarea class="form-control" rows="2" name="res_description" id="res_description"></textarea>                   
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-3">
                            <button type="submit" id="button" class="btn btn-default" >Guardar</button>
                            <!-- type="submit" -->
                             <button type="reset"  class="btn btn-default" >Resetear</button>

                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>


