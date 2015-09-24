<?php include ('views/comun/aahihh_head.php'); ?>
hshshshshsh
    <div class="container-fluid">
    <div class="row">    
        <?php include ('alhghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8 fondo-azul">

                <br>
                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-4 col-md-offset-4">   
                            
                            <form class="form-inline" role="form" name="formulario" method="post" action="#">
                            <div class="form-group datos_nueva_sucursal">
                                   <label for="dy">Pa&iacute;s:</label>
                                   <br>
                                   <select name="paisSuc" class="form-control" id="dy" style="width:195px;">
                                       <option value="Colombia">Colombia</option>
                                   </select>
                            </div>
                            <br><br>
                            <div class="form-group datos_nueva_sucursal">
                                   <label for="ci">Ciudad:</label>
                                   <br>
                                   <select name="ciudad" class="form-control" id="ci" style="width:195px;">
                                       <option value="0">-- Seleccionar --</option>
                                       <option value="1" >Abejorral</option>
                                       <option value="2" >Abrego</option>
                                       <option value="1074" >Zetaquirá</option>
                                       <option value="1075" >Zipacón</option>
                                       <option value="1076" >Zipaquirá</option>
                                </select>
                            </div>
                            <br><br>                             
                            <div class="form-group datos_nueva_sucursal">
                                <label for="dd">Barrio / zona:</label>
                                <br>
                                <input type="text" class="form-control" name="desde" id="dd">
                            </div>
                            <br><br>
                            <div class="form-group datos_nueva_sucursal">
                                <label for="dd">Direcci&oacute;n sucursal:</label>
                                <br>
                                <input type="text" class="form-control" name="desde" id="dd">
                            </div>
                            <br><br>
                            <div class="form-group datos_nueva_sucursal">
                                <label for="dd">Tel&eacute;fono:</label>
                                <br>
                                <input type="text" class="form-control" name="desde" id="dd">
                            </div>
                            <br><br>
                            <div class="form-group datos_nueva_sucursal">
                                <label for="dd">Email sucursal:</label>
                                <br>
                                <input type="email" class="form-control" name="desde" id="dd">
                            </div>
                            <div style="height:33px; float:none; clear:both;"></div>
                            <div>
                            <button type="submit" class="btn btn-primary">Crear sucursal</button>
                            </div>
                        </form>
                </div>
            </div>

        <div style="height:25px; float:none; clear:both;"></div>  
    </div>    
    </div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php include ('aayyhh_footer.php'); ?>       







