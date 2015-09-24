<?php include ('aahihh_head.php'); ?>

    <div class="container-fluid">
    <div class="row">    
        <?php include ('cahghh_navegador.php'); ?>

        <div class="col-xs-12 col-sm-8 col-md-8" style="margin-top:20px;">


                <div class="row">
                    <div class="col-xs-8 col-sm-8 col-md-8 col-xs-offset-4 col-sm-offset-4 col-md-offset-4">   
                            
                            <form class="form-inline" role="form" name="formulario" method="post" action="cahjhh_cajero_ventas_nueva_factura_2.php">
                            <div class="form-group datos_nueva_sucursal">
                                   <label for="ci">Tipo documento:</label>
                                   <br>
                                   <select name="ciudad" class="form-control" id="ci" style="width:195px;">
                                       <option value="1" >Ced. ciudadania</option>
                                       <option value="2" >Ced. extranjeria</option>
                                       <option value="3" >NIT</option>
                                       <option value="1" >Pasaporte</option>
                                </select>
                            </div>
                            <br><br><br><br><br>                            
                            <div class="form-group datos_nueva_sucursal">
                                <label for="dd">Número identificación:</label>
                                <br>
                                <input type="text" class="form-control" name="" id="dd">
                            </div>
                            <br><br><br>
                            <div style="height:33px; float:none; clear:both;"></div>
                            <div>
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                            </div>
                        </form>
                        <br><br><br>
                        <article>
                            <i>El cliente ejemplo para esta sucursal es: <b>129</b></i>
                        </article>
                    </div>
                </div>

                <div style="height:225px; float:none; clear:both;"></div>  
        </div>    
    </div>
    </div>

<?php include ('aayyhh_footer.php'); ?>       







